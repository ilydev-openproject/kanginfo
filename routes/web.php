<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

// symlink
Route::get('/foo', function () {
    Artisan::call('storage:link');
});
