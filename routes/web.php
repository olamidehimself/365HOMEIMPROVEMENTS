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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/features', function () {
    return view('features');
});
//Route::get('/career', function () {
//    return view('career.career');
//});

//Route::get('/career/accountants', function () {
//    return view('career.acc');
//});

Route::get('/career', 'PagesController@career')->name('career.career');

Route::get('/career/seo', 'SeoController@showform');
Route::post('/career/seo', 'SeoController@sendmail')->name('career.seo');

Route::get('/career/analyst', 'AnalystController@showform');
Route::post('/career/analyst', 'AnalystController@sendmail')->name('career.analyst');

Route::get('/career/accountants', 'AccController@showform');
Route::post('/career/accountants', 'AccController@sendmail')->name('career.accountant');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myposts', 'HomeController@myposts');
//Auth::routes();


Route::get('/myposts', 'HomeController@myposts');

Route::resource('blog-posts', 'PostsController');

/*Routes for Paystack API*/
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
