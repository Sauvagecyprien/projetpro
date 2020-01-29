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

Route::get('/', 'VisiteurController@index');
Route::get('/no_access', 'PageController@notfound');
Auth::routes();

// route pour lespace admin

Route::get('/dashboard', 'TemplatedashController@dashboard');
Route::get('/tables/{id}', 'TemplatedashController@destroy');
Route::get('/table' ,  ['uses'=> 'TemplatedashController@table',]);

Route::get('/com/{id}', 'TemplatedashController@delete');
Route::get('/com' ,  ['uses'=> 'TemplatedashController@user']);
Route::post('/assign/{id}' , 'TemplatedashController@assignRoles');
Route::get('/modif/{id}', 'TemplatedashController@modif');
Route::post('/up', 'TemplatedashController@up');


Route::get('/valider/{id}', 'TemplatedashController@valider');
Route::get('/attente/{id}', 'TemplatedashController@attente');



// route pour le nouveau template

Route::get('/index', 'VisiteurController@index');
Route::get('/generic', 'VisiteurController@generic');
Route::get('/elements', 'VisiteurController@elements');
Route::get('/petitcommerce', 'VisiteurController@petitcommerce');
Route::get('/comment', 'VisiteurController@comment');

Route::post('/insert', 'VisiteurController@create');






// les galerie
Route::get('/galerie', 'VisiteurController@galerie');
Route::get('/paysage', 'VisiteurController@paysage');




Route::post('/comments/{topic}', 'CommentController@store')->name('comments.store');



