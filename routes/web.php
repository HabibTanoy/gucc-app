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


Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'HomeController@fronted')->name('home');
    // about route
    Route::get('/people/acc','OsaFrontendController@acc')->name('acc');
    Route::get('/people/rules','OsaFrontendController@rules')->name('rules');
    Route::get('/people/policy','OsaFrontendController@policy')->name('policy');
    // people route
    Route::get('/people/osa','OsaFrontendController@osa')->name('osa');
    Route::get('/people/founder', 'OsaFrontendController@founder')->name('founder');
    Route::get('/people/executive-committee', 'OsaFrontendController@executive_committee')->name('executive-committee');
    Route::get('/people/former-committee', 'OsaFrontendController@former_committee')->name('former-committee');
    Route::get('/people/advisors', 'OsaFrontendController@advisor')->name('advisor');
//    activity and news
    Route::get('/people/activity-news', 'OsaFrontendController@activity_news')->name('activities-news');
//    events
    Route::get('/people/events', 'OsaFrontendController@events')->name('events');
//    media
    Route::get('/people/gallery', 'OsaFrontendController@gallery')->name('gallery');
    Route::get('/people/media-coverage', 'OsaFrontendController@media_coverage')->name('media-coverage');
    Route::get('/people/contact', 'OsaFrontendController@contact')->name('contact');
    Route::get('/portfolio', 'HomeController@drop_portfolio')->name('portfolio');
    Route::post('/portfolio', 'HomeController@upload')->name('upload-cv');
    Route::get('/cv-list', 'HomeController@cv_list')->name('cv-list');
    Route::get('/tutorial', 'HomeController@tutorial')->name('tutorial-program');
    Route::get('/video/{id}', 'HomeController@video_play')->name('video');
});


Auth::routes();
// for backend dashboard
Route::namespace('App\Http\Controllers')->group(function () {
    Route::resource('slider', 'SliderController');
    Route::resource('service', 'ServiceController');
    Route::resource('facilities', 'facilitiesController');
    Route::resource('program', 'ProgramController');
    Route::resource('recent-news', 'RecentNewsController');
    Route::resource('teams', 'TeamsController');
    Route::resource('osa', 'OsaController');
    Route::resource('special-assistant', 'SpecialAssistantController');
    Route::resource('founder', 'FounderController');
    Route::resource('executive-committee', 'ExecutiveCommitteeController');
    Route::resource('ags', 'AgsController');
    Route::resource('former-committee', 'FormerCommitteeController');
    Route::resource('advisor', 'AdvisorController');
    Route::resource('activity-news', 'ActivityNewsController');
    Route::resource('events', 'EventsController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('media-coverage', 'MediaCoverageController');
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::get('/index', 'HomeController@fronted')->name('frontend');
});

