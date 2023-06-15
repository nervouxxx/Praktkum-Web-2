<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//salam
Route::get('/salam', function () {
    return "Halo Semua";
});

//routing kabar
Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

//buat routing pasien
Route::get('/pasien', function () {
    return view('pasien');
});

//buat routing form
Route::get('/form', function () {
    return view('form');
});

//routing form
Route::get('/form', [FormController::class, 'index']);

Route::post('/hasil', [FormController::class, 'hasil']);

//route controller
Route::get('/skill', [SkillController::class, 'index']);

//hasil skill form
Route::post('/skillhasil', [SkillController::class, 'skillhasil'])->name('skillhasil');