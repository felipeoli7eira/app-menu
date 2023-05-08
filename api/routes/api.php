<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('', fn () => ['version' => 'select version'])->name('version');

Route::prefix('v1')->group(function() {

    Route::get('', fn() => ['v1' => 'welcome to v1'])->name('index');

})->name('v1.');
