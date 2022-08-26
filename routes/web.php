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
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'PostContoller@index');
    Route::get('/posts/create', 'PostContoller@create');
    Route::post('/posts', 'PostContoller@store');
    Route::get('/posts/{post}', 'PostContoller@show');
    Route::get('/posts/{post}/edit', 'PostContoller@edit');
    Route::put('/posts/{post}', 'PostContoller@update');
    Route::get('/categories/{category}', 'CategoryController@index');
    Route::delete('/posts/{post}', 'PostContoller@delete');
    /*Route::get('/', function(){
        return view('posts/index');
    });*/

    
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
?>