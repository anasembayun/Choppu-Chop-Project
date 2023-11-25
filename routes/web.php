<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManageTourismController;
use App\Http\Controllers\Admin\ManageArtikelController;
use App\Http\Controllers\Admin\ManageUIController;
use App\Http\Controllers\UserUIController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

//UI User
Route::get('/', [UserUIController::class, 'home'])->name('home');
Route::get('/profil', [UserUIController::class, 'profile'])->name('profile');
Route::get('detail-wisata/{id}', [UserUIController::class, 'detailTourism'])->name('detail_tourism');
Route::get('{id}/artikel', [UserUIController::class, 'artikel'])->name('artikel');
Route::get('detail-artikel/{id}', [UserUIController::class, 'detailArtikel'])->name('detail_artikel');
Route::get('/umkm', [UserUIController::class, 'umkm'])->name('umkm');

/**
 * Backend routes
 */

//Contact
Route::get('/contact', [ManageUIController::class, 'listContact'])->name('list_contact');

//Manage UI
Route::get('profile/daftar', [ManageUIController::class, 'listProfile'])->name('list_profile');
Route::get('profile/tambah', [ManageUIController::class, 'viewAddProfile'])->name('add_profile');
Route::post('profile/i-tambah', [ManageUIController::class, 'addProfile'])->name('store_profile');
Route::get('slider/tambah', [ManageUIController::class, 'viewAddSlider'])->name('add_slider');
Route::post('slider/i-tambah', [ManageUIController::class, 'addSlider'])->name('store_slider');
Route::get('slider/i-tambah', [ManageUIController::class, 'listSlider'])->name('list_slider');

//Manage Tourism 
Route::get('kelola-wisata/daftar-wisata', [ManageTourismController::class, 'listTourism'])->name('list_tourism');
Route::get('kelola-wisata/tambah-wisata', [ManageTourismController::class, 'viewAddTourism'])->name('add_tourism');
Route::post('kelola-wisata/i-tambah-wisata', [ManageTourismController::class, 'addTourism'])->name('store_tourism');
Route::get('kelola-wisata/edit-wisata/{id}', [ManageTourismController::class, 'viewEditTourism'])->name('edit_tourism');
Route::post('kelola-wisata/i-edit-wisata/{id}', [ManageTourismController::class, 'updateTourism'])->name('update_tourism');
Route::get('kelola-wisata/hapus-wisata/{id}', [ManageTourismController::class, 'destroyTourism'])->name('delete_tourism');

Route::get('kelola-wisata/daftar-galeri', [ManageTourismController::class, 'listGallery'])->name('list_gallery');
Route::get('kelola-wisata/tambah-galeri', [ManageTourismController::class, 'viewAddGallery'])->name('add_gallery');
Route::post('kelola-wisata/i-tambah-galeri', [ManageTourismController::class, 'addGallery'])->name('store_gallery');
Route::get('kelola-wisata/edit-galeri/{id}', [ManageTourismController::class, 'viewEditGallery'])->name('edit_gallery');
Route::post('kelola-wisata/i-edit-galeri/{id}', [ManageTourismController::class, 'updateGallery'])->name('update_gallery');
Route::get('kelola-wisata/hapus-galeri/{id}', [ManageTourismController::class, 'destroyGallery'])->name('delete_gallery');

// Manage Artikel
Route::get('artikel/daftar-artikel', [ManageArtikelController::class, 'listArtikel'])->name('list_artikel');
Route::get('artikel/tambah-artikel', [ManageArtikelController::class, 'viewAddArtikel'])->name('add_artikel');
Route::post('artikel/i-tambah-artikel', [ManageArtikelController::class, 'addArtikel'])->name('store_artikel');
Route::get('artikel/edit-artikel/{id}', [ManageArtikelController::class, 'viewEditArtikel'])->name('edit_artikel');
Route::post('artikel/i-edit-artikel/{id}', [ManageArtikelController::class, 'updateArtikel'])->name('update_artikel');
Route::get('artikel/hapus-artikel/{id}', [ManageArtikelController::class, 'destroyArtikel'])->name('delete_artikel'); 

Route::get('artikel/daftar-kategori', [ManageArtikelController::class, 'listCategory'])->name('list_category');
Route::get('artikel/tambah-kategori', [ManageArtikelController::class, 'viewAddCategory'])->name('add_category');
Route::post('artikel/i-tambah-kategori', [ManageArtikelController::class, 'addCategory'])->name('store_category');
Route::get('artikel/edit-kategori/{id}', [ManageArtikelController::class, 'viewEditCategory'])->name('edit_category');
Route::post('artikel/i-edit-kategori/{id}', [ManageArtikelController::class, 'updateCategory'])->name('update_category');
Route::get('artikel/hapus-kategori/{id}', [ManageArtikelController::class, 'destroyCategory'])->name('delete_category'); 

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
