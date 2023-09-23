<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationController;
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
  return  redirect('landing');
});
Route::get('/landing', [landingController::class, 'index'])->name('landing-page');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile-page');
Route::get('/information', [InformationController::class, 'index'])->name('information-page');
// web.php


