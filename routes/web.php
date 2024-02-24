<?php

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
    return redirect(route('login'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/users', [App\Http\Controllers\User\UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/programs', [App\Http\Controllers\Program\ProgramController::class, 'index'])->name('admin.programs.index');
Route::get('/admin/programs/create', [App\Http\Controllers\Program\ProgramController::class, 'create'])->name('admin.programs.create');
Route::post('/admin/programs/create', [App\Http\Controllers\Program\ProgramController::class, 'store'])->name('admin.programs.store');
