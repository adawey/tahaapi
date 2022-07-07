<?php

use App\Http\Controllers\EmailController;
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
    return view('welcome');
});

Route::get('/dashboard', [EmailController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/export', [EmailController::class, 'text'])->middleware(['auth'])->name('export');


require __DIR__ . '/auth.php';
