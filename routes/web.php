<?php

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::resource('products', ProductController::class)->only([
    'index', 'show'
]);

Route::get('categories/{category_id}/posts', 'Admin\CategoryController@posts')->name('categories.posts');


// CONTACTS SECTION

Route::get('contacts', 'Admin\MessageController@contacts')->name('contacts');
Route::post('contacts', 'Admin\MessageController@store')->name('contacts.send');


Route::get('posts/{post}', function (Post $post) {
    return new PostResource(Post::find($post));
});

Route::get('guest/blog', function () {
    return view('guest.blog.blog');
})->name('guest.blog');


Auth::routes();


Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('products', ProductController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
});