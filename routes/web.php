<?php

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
    return view('frontend.home_new');
});
Route::get('/about/acc', function () {
    return view('frontend.about_acc');
});
Route::get('/about/rules', function () {
    return view('frontend.rules_and_regulation');
});
Route::get('/about/policy', function () {
    return view('frontend.policy');
});
// people route
Route::get('/people/osa', function () {
    return view('frontend.osa');
});
Route::get('/people/founder', function () {
    return view('frontend.founders');
});
Route::get('/people/executive-committee', function () {
    return view('frontend.executive_committee');
});
Route::get('/people/former-committee', function () {
    return view('frontend.former_committees');
});
Route::get('/people/advisors', function () {
    return view('frontend.advisors');
});
Route::get('/activity-news', function () {
    return view('frontend.activity_and_news');
});
Route::get('/events', function () {
    return view('frontend.events');
});
Route::get('/media/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/media/media-coverage', function () {
    return view('frontend.media_coverage');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Auth::routes();

Route::namespace('App\Http\Controllers')->group(function () {
    Route::resource('slider', 'SliderController');
    Route::resource('service', 'ServiceController');
    Route::resource('facilities', 'facilitiesController');
    Route::resource('program', 'ProgramController');
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/index', 'HomeController@fronted')->name('frontend');
    Route::get('/cv-list', 'HomeController@cv_list')->name('cv-list');
    Route::get('/video/{id}', 'HomeController@video_play')->name('video');
    Route::get('/portfolio', 'HomeController@drop_portfolio')->name('portfolio');
    Route::post('/portfolio', 'HomeController@upload')->name('upload-cv');
    Route::get('/tutorial', 'HomeController@tutorial')->name('tutorial-program');
});

