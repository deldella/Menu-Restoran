<?php

use App\Http\Controllers\MenuResController;
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

// Route::get('/', function () {
//     return view('menures');
// });
Route::resource('/menures', MenuResController::class);
Route::get('/', [MenuResController::class, 'index'])-> name('menures');

Route::get('/tambah', [MenuResController::class, 'tambah'])-> name('tambah');
Route::post('/insertdata', [MenuResController::class, 'insertdata'])-> name('insertdata');
Route::get('/delete/{id}', [MenuResController::class, 'delete'])-> name('delete');
Route::post('/update/{id}', [MenuResController::class, 'update'])-> name('update');
Route::get('/tampilkandata/{id}', [MenuResController::class, 'tampilkandata'])-> name('tampilkandata');

