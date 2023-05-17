<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\PartnershipController;
use App\Http\Controllers\Admin\TermsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\OutletController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\StockTransactionController;

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
    return view('welcome');
});

/**
 * Backend routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', ], function () {

    //Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::get('contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');

    //banner
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::get('banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');

    //benefit
    Route::get('/benefit', [BenefitController::class, 'index'])->name('benefit');
    Route::get('benefit/create', [BenefitController::class, 'create'])->name('benefit.create');
    Route::post('benefit/store', [BenefitController::class, 'store'])->name('benefit.store');
    Route::get('benefit/edit/{id}', [BenefitController::class, 'edit'])->name('benefit.edit');
    Route::post('benefit/update/{id}', [BenefitController::class, 'update'])->name('benefit.update');
    Route::get('benefit/delete/{id}', [BenefitController::class, 'destroy'])->name('benefit.delete');

    //partnership
    Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
    Route::get('partnership/create', [PartnershipController::class, 'create'])->name('partnership.create');
    Route::post('partnership/store', [PartnershipController::class, 'store'])->name('partnership.store');
    Route::get('partnership/edit/{id}', [PartnershipController::class, 'edit'])->name('partnership.edit');
    Route::post('partnership/update/{id}', [PartnershipController::class, 'update'])->name('partnership.update');
    Route::get('partnership/delete/{id}', [PartnershipController::class, 'destroy'])->name('partnership.delete');

    //partnership terms
    Route::get('/terms', [TermsController::class, 'index'])->name('terms');
    Route::get('terms/create', [TermsController::class, 'create'])->name('terms.create');
    Route::post('terms/store', [TermsController::class, 'store'])->name('terms.store');
    Route::get('terms/edit/{id}', [TermsController::class, 'edit'])->name('terms.edit');
    Route::post('terms/update/{id}', [TermsController::class, 'update'])->name('terms.update');
    Route::get('terms/delete/{id}', [TermsController::class, 'destroy'])->name('terms.delete');

    //customer
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('customer/store', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::get('customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');

    //product
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

    //transaction
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
    Route::get('transaction/create', [TransactionController::class, 'create'])->name('transaction.create');
    Route::post('transaction/store', [TransactionController::class, 'store'])->name('transaction.store');
    Route::get('transaction/edit/{id}', [TransactionController::class, 'edit'])->name('transaction.edit');
    Route::post('transaction/update/{id}', [TransactionController::class, 'update'])->name('transaction.update');
    Route::get('transaction/delete/{id}', [TransactionController::class, 'destroy'])->name('transaction.delete');

    //package
    Route::get('/package', [PackageController::class, 'index'])->name('package');
    Route::get('package/create', [PackageController::class, 'create'])->name('package.create');
    Route::post('package/store', [PackageController::class, 'store'])->name('package.store');
    Route::get('package/edit/{id}', [PackageController::class, 'edit'])->name('package.edit');
    Route::post('package/update/{id}', [PackageController::class, 'update'])->name('package.update');
    Route::get('package/delete/{id}', [PackageController::class, 'destroy'])->name('package.delete');

    //product material
    Route::get('/material', [MaterialController::class, 'index'])->name('material');
    Route::get('material/create', [MaterialController::class, 'create'])->name('material.create');
    Route::post('material/store', [MaterialController::class, 'store'])->name('material.store');
    Route::get('material/edit/{id}', [MaterialController::class, 'edit'])->name('material.edit');
    Route::post('material/update/{id}', [MaterialController::class, 'update'])->name('material.update');
    Route::get('material/delete/{id}', [MaterialController::class, 'destroy'])->name('material.delete');

    //partner
    Route::get('/partner', [PartnerController::class, 'index'])->name('partner');
    Route::get('partner/create', [PartnerController::class, 'create'])->name('partner.create');
    Route::post('partner/store', [PartnerController::class, 'store'])->name('partner.store');
    Route::get('partner/edit/{id}', [PartnerController::class, 'edit'])->name('partner.edit');
    Route::post('partner/update/{id}', [PartnerController::class, 'update'])->name('partner.update');
    Route::get('partner/delete/{id}', [PartnerController::class, 'destroy'])->name('partner.delete');

    //outlet
    Route::get('/outlet', [OutletController::class, 'index'])->name('outlet');
    Route::get('outlet/create', [OutletController::class, 'create'])->name('outlet.create');
    Route::post('outlet/store', [OutletController::class, 'store'])->name('outlet.store');
    Route::get('outlet/edit/{id}', [OutletController::class, 'edit'])->name('outlet.edit');
    Route::post('outlet/update/{id}', [OutletController::class, 'update'])->name('outlet.update');
    Route::get('outlet/delete/{id}', [OutletController::class, 'destroy'])->name('outlet.delete');

    //stock transaction
    Route::get('/stock-transaction', [StockTransactionController::class, 'index'])->name('stock-transaction');
    Route::get('stock-transaction/create', [StockTransactionController::class, 'create'])->name('stock-transaction.create');
    Route::post('stock-transaction/store', [StockTransactionController::class, 'store'])->name('stock-transaction.store');
    Route::get('stock-transaction/edit/{id}', [StockTransactionController::class, 'edit'])->name('stock-transaction.edit');
    Route::post('stock-transaction/update/{id}', [StockTransactionController::class, 'update'])->name('stock-transaction.update');
    Route::get('stock-transaction/delete/{id}', [StockTransactionController::class, 'destroy'])->name('stock-transaction.delete');

});