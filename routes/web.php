<?php

use App\Http\Controllers\PostController;
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

    Route::get('/', [PostController::class, 'index'])->name('posts');

    Route::get('posts/{post:slug}', [PostController::class, 'show']);

//    Route::get('authors/{author:username}', function (User $author) {
//        return view('posts.index', [
//            'posts' => $author->posts->load(['category', 'author']),
//        ]);
//    });

//    Route::get('categories/{category:slug}', function (Category $category) {
//        return view('posts.index', [
//            'posts' => $category->posts->load(['category', 'author']),
//            'currentCategory' => $category,
//        ]);
//    })->name('category');

});

require __DIR__ . '/auth.php';
