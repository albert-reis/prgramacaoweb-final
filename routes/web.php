<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\CadastrarObraController;
use App\Http\Controllers\Dashboard\CadastrarUsuarioController;
use App\Http\Controllers\Dashboard\ListarUsuarioController;
use App\Http\Controllers\Dashboard\ListarObraController;
use App\Http\Controllers\Dashboard\UsuarioController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/cadastrarobra/{_id?}', [CadastrarObraController::class, 'index'])->name('obra.form');
Route::get('/cadastrarusuario/{_id?}', [UsuarioController::class, 'form'])->name('user.form');
Route::get('/listarusuario', [UsuarioController::class, 'list']);
Route::get('/listarobra', [ListarObraController::class, 'index']);


Route::get('/post/save', [CadastrarObraController::class, 'save'])->name('post.save');
Route::get('/post/update/{_id}', [ListarObraController::class, 'update'])->name('obra.update');
Route::get('/post/delete/{_id}', [ListarObraController::class, 'delete'])->name('obra.delete');

Route::get('/user/save', [UsuarioController::class, 'save'])->name('user.save');
Route::get('/user/update/{_id}', [UsuarioController::class, 'update'])->name('user.update');
Route::get('/user/delete/{_id}', [UsuarioController::class, 'delete'])->name('user.delete');
//Route::get('/post/save', 'Dashboard\CadastrarObraController@save')->name('post.save');
//Route::resource('usuarios', ListarUsuarioController::class);




