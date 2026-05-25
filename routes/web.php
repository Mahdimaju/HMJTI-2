<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AspirationController;
use App\Http\Controllers\DownloadController;

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

// Main Home Route - Landing Page
Route::get('/', [MainController::class, 'index'])->name('home');

// Aspiration submission (AJAX POST)
Route::post('/aspiration', [AspirationController::class, 'store'])->name('aspiration.store');

// Dynamic download links
Route::get('/download/{id}', [DownloadController::class, 'download'])->name('download.file');
Route::get('/academic/download/{id}', [DownloadController::class, 'downloadAcademic'])->name('academic.file');
