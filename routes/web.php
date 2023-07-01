<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadVideoController;
use App\Http\Controllers\VideoPageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify'=>true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/watch', [App\Http\Controllers\HomeController::class, 'watch']);

Route::get('/upload-video', [UploadVideoController::class, 'create']);
Route::post('/upload-video', [UploadVideoController::class, 'store']);
Route::get('/upload-video/detail', [UploadVideoController::class, 'index']);
// Route::post('/upload-video', [UploadVideoController::class, 'store']);
Route::post('/upload-video/upload', [UploadVideoController::class, 'upload']);

Route::get('/symlink', function(){
    Artisan::call('storage:link');
});

// Route::post('/upload-video', [App\Http\Controllers\UploadVideoController::class, 'index'])->name('upload-video');