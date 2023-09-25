<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;

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
Route::get('register-user', [RegisteredUserController::class, 'create']);
Route::post('register-user', [RegisteredUserController::class, 'store'])->name('register-user-store');


Route::get('/', function () {
    return view('welcome');
});
