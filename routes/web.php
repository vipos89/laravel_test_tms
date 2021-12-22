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

Route::get('admin', function (){
   return view('admin.index');
});




Route::prefix('admin')->name('admin.')->group(function (){
    Route::resources([
                         'brand' => \App\Http\Controllers\Admin\BrandController::class,
                         'category' => \App\Http\Controllers\Admin\CategoryController::class,
                         'product' => \App\Http\Controllers\Admin\ProductController::class
                     ]);
});





Route::get('catalog', [ProductController::class, 'catalog'])->name('catalog');
Route::get('products/{id}', [ProductController::class, 'index'])->name('show-product');


Route::get('hello', [SiteController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
