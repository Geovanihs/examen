<?php

use App\Http\Livewire\Empleados;
use App\Http\Livewire\Empleadoscreate;
use App\Http\Livewire\Empleadosdelete;
use App\Http\Livewire\Empleadosupdate;
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
Route::get('/empleados', Empleados::class)->name('empleados.index');
Route::get('/empleados/create', Empleadoscreate::class)->name('empleados.create');
Route::get('/empleados/{empleado}/delete', Empleadosdelete::class)->name('empleados.delete');
Route::get('/empleados/{empleado}/update',Empleadosupdate::class)->name('empleados.update');
