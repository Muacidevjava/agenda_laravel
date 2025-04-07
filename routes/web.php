<?php

use App\Http\Controllers\Cliente;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::get('cliente/create',[Cliente::class,'create'])->name('cliente.create');
Route::post('/cliente', [App\Http\Controllers\Cliente::class, 'store'])->name('cliente.store');