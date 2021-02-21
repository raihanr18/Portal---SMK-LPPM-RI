<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Blog;
use hash;
use App\Models\Category;

class Portal extends Controller
{

    public function show(){
        $artikel = DB::table('posts')->orderby('id', 'desc')->get();
        return view('admin.artikel', ['artikel'=>$artikel]);
    }

    public function showAdmin(){

        $admin = DB::table('users')->orderby('id', 'desc')->get();
        
        return view('admin.admin', ['admin'=>$admin]);

    }

    public function index(){
        $artikel = DB::table('posts')->orderBy('id', 'desc')->get();

        return view('index', ['artikel' =>$artikel]);
    }

    public function addTags(Request $request){

        DB::table('category')->insert([
            'title' => $request->kategori,
        ]);

        return redirect('/tags')->with('success', 'Tags berhasil ditambahkan');

    }

    public function addAdmin(Request $request){

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        auth()->user()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/admin')->with('success', 'Admin telah berhasil ditambahkan');

    }

    public function detailArtikel($slug){

        $artikel = DB::table('posts')->where('slug', $slug)->first();

        return view('content.details', ['artikel' => $artikel]);

    }

    public function foto(){

        $foto = DB::table('galeri')->orderby('id', 'desc')->get();

        return view('admin.foto', ['foto' => $foto]);

    }

    public function deleteAdmin($id){

        $delete = DB::table('users')->where('id', $id)->delete();

        return redirect('/admin')->with('delete', 'Admin telah dihapus');

    }

    public function editTags($id){

        $edit = DB::table('category')->where('id', $id)->first();

        return view('content.edittags', ['edit' => $edit]);

    }

    public function deleteTags($id){

        $delete = DB::table('category')->where('id', $id)->delete();

        return redirect('/tags')->with('delete', 'Tags berhasil dihapus');

    }

    public function updateTags(Request $request, $id){

        $tags = $request->kategori;

        $edit = DB::table('category')->where('id', $id)->update([
            'title' => $tags
        ]);

        return redirect('/tags');

    }

    public function tags(){
        $tags = DB::table('category')->orderBy('id', 'desc')->get();

        return view('admin.tags', ['tags'=>$tags]);
    }

    public function dashboard(){
        $data    = DB::table('posts')->count();
        $tags    = DB::table('category')->count();
        $galeri  = DB::table('galeri')->count();
        return view('admin.main', 
        [
            'data'=>$data,
            'tags' =>$tags,
            'galeri' =>$galeri
            ]);
    }

    public function formArticle(){

        $tags = DB::table('category')->orderBy('id', 'desc')->get();

        return view('content.addarticle', ['tags'=>$tags]);

    }

    public function addFoto(Request $request){

        $this->validate($request, [
            'foto' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $files = $request->file('foto');

        foreach ($files as $file){

        $imgName = $file->getClientOriginalName() . '-' . rand(1, 20000) . '.' . $file->extension(); 

        $file->move(public_path('galeri'), $imgName);
        DB::table('galeri')->insert([
            'content' => $imgName,
            'deskripsi' => $request->deskripsi,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),

        ]);

        }

        return redirect('/foto')->with('success', 'Foto berhasil ditambahkan');

    }    

    public function showGaleri(){

        $galeri = DB::table('galeri')->orderby('id', 'desc')->get();

        return view('galeri.galeri', ['galeri' => $galeri]);    

    }

    public function deleteFoto($id){

        $delete = DB::table('galeri')->where('id', $id)->delete();

        return redirect('/foto')->with('delete', 'Foto berhasil dihapus');

    }

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

    public function deleteArticle($id){

        $hapus      = DB::table('posts')->where('id', $id);
        $image_path = public_path().'/content'.$hapus->thumbnail;
        unlink($image_path);

        $hapus->delete();

        return redirect()->back()->with('delete', 'Artikel berhasil dihapus');

    }

    public function updatePassword(request $request){

        request()->validate([
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPassword = auth()->user()->password;
        $oldPassword = $request->old_password;

        if(\Hash::check($oldPassword, $currentPassword)){

            auth()->user()->update([
                'name' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            return back()->with('success', 'Password sudah diubah');

        }else{

            return back()->withErrors(['old_password' => 'Pastikan data yang kamu masukan valid']);

        }

    }

    public function upload(Request $request){

     if($request->hasFile('upload')) {
         $originName = $request->file('upload')->getClientOriginalName();
         $fileName = pathinfo($originName, PATHINFO_FILENAME);
         $extension = $request->file('upload')->getClientOriginalExtension();
         $fileName = $fileName.'_'.time().'.'.$extension;
        
         $request->file('upload')->move(public_path('content'), $fileName);
   
         $CKEditorFuncNum = $request->input('CKEditorFuncNum');
         $url = asset('content/'.$fileName); 
         $msg = 'Gambar berhasil diunggah'; 
         $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
         @header('Content-type: text/html; charset=utf-8'); 
         echo $response;

     }
    }

}
