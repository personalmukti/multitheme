<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('menu');
});

Route::get('/theme-one', [ThemeController::class, 'themeOne'])->name('theme.one');
Route::get('/theme-two', [ThemeController::class, 'themeTwo'])->name('theme.two');
Route::get('/theme-three', [ThemeController::class, 'themeThree'])->name('theme.three');

