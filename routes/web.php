<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
//        DB::listen(function ($query) {
//            logger($query->sql);
//        });

        return view('posts', [
            'posts' => Post::latest()->with(['category', 'author'])->get()
//            'posts' => Post::all()
        ]);
    })->name('posts');

    Route::get('posts/{post:slug}', function (Post $post) {
        return view('post', [
            'post' => $post
        ]);
    });

    Route::get('categories/{category:slug}', function (Category $category) {
        return view('posts', [
            'posts' => $category->posts->load(['category', 'author'])
        ]);
    });

    Route::get('authors/{author:username}', function (User $author) {
        return view('posts', [
            'posts' => $author->posts->load(['category', 'author'])
        ]);
    });

});

require __DIR__ . '/auth.php';
