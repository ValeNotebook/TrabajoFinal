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


Route::view("/","home")->name("home");
Route::view("/buscar_trabajo","buscar_trabajo")->name("buscar_trabajo");
Route::view("/crear_publicacion","crear_publicacion")->name("crear_publicacion");
Route::view("/mostrar_perfil","mostrar_perfil")->name("mostrar_perfil");
Route::view("/crear_perfil","crear_perfil")->name("crear_perfil");