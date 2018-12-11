<?php

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

<<<<<<< HEAD

Route::get('/', 'PageController@getIndex');

Route::get('about', 'PageController@getAbout');

Route::get('contact', 'PageController@getContact');
Route::post('contact', 'PageController@postContact');

Route::resource('products', 'ProductController');

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

//categorieen
Route::get('/fictie', function () {
    return view('categorieen.fictie');
});

Route::get('/hobby', function () {
    return view('categorieen.hobby');
});

Route::get('/informatief', function () {
    return view('categorieen.informatief');
});

Route::get('/ebooks', function () {
    return view('categorieen.ebooks');
});

Route::get('/kinderboeken', function () {
    return view('categorieen.kinderboeken');
});

Route::get('/actualiteit', function () {
    return view('categorieen.actualiteit');
});

Route::get('/engels', function () {
    return view('categorieen.engels');
});

Route::get('/sale', function () {
    return view('categorieen.sale');
});

Route::get('/top100', function () {
    return view('categorieen.top100');
});

//sub-categorieen
Route::get('/top100', function () {
    return view('categorieen.top100');
});

//winkelmandje controller
Route::get('/cart', function () {
    return  view('pages.Cart');
});

Route::get('/add-to-cart/{id}', [
'uses' => 'ProductController@getAddToCart',
'as' => 'product.addToCart']
);

Auth::routes();
=======
Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('contact', 'PageController@getContact');
Route::post('contact', 'PageController@postContact');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
>>>>>>> upstream/Alco
=======



>>>>>>> 00b1c63a9c7b88c95bb58600543fe508ecef6e85
