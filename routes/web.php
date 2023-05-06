<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Rotas do crud de Fornecedores
Route::controller(FornecedorController::class)->group(function (){
    Route::get('/fornecedor', 'index')->name('fornecedor.index');
    Route::get('/fornecedor/cadastrar', 'create')->name('fornecedor.create');
    Route::post('/fornecedor/cadastrar', 'store')->name('fornecedor.store');
    Route::get('/fornecedor/editar/{id}', 'edit')->name('fornecedor.edit');
    Route::put('/fornecedor/editar/{id}', 'update')->name('fornecedor.update');
    Route::delete('/fornecedor/editar/{id}', 'destroy')->name('fornecedor.destroy');
});

// Rotas do crud de produtos
Route::controller(ProdutoController::class)->group(function (){

});