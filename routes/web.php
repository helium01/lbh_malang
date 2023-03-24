<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LayananHukumController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SiaranPersController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PengajuanLayananController;
use App\Http\Controllers\client\beritacontrol;
use App\Http\Controllers\client\homecontrol;
use App\Http\Controllers\client\donasicontrol;
use App\Http\Controllers\client\kegiatancontrol;
use App\Http\Controllers\client\layanancontrol;
use App\Http\Controllers\client\pengacaracontrol;
use App\Http\Controllers\client\pengumumancontrol;
use App\Http\Controllers\client\profilcontrol;
use App\Http\Controllers\client\publikasicontrol;
use App\Http\Controllers\client\siaranperscontrol;
use App\Http\Controllers\client\tentangcontrol;
use App\Http\Controllers\emailcontrol;

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
    return view('client/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route untuk client
route::get('/client/berita',[beritacontrol::class,'index'])->name('client.berita');
route::get('/client/berita/{id}',[beritacontrol::class,'detail'])->name('client.berita.detail');
route::get('/client/donasi',[donasicontrol::class,'index'])->name('client.donasi');
route::post('/client/donasi/bayar',[donasicontrol::class,'bayar'])->name('donasi.bayar');
route::get('/',[homecontrol::class,'index'])->name('client.home');
route::get('/client/cari',[homecontrol::class,'cari'])->name('client.cari');
route::get('/client/kontak',[homecontrol::class,'kontak'])->name('client.kontak');
route::get('/client/kegiatan',[kegiatancontrol::class,'index'])->name('client.kegiatan');
route::get('/client/layanan',[layanancontrol::class,'index'])->name('client.layanan');
route::get('/client/pengacara',[pengacaracontrol::class,'index'])->name('client.pengacara');
route::get('/client/pengumuman',[pengumumancontrol::class,'index'])->name('client.pengumuman');
route::get('/client/pengumuman/{id}',[pengumumancontrol::class,'detail'])->name('client.pengumuman.detail');
route::get('/client/profil',[profilcontrol::class,'index'])->name('client.profil');
route::get('/client/publikasi',[publikasicontrol::class,'index'])->name('client.publikasi');
route::get('/client/siaranpers',[siaranperscontrol::class,'index'])->name('client.siaranpers');
route::get('/client/struktur',[tentangcontrol::class,'struktur'])->name('client.struktur');
route::get('/client/tentang',[tentangcontrol::class,'index'])->name('client.tentang');
route::get('/client/visi/misi',[tentangcontrol::class,'visimisi'])->name('client.visi.misi');
route::get('/client/form/layanan',[layanancontrol::class,'formlayanan'])->name('client.formlayanan');
route::get('/client/download/layanan',[layanancontrol::class,'download'])->name('client.download');

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
route::get('/dokumen',[DokumenController::class,'index'])->name('dokumen.index');
route::get('/pengajuanlayanan',[PengajuanLayananController::class,'index'])->name('pengajuanlayanan.index');


route::get('/berita/tambah',[BeritaController::class,'create'])->name('berita.create');
route::get('/donasi/tambah',[DonasiController::class,'create'])->name('donasi.create');
route::get('/kegiatan/tambah',[KegiatanController::class,'create'])->name('kegiatan.create');
route::get('/layanan/tambah',[LayananHukumController::class,'create'])->name('layanan.create');
route::get('/pengacara/tambah',[PengacaraController::class,'create'])->name('pengacara.create');
route::get('/pengumuman/tambah',[PengumumanController::class,'create'])->name('pengumuman.create');
route::get('/profil/tambah',[ProfilController::class,'create'])->name('profil.create');
route::get('/publikasi/tambah',[PublikasiController::class,'create'])->name('publikasi.create');
route::get('/siaranpers/tambah',[SiaranpersController::class,'create'])->name('siaranpers.create');
route::get('/dokumen/tambah',[DokumenController::class,'create'])->name('dokumen.create');
route::get('/tentang/tambah',[TentangController::class,'create'])->name('tentang.create');
route::get('/pengajuanlayanan/tambah',[layanancontrol::class,'create'])->name('pengajuanlayanan.create');


route::get('/berita/show/{berita}',[BeritaController::class,'show'])->name('berita.show');
route::get('/donasi/show/{donasi}',[DonasiController::class,'show'])->name('donasi.show');
route::get('/kegiatan/show/{kegiatan}',[KegiatanController::class,'show'])->name('kegiatan.show');
route::get('/layanan/show/{layanan}',[LayananHukumController::class,'show'])->name('layanan.show');
route::get('/pengacara/show/{pengacara}',[PengacaraController::class,'show'])->name('pengacara.show');
route::get('/pengumuman/show/{pengumuman}',[PengumumanController::class,'show'])->name('pengumuman.show');
route::get('/profil/show/{profil}',[ProfilController::class,'show'])->name('profil.show');
route::get('/publikasi/show/{publikasi}',[PublikasiController::class,'show'])->name('publikasi.show');
route::get('/siaranpers/show/{siaran_pers}',[SiaranpersController::class,'show'])->name('siaranpers.show');
route::get('/dokumen/show/{dokumen}',[DokumenController::class,'show'])->name('dokumen.show');
route::get('/tentang/show/{tentang}',[TentangController::class,'show'])->name('tentang.show');
route::get('/pengajuanlayanan/show/{pengajuanlayanan}',[PengajuanLayananController::class,'show'])->name('pengajuanlayanan.show');


route::get('/berita/edit/{berita}',[BeritaController::class,'edit'])->name('berita.edit');
route::get('/donasi/edit/{donasi}',[DonasiController::class,'edit'])->name('donasi.edit');
route::get('/kegiatan/edit/{kegiatan}',[KegiatanController::class,'edit'])->name('kegiatan.edit');
route::get('/layanan/edit/{layanan}',[LayananHukumController::class,'edit'])->name('layanan.edit');
route::get('/pengacara/edit/{pengacara}',[PengacaraController::class,'edit'])->name('pengacara.edit');
route::get('/pengumuman/edit/{pengumuman}',[PengumumanController::class,'edit'])->name('pengumuman.edit');
route::get('/profil/edit/{profil}',[ProfilController::class,'edit'])->name('profil.edit');
route::get('/publikasi/edit/{publikasi}',[PublikasiController::class,'edit'])->name('publikasi.edit');
route::get('/siaranpers/edit/{siaran_pers}',[SiaranpersController::class,'edit'])->name('siaranpers.edit');
route::get('/dokumen/edit/{dokumen}',[DokumenController::class,'edit'])->name('dokumen.edit');
route::get('/tentang/edit/{tentang}',[TentangController::class,'edit'])->name('tentang.edit');
route::get('/pengajuanlayanan/edit/{pengajuanlayanan}',[PengajuanLayananController::class,'edit'])->name('pengajuanlayanan.edit');
route::get('/publikasi/download/{publikasi}',[PublikasiController::class,'download'])->name('publikasi.download');
route::get('/client/publikasi/download/{publikasi}',[publikasicontrol::class,'download'])->name('publikasi.download.client');
route::post('/kirim/email',[emailcontrol::class,'kirim'])->name('kirim.email');


route::get('/berita/destroy/{berita}',[BeritaController::class,'destroy'])->name('berita.destroy');
route::get('/donasi/destroy/{donasi}',[DonasiController::class,'destroy'])->name('donasi.destroy');
route::get('/kegiatan/destroy/{kegiatan}',[KegiatanController::class,'destroy'])->name('kegiatan.destroy');
route::get('/layanan/destroy/{layanan}',[LayananHukumController::class,'destroy'])->name('layanan.destroy');
route::get('/pengacara/destroy/{pengacara}',[PengacaraController::class,'destroy'])->name('pengacara.destroy');
route::get('/pengumuman/destroy/{pengumuman}',[PengumumanController::class,'destroy'])->name('pengumuman.destroy');
route::get('/profil/destroy/{profil}',[ProfilController::class,'destroy'])->name('profil.destroy');
route::get('/publikasi/destroy/{publikasi}',[PublikasiController::class,'destroy'])->name('publikasi.destroy');
route::get('/siaranpers/destroy/{siaran_pers}',[SiaranpersController::class,'destroy'])->name('siaranpers.destroy');
route::get('/tentang/destroy/{tentang}',[TentangController::class,'destroy'])->name('tentang.destroy');
route::get('/dokumen/destroy/{dokumen}',[DokumenController::class,'destroy'])->name('dokumen.destroy');
route::get('/pengajuanlayanan/destroy/{pengajuanlayanan}',[PengajuanLayananController::class,'destroy'])->name('pengajuanlayanan.destroy');


route::post('/berita/update/{berita}',[BeritaController::class,'update'])->name('berita.update');
route::post('/donasi/update/{donasi}',[DonasiController::class,'update'])->name('donasi.update');
route::post('/kegiatan/update/{kegiatan}',[KegiatanController::class,'update'])->name('kegiatan.update');
route::post('/layanan/update/{layanan}',[LayananHukumController::class,'update'])->name('layanan.update');
route::post('/pengacara/update/{pengacara}',[PengacaraController::class,'update'])->name('pengacara.update');
route::post('/pengumuman/update/{pengumuman}',[PengumumanController::class,'update'])->name('pengumuman.update');
route::post('/profil/update/{profil}',[ProfilController::class,'update'])->name('profil.update');
route::post('/publikasi/update/{publikasi}',[PublikasiController::class,'update'])->name('publikasi.update');
route::post('/siaranpers/update/{siaran_pers}',[SiaranpersController::class,'update'])->name('siaranpers.update');
route::post('/tentang/update/{tentang}',[TentangController::class,'update'])->name('tentang.update');
route::post('/dokumen/update/{dokumen}',[DokumenController::class,'update'])->name('dokumen.update');
route::post('/pengajuanlayanan/update/{pengajuanlayanan}',[PengajuanLayananController::class,'update'])->name('pengajuanlayanan.update');


route::post('/berita/tambah/post',[BeritaController::class,'store'])->name('berita.store');
route::post('/donasi/tambah/post',[DonasiController::class,'store'])->name('donasi.store');
route::post('/kegiatan/tambah/post',[KegiatanController::class,'store'])->name('kegiatan.store');
route::post('/layanan/tambah/post',[layanancontrol::class,'storelayanan'])->name('layanan.store');
route::post('/pengacara/tambah/post',[PengacaraController::class,'store'])->name('pengacara.store');
route::post('/pengumuman/tambah/post',[PengumumanController::class,'store'])->name('pengumuman.store');
route::post('/profil/tambah/post',[ProfilController::class,'store'])->name('profil.store');
route::post('/publikasi/tambah/post',[PublikasiController::class,'store'])->name('publikasi.store');
route::post('/siaranpers/tambah/post',[SiaranpersController::class,'store'])->name('siaranpers.store');
route::post('/tentang/tambah/post',[TentangController::class,'store'])->name('tentang.store');
route::post('/dokumen/tambah/post',[DokumenController::class,'store'])->name('dokumen.store');
route::post('/pengajuanlayanan/tambah/post',[layanancontrol::class,'store'])->name('pengajuanlayanan.store');
   