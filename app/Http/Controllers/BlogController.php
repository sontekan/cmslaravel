<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;

class BlogController extends Controller
{

    public function index()
    {
        $blog = Post::select('id','judul','banner','artikel','created_at','id_kategori','slug')->latest()->paginate(5);
        $kategori = Kategori::select('id','nama','slug')->orderBy('nama', 'desc')->get();
        return view('blog.index', compact('blog','kategori'));
    }
     public function artikel($slug)
     {
        $blog = Post::select('id','judul','banner','artikel','created_at','id_kategori')->where('slug', $slug)->firstOrFail();
        $kategori = Kategori::select('id','nama')->orderBy('nama', 'desc')->get();
        return view('blog.post', compact('blog','kategori'));
     }

}
