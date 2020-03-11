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

use App\Mail\mailAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

Auth::routes();

Route::get('/welcome', function () {
    return view('welcome');
});
/**
 * Route de l'index + post envoyant les deux emails
 */
Route::get('/', 'IndexController@showView');
Route::post('/', 'IndexController@sendMail');

/**
 * Route vers la page de présentation de l'équipe
 */
Route::get('/qui-sommes-nous', 'PresentationController@showView');
Route::group(['middleware' => 'App\Http\Middleware\Admin'],function () {

});
/**
 * Route page contact
 */
Route::get('/contact', 'ContactUsController@showView');
Route::post('/contact', 'ContactUsController@sendForm');

/**
 * Route menant aux pronostiques
 */
Route::get('/pronostiques', 'PrognosticsController@showView');

/**
 * Route page validation
 */
Route::get('/success', 'ValidationController@showView');

Route::get('/admin', 'AdminController@showView');
Route::post('admin-add-pronos', 'AdminController@addPronos');
Route::post('admin-add-article', 'AdminController@addArticle');


Route::get('/home', 'HomeController@index')->name('home');

