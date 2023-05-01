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

use App\Http\Controllers\Admin\Educators\EducatorsController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\Parents\ParentsController;
use App\Http\Controllers\Admin\Post\NewsController;
use App\Http\Controllers\Admin\Group\GroupController;

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/auth', "HomeController@index")->name('home');
Route::get('/', "PageController@reloc");


Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth')->name('logout');


    Route::middleware('access:admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [IndexController::class, 'index'])->name('admin');

            Route::prefix('news')->group(function () {
                Route::get('/', [IndexController::class, 'news'])->name('admin.news.index');

                Route::get('/create', [IndexController::class, 'newsCreate'])->name('admin.news.createPage');
                Route::post('/create', [NewsController::class, 'create'])->name('admin.post.news.create');

                Route::get('/edit/{news}', [IndexController::class, 'newsUpdate'])->name('admin.news.updatePage');
                Route::post('/edit/{news}', [NewsController::class, 'edit'])->name('admin.news.edit');

                Route::get('/delete/{news}', [NewsController::class, 'delete'])->name('admin.news.delete');
            });
            Route::prefix('parents')->group(function () {
                Route::get('/', [IndexController::class, 'parents'])->name('admin.parents.index');

                Route::get('/create', [IndexController::class, 'parentsCreate'])->name('admin.parents.createPage');
                Route::post('/create', [ParentsController::class, 'create'])->name('admin.post.parents.create');

                Route::get('/edit/{parents}', [IndexController::class, 'parentsUpdate'])->name('admin.parents.updatePage');
                Route::post('/edit/{parents}', [ParentsController::class, 'edit'])->name('admin.parents.edit');

                Route::get('/delete/{parents}', [ParentsController::class, 'delete'])->name('admin.parents.delete');
            });
            Route::prefix('groups')->group(function () {
                Route::get('/', [IndexController::class, 'groups'])->name('admin.groups.index');

                Route::get('/groups', [IndexController::class, 'groupsCreate'])->name('admin.groups.createPage');
                Route::post('/groups', [GroupController::class, 'create'])->name('admin.post.groups.create');

                Route::get('/edit/{groups}', [IndexController::class, 'groupsUpdate'])->name('admin.groups.updatePage');
                Route::post('/edit/{groups}', [GroupController::class, 'edit'])->name('admin.groups.edit');

                Route::get('/delete/{groups}', [GroupController::class, 'delete'])->name('admin.groups.delete');
            });
            Route::prefix('educators')->group(function () {
                Route::get('/groups/', [IndexController::class, 'educators'])->name('admin.educators.index');

                Route::get('/groups/educators', [IndexController::class, 'educatorsCreate'])->name('admin.educators.createPage');
                Route::post('/groups/educators', [EducatorsController::class, 'create'])->name('admin.post.educators.create');

                Route::get('/edit/{educators}', [IndexController::class, 'educatorsUpdate'])->name('admin.educators.updatePage');
                Route::post('/edit/{educators}', [EducatorsController::class, 'edit'])->name('admin.educators.edit');

                Route::get('/delete/{educators}', [EducatorsController::class, 'delete'])->name('admin.educators.delete');
            });
        });
    });
});

Route::get('/main', "MainController@index")->name('main.index');
Route::get('/group', "EducatorsController@index")->name('group.index');
Route::get('/parents', [PageController::class, 'parents'])->name('parents.index');
Route::get('/photogalery', "PhotogaleryController@index")->name('photogalery.index');
Route::get('/news', [PageController::class, 'news'])->name('news');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



