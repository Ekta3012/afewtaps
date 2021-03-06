<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('homepage');
});
Route::get('/smartphone', function () {
    return view('smartphone');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/management', function () {
    return view('management');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::post('/feedback/mail', ['as' => 'feedback.mail','uses' => 'HomeController@sendEmail']);
Route::post('/establishmentlogin', ['as' => 'establishmentLogin','uses' => 'HomeController@loginEmail']);
Route::post('/restaurantContact', ['as' => 'restaurantContact','uses' => 'HomeController@restaurantContact']);

Route::get('/faq', 'LA\FaqsController@view');
Route::get('/blog', 'LA\BlogsController@view');
Route::get('/privacy', 'LA\PrivaciesController@view');
Route::get('/terms', 'LA\TermsController@view');
Route::get('/loginestablishment', 'HomeController@view');
/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
