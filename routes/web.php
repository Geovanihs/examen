<?php

use App\Http\Livewire\Empleados;
use App\Http\Livewire\Empleadoscreate;
use App\Http\Livewire\Empleadosdelete;
use App\Http\Livewire\Empleadosshow;
use App\Http\Livewire\Empleadosupdate;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosShow;
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


Route::get('/login', Login::class)->name('login');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/empleados', Empleados::class)->name('empleados.index');
    Route::get('/empleados/create', Empleadoscreate::class)->name('empleados.create');
    Route::get('/empleados/{empleado}/delete', Empleadosdelete::class)->name('empleados.delete');
    Route::get('/empleados/{empleado}/show', Empleadosshow::class)->name('empleados.show');
    Route::get('/empleados/{empleado}/update',Empleadosupdate::class)->name('empleados.update');

    Route::get('/usuarios', UsuariosIndex::class)->name('usuarios.index');
    Route::get('/usuarios/create', UsuariosCreate::class)->name('usuarios.create');
    Route::get('/usaurios/{usuario}/edit', UsuariosEdit::class)->name('usuarios.edit');
    Route::get('/usaurios/{usuario}/show', UsuariosShow::class)->name('usuarios.show');
    Route::get('/usaurios/{usuario}/delete', UsuariosDelete::class)->name('usuarios.delete');

});
