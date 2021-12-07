<?php

    use App\Http\Controllers\SiteController;
    use App\Models\Product;
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
    //$product = Product::find(1);
    // select * from products where status = true and price > 10 000
    //
    $list = Product::query()
            ->where('status', true)
            ->where('price', '>', 10000)
            ->get();
//    $product = Product::find(10000);
//    $product->name = 'asdasdsa';
//    $product->save();
//   // dd($list);



    return view('main');
});

Route::get('store', function () {
        return view('store');
});

Route::get('hello', [SiteController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
