<?php

use App\Http\Controllers\{DashboardController, KendaraanController, UserController};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
// hanya admin yang dapat akses route ini
Route::resource('/jadwal', KendaraanController::class);
// Route::get('/user/hapus/{id}', [UserController::class, "delete"]);

Route::resource('/user', UserController::class);
Route::get('/user/hapus/{id}', [UserController::class, "delete"]);