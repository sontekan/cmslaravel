<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Kategori;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::select('id','judul','banner','id_kategori')->latest()->simplePaginate(5);
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::select('id','nama')->get();
        return view('admin.post.create', compact('kategori'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'banner' => 'required|mimes:jpg,jpeg,png',
            'artikel' => 'required',
            'kategori' => 'required',
        ]);

        $banner = time(). '-' .$request->banner->getClientOriginalName();
        $request->banner->move('upload',$banner);

        Post::create([
            'judul'=>$request->judul,
            'banner'=>$banner,
            'artikel'=>$request->artikel,
            'id_kategori'=>$request->kategori,
            'slug'=>Str::of($request->judul)->slug('-')
        ]);

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::select('id','judul','banner','artikel','created_at')->whereId($id)->firstOrFail();
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $kategori = Kategori::select('id','nama')->get();
        $post = Post::select('id','judul','banner','artikel','created_at','id_kategori')->whereId($id)->firstOrFail();
        return view('admin.post.edit', compact('post','kategori'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'banner' => 'mimes:jpg,jpeg,png',
            'artikel' => 'required',
            'kategori' => 'required',
        ]);

        $data = [
            'judul'=>$request->judul,
            'artikel'=>$request->artikel,
            'id_kategori'=>$request->kategori,
            'slug'=>Str::of($request->judul)->slug('-')
        ];

        $post = Post::select('banner','id')->whereId($id)->first();
        if ($request->banner) {
            File::delete('upload/'. $post->banner);

            $banner = time(). '-' .$request->banner->getClientOriginalName();
            $request->banner->move('upload',$banner);

            $data['banner'] = $banner;
        }

        $post->update($data);

        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::select('banner','id')->whereId($id)->first();
        File::delete('upload/'. $post->banner);
        $post->delete();

        return redirect('/post');
    }
}
