<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('posts', [
        'posts' => Post::all()
    ]);
});

//Route::get('posts/{post}', function ($id) {
//    return view('post', [
////        'post' => Post::find($id)
//        'post' => Post::findOrFail($id)
//    ]);
//});

Route::get('posts/{post:slug}', function (Post $post) { // => Post::where('slug', $post)->firstOrFail();
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('create-data', function () {

// Add new properties to Category.php mass assignment:
// protected $fillable = ['name', 'slug'];

    Category::create([
        'name' => 'Work',
        'slug' => 'work'
    ]);

    Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
    ]);

    Category::create([
        'name' => 'Hobbies',
        'slug' => 'hobbies'
    ]);

// Add new properties to Post.php mass assignment:
// protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id'];

    Post::create([
        'title' => 'My Family Post',
        'excerpt' => 'Excerpt for my post',
        'slug' => "my-family-post",
        'category_id' => 1,
        'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
    ]);

    Post::create([
        'title' => 'My Work Post',
        'excerpt' => 'Excerpt for my post',
        'slug' => "my-work-post",
        'category_id' => 2,
        'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
    ]);

    Post::create([
        'title' => 'My Hobby Post',
        'excerpt' => 'Excerpt for my post',
        'slug' => "my-hobby-post",
        'category_id' => 3,
        'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
    ]);
});
