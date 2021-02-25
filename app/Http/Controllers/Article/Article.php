<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use hash;

class Article extends Controller
{
    
    public function showArticle(){
        // $artikel = DB::table('posts')->orderby('id', 'desc')->get();
        $artikel = Post::all();

        return view('admin.artikel', compact('artikel'));
    }

    public function formArticle(){

        // $tags = DB::table('category')->orderBy('id', 'desc')->get();
        $article = Post::orderby('id', 'desc')->get();

        return view('content.addarticle', compact('article'));

    }

    public function detailArtikel($slug){

        // $artikel = DB::table('posts')->where('slug', $slug)->first();
        $artikel = Post::where('slug', $slug)->firstOrFail();

        return view('content.details', compact('artikel'));

    }

    // Process insert
    public function addArticle(Request $artikel){

        $imgName = $artikel->thumbnail->getClientOriginalName() . '-' . time() . '.' . $artikel->thumbnail->extension();

        $artikel->thumbnail->move(public_path('content'), $imgName);

        DB::table('posts')->insert([
            'category' => $artikel->category,
            'title' => $artikel->title,
            'slug' => Str::slug($artikel->title, '-'),
            'thumbnail' => $imgName,
            'deskripsi' => $artikel->deskripsi,
            'content' => $artikel->konten,
            'status' => $artikel->status,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);

        return redirect('/artikel')->with('success', 'Artikel berhasil ditambahkan');
    }

    // Process delete
    public function deleteArticle($id){

        $hapus      = DB::table('posts')->where('id', $id);
        $image_path = public_path().'/content'.$hapus->thumbnail;
        unlink($image_path);

        $hapus->delete();

        return redirect()->back()->with('delete', 'Artikel berhasil dihapus');

    }

    // Process update

}
