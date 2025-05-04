<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('main/index');
});

// routes/web.php
Route::get('/show-pdf/{filename}', function ($filename) {
    $path = storage_path("app/public/pdf/{$filename}");

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
})->name('show.pdf');
Route::post('/send-email', [ContactController::class, 'send'])->name('send.email');
