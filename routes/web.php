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
use Illuminate\Support\Facades\Mail;

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

/**
 * Route menant aux pronostiques
 */
Route::get('/pronostiques', 'PrognosticsController@showView');

/**
 * Route page contact
 */
Route::get('/contact', 'ContactUsController@showView');
Route::post('/contact', 'ContactUsController@sendForm');


/**
 * Route page validation
 */
Route::get('/success', 'ValidationController@showView');

/**
 * Route blog page
 */
Route::get('/blog', 'BlogController@showView');

/**
 * Route blog page
 */
Route::get('blog/article/{id}', 'ArticlePage@showArticle');