<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LayananHukumController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\SiaranpersController;
use App\Http\Controllers\TentangController;

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

Route::get('/', function () {
    return view('admin/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/berita',[BeritaController::class,'index'])->name('berita.index');
route::get('/donasi',[DonasiController::class,'index'])->name('donasi.index');
route::get('/kegiatan',[KegiatanController::class,'index'])->name('kegiatan.index');
route::get('/layanan',[LayananHukumController::class,'index'])->name('layanan.index');
route::get('/pengacara',[PengacaraController::class,'index'])->name('pengacara.index');
route::get('/pengumuman',[PengumumanController::class,'index'])->name('pengumuman.index');
route::get('/profil',[ProfilController::class,'index'])->name('profil.index');
route::get('/publikasi',[PublikasiController::class,'index'])->name('publikasi.index');
route::get('/siaranpers',[SiaranpersController::class,'index'])->name('siaranpers.index');
route::get('/tentang',[TentangController::class,'index'])->name('tentang.index');


route::get('/berita/tambah',[BeritaController::class,'create'])->name('berita.create');
route::get('/donasi/tambah',[DonasiController::class,'create'])->name('donasi.create');
route::get('/kegiatan/tambah',[KegiatanController::class,'create'])->name('kegiatan.create');
route::get('/layanan/tambah',[LayananHukumController::class,'create'])->name('layanan.create');
route::get('/pengacara/tambah',[PengacaraController::class,'create'])->name('pengacara.create');
route::get('/pengumuman/tambah',[PengumumanController::class,'create'])->name('pengumuman.create');
route::get('/profil/tambah',[ProfilController::class,'create'])->name('profil.create');
route::get('/publikasi/tambah',[PublikasiController::class,'create'])->name('publikasi.create');
route::get('/siaranpers/tambah',[SiaranpersController::class,'create'])->name('siaranpers.create');
route::get('/tentang/tambah',[TentangController::class,'create'])->name('tentang.create');


route::get('/berita/show/{berita}',[BeritaController::class,'show'])->name('berita.show');
route::get('/donasi/show/{donasi}',[DonasiController::class,'show'])->name('donasi.show');
route::get('/kegiatan/show/{kegiatan}',[KegiatanController::class,'show'])->name('kegiatan.show');
route::get('/layanan/show/{layanan_hukum}',[LayananHukumController::class,'show'])->name('layanan.show');
route::get('/pengacara/show/{pengacara}',[PengacaraController::class,'show'])->name('pengacara.show');
route::get('/pengumuman/show/{pengumuman}',[PengumumanController::class,'show'])->name('pengumuman.show');
route::get('/profil/show/{profil}',[ProfilController::class,'show'])->name('profil.show');
route::get('/publikasi/show/{publikasi}',[PublikasiController::class,'show'])->name('publikasi.show');
route::get('/siaranpers/show/{siaran_pers}',[SiaranpersController::class,'show'])->name('siaranpers.show');
route::get('/tentang/show/{tentang}',[TentangController::class,'show'])->name('tentang.show');


route::get('/berita/show/{berita}',[BeritaController::class,'edit'])->name('berita.edit');
route::get('/donasi/edit/{donasi}',[DonasiController::class,'edit'])->name('donasi.edit');
route::get('/kegiatan/edit/{kegiatan}',[KegiatanController::class,'edit'])->name('kegiatan.edit');
route::get('/layanan/edit/{layanan_hukum}',[LayananHukumController::class,'edit'])->name('layanan.edit');
route::get('/pengacara/edit/{pengacara}',[PengacaraController::class,'edit'])->name('pengacara.edit');
route::get('/pengumuman/edit/{pengumuman}',[PengumumanController::class,'edit'])->name('pengumuman.edit');
route::get('/profil/edit/{profil}',[ProfilController::class,'edit'])->name('profil.edit');
route::get('/publikasi/edit/{publikasi}',[PublikasiController::class,'edit'])->name('publikasi.edit');
route::get('/siaranpers/edit/{siaran_pers}',[SiaranpersController::class,'edit'])->name('siaranpers.edit');
route::get('/tentang/edit/{tentang}',[TentangController::class,'edit'])->name('tentang.edit');


route::get('/berita/destroy/{berita}',[BeritaController::class,'destroy'])->name('berita.destroy');
route::get('/donasi/destroy/{donasi}',[DonasiController::class,'destroy'])->name('donasi.destroy');
route::get('/kegiatan/destroy/{kegiatan}',[KegiatanController::class,'destroy'])->name('kegiatan.destroy');
route::get('/layanan/destroy/{layanan_hukum}',[LayananHukumController::class,'destroy'])->name('layanan.destroy');
route::get('/pengacara/destroy/{pengacara}',[PengacaraController::class,'destroy'])->name('pengacara.destroy');
route::get('/pengumuman/destroy/{pengumuman}',[PengumumanController::class,'destroy'])->name('pengumuman.destroy');
route::get('/profil/destroy/{profil}',[ProfilController::class,'destroy'])->name('profil.destroy');
route::get('/publikasi/destroy/{publikasi}',[PublikasiController::class,'destroy'])->name('publikasi.destroy');
route::get('/siaranpers/destroy/{siaran_pers}',[SiaranpersController::class,'destroy'])->name('siaranpers.destroy');
route::get('/tentang/destroy/{tentang}',[TentangController::class,'destroy'])->name('tentang.destroy');


route::post('/berita/update/{berita}',[BeritaController::class,'update'])->name('berita.update');
route::post('/donasi/update/{donasi}',[DonasiController::class,'update'])->name('donasi.update');
route::post('/kegiatan/update/{kegiatan}',[KegiatanController::class,'update'])->name('kegiatan.update');
route::post('/layanan/update/{layanan_hukum}',[LayananHukumController::class,'update'])->name('layanan.update');
route::post('/pengacara/update/{pengacara}',[PengacaraController::class,'update'])->name('pengacara.update');
route::post('/pengumuman/update/{pengumuman}',[PengumumanController::class,'update'])->name('pengumuman.update');
route::post('/profil/update/{profil}',[ProfilController::class,'update'])->name('profil.update');
route::post('/publikasi/update/{publikasi}',[PublikasiController::class,'update'])->name('publikasi.update');
route::post('/siaranpers/update/{siaran_pers}',[SiaranpersController::class,'update'])->name('siaranpers.update');
route::post('/tentang/update/{tentang}',[TentangController::class,'update'])->name('tentang.update');


route::post('/berita/tambah/post',[BeritaController::class,'store'])->name('berita.store');
route::post('/donasi/tambah/post',[DonasiController::class,'store'])->name('donasi.store');
route::post('/kegiatan/tambah/post',[KegiatanController::class,'store'])->name('kegiatan.store');
route::post('/layanan/tambah/post',[LayananHukumController::class,'store'])->name('layanan.store');
route::post('/pengacara/tambah/post',[PengacaraController::class,'store'])->name('pengacara.store');
route::post('/pengumuman/tambah/post',[PengumumanController::class,'store'])->name('pengumuman.store');
route::post('/profil/tambah/post',[ProfilController::class,'store'])->name('profil.store');
route::post('/publikasi/tambah/post',[PublikasiController::class,'store'])->name('publikasi.store');
route::post('/siaranpers/tambah/post',[SiaranpersController::class,'store'])->name('siaranpers.store');
route::post('/tentang/tambah/post',[TentangController::class,'store'])->name('tentang.store');
