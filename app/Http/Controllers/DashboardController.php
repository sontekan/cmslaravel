<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\User;

class DashboardController extends Controller
{
    
    public function index() {

        $blog = Post::select('id','judul','banner','artikel','created_at','id_kategori','slug')->count();
        $kategori = Kategori::select('id','nama','slug')->count();
        $user = User::select('name','email','password')->count();
        return view('admin.dashboard', compact('blog','kategori','user'));
    }
}
