<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Livewire\Product\ListProducts;
use App\Http\Livewire\Category\ListCategories;
use App\Http\Livewire\Brand\ListBrands;
use App\Http\Livewire\Pasarela\ViewPasarela;
use App\Http\Livewire\Redireccion;

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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/software', function () {
    return view('software');
})->name('software');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');


//Route::get('/', [CartController::class, 'shop'])->name('shop')->middleware('auth');
Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('/listproducts', ListProducts::class)->name('listproducts');

Route::get('/redireccion', Redireccion::class)->name('redireccion')->middleware('auth');


Route::get('/listcategories', ListCategories::class)->name('listcategories')->middleware('auth');

Route::get('ipg2bdv', function () {
    return view('ipg2bdv.index');
})->name('ipg2bdv');

Route::get('/checkout/{nombre}', function ($nombre) {
    return view('ipg2bdv.index',[ "nombre" => $nombre ]);
})->name('checkout');

Route::get('/pasarela', ViewPasarela::class)->name('pasarela')->middleware('auth');

Route::get('/resultado', ViewPasarela::class)->name('resultado')->middleware('auth');

