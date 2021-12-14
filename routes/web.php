<?php

    use App\Http\Controllers\FormController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\SiteController;
    use Illuminate\Support\Facades\Route;

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
    return view('main');
});

Route::get('show-form', [FormController::class, 'showForm'])->name('showForm');
Route::post('show-form', [FormController::class, 'postForm'])->name('namePostForm');

Route::get('catalog', [ProductController::class, 'catalog'])->name('catalog');
Route::get('products/{id}', [ProductController::class, 'index'])->name('show-product');


Route::get('hello', [SiteController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
