<?php

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

   
Route::get('/', function () {
    $posts = Post::all();

    return Inertia::render('Welcome', [

       'posts' => $posts

    ]);

});

Route::resource('posts', PostController::class);


require __DIR__.'/auth.php';