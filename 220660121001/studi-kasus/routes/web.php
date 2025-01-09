<?php

// Mengimpor PostController untuk digunakan dalam routing
use App\Http\Controllers\PostController;

// Mendefinisikan resource route untuk controller PostController
Route::resource('posts', PostController::class);
Route::get('/dashboard', function () {
    return inertia('Dashboard');
})->name('dashboard');
Route::get('/profile/edit', function () {
    return inertia('Profile/Edit');
})->name('profile.edit');
Route::post('/logout', function (Request $request) {
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->middleware('auth')->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});