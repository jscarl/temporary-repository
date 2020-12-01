<?php

// use App\Event;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

Route::get('values', function () {
    $items = menu('guest', '_json');
    return view('pages.values', compact('items'));
});

Route::resource('/', HomeController::class)->only(['index']);
Route::resource('posts', PostController::class)
    ->only(['index', 'show'])
    ->parameters([
        'posts' => 'slug'
    ]);

Route::resource('category', CategoryController::class)
    ->parameters([
        'category' => 'category_name'
    ])
    ->only(['index', 'show']);

Route::resource('events', EventsController::class)
    ->parameters(['events' => 'slug'])
    ->only(['index', 'show']);

Route::resource('page', PageController::class)
    ->parameters(['page' => 'slug'])
    ->only(['index', 'show']);

Route::resource('gallery', GalleryController::class)
    ->parameters(['gallery' => 'slug'])
    ->only(['index', 'show']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
