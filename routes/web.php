<?php

use App\Http\Controllers\postController;
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
    return view('welcome');
});

Route::controller(postController::class)->group(function(){

    Route::get('post','index')->name('posts');
    Route::get('post/create', 'create');
    Route::post('post/insert', 'insert')->name('post.insert');
    Route::get('post/edit/{id}','edit')->name('post.edit');
    Route::PUT('post/update/{id}','update')->name('post.update');
    Route::get('post/delete/{id}','delete')->name('post.delete');
    Route::get('posts/delete/all','deleteAll')->name('post.delete.all');
    Route::get('posts/delete/all/truncate','deleteAllTruncate')->name('post.delete.all.truncate');

});

// Route::resource('post', postController::class)->only([
//     'index' ,'create','insert','edit','update'
// ]);
