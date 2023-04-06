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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/auth', "HomeController@index")->name('home');

Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class,'logout'])->middleware('auth')->name('logout');


Route::get('/', "PostController@reloc");
Route::group(['namespace'=>'Admin\Post'],function () {

    Route::get('/posts', "IndexController@index")->name('post.index');
    Route::get('/posts/create', "IndexController@create")->name('post.create');
    Route::post('/posts', "IndexController@store")->name('post.store');
    Route::get('/posts/{post}', "IndexController@show")->name('post.show');
    Route::get('/posts/{post}/edit', "IndexController@edit")->name('post.edit');
    Route::patch('/posts/{post}', "IndexController@update")->name('post.update');
    Route::delete('/posts/{post}', "IndexController@destroy")->name('post.delete');
});
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'admin'],function (){
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/admin/posts',"IndexController")->name('admin.post.index');
    });
});


Route::get('/main',"MainController@index")->name('main.index');
Route::get('/contacts',"ContactsController@index")->name('contact.index');
Route::get('/about',"AboutController@index")->name('about.index');
Route::get('/news',"NewsController@index")->name('news.index');
Route::get('/photogalery',"PhotogaleryController@index")->name('photogalery.index');






Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
