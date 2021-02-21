<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portal;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route utama
Route::get('/', [Portal::class, 'index']);
Route::get('/galery', [Portal::class, 'showGaleri']);
// Route::get('/profil', function(){
//     return view('galeri.galeri');
// });
Route::get('/kompetensi-keahlian', function(){
    return view('kompetensi-keahlian.kompetensi-keahlian');
});
Route::get('/guru-staf', function(){
    return view('guru-staf.guru-staf');
});

// Route admin dan proses add & delete
Route::get('/profil', function(){
    return view('admin.profil');
});
Route::get('/admin', [Portal::class, 'showAdmin']);
Route::get('/tambah-admin', function(){
    return view('content.addadmin');
});
Route::post('tambah-admin/addadmin', [Portal::class, 'addAdmin']);

// Main menu dashboard admin
Route::get('/main', [Portal::class, 'dashboard']);
Route::get('/artikel', [Portal::class, 'show']);
Route::get('/tags', [Portal::class, 'tags']);
Route::get('/foto', [Portal::class, 'foto']);
Route::get('/video', function(){
    return view('admin.video');
});

// auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// add process
Route::get('/tambah-tags', function(){
    return view('content.addtags');
});
Route::get('/tambah-foto', function(){
    return view('content.addfoto');
});

Route::post('/addfoto-process', [Portal::class, 'addFoto']);
Route::post('/addtags-process', [Portal::class, 'addTags']);
Route::get('/tambah-artikel', [Portal::class, 'formArticle']);
Route::post('/add-process', [Portal::class, 'addArticle']);
// end 

// update process
Route::post('/profil/ubah-password', [Portal::class, 'updatePassword']);
// end

// edit process
Route::get('/tags/{id}/edit-tags', [Portal::class, 'editTags']);
Route::put('/tags/{id}', [Portal::class, 'updateTags']);
// end

// delete process
Route::get('/foto/{id}/deleteFoto', [Portal::class, 'deleteFoto']);
Route::get('/tags/{id}/deleteTags', [Portal::class, 'deleteTags'] );
Route::get('/admin/{id}/delete-admin', [Portal::class, 'deleteAdmin']);
// end

// Route artikel
Route::get('/detail-artikel/{slug}', [Portal::class, 'detailArtikel']);

// routing sementara
Route::post('/test/Ck', [Portal::class, 'upload'])->name('ckeditor.upload');