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

use App\Http\Controllers\Admin\Post\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/auth', "HomeController@index")->name('home');
Route::get('/', "PostController@reloc");


Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth')->name('logout');


    Route::middleware('access:admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [IndexController::class, 'index'])->name('admin');

            Route::prefix('posts')->group(function () {
                Route::get('/', [IndexController::class, 'posts'])->name('admin.posts.index');


            });
        });
    });
});

            Route::get('/main', "MainController@index")->name('main.index');
            Route::get('/contacts', "ContactsController@index")->name('contact.index');
            Route::get('/about', "AboutController@index")->name('about.index');
            Route::get('/news', "NewsController@index")->name('news.index');
            Route::get('/photogalery', "PhotogaleryController@index")->name('photogalery.index');


            Auth::routes();
            Route::get('/home', 'HomeController@index')->name('home');



