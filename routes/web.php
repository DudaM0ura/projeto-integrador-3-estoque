<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovimentacaoController;
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
    return view('dashboard');
});

// Rotas de Login
Route::controller(LoginController::class)->group(function (){
    Route::get('/login', 'index')->name('login');
    Route::get('/autenticacao', 'create')->name('login.autenticacao');
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

// Rotas do crud de Produtos
Route::controller(ProdutoController::class)->group(function (){
    Route::get('/produtos', 'index')->name('produtos.index');
    Route::get('/produtos/cadastrar', 'create')->name('produtos.create');
    Route::post('/produtos/cadastrar', 'store')->name('produtos.store');
    Route::get('/produtos/editar/{id}', 'edit')->name('produtos.edit');
    Route::put('/produtos/editar/{id}', 'update')->name('produtos.update');
    Route::delete('/produtos/editar/{id}', 'destroy')->name('produtos.destroy');
});

// Rotas do crud de Funcionarios
Route::controller(FuncionarioController::class)->group(function (){
    Route::get('/funcionarios', 'index')->name('funcionario.index');
    Route::get('/funcionario/cadastrar', 'create')->name('funcionario.create');
    Route::post('/funcionario/cadastrar', 'store')->name('funcionario.store');
    Route::get('/funcionario/editar/{id}', 'edit')->name('funcionario.edit');
    Route::put('/funcionario/editar/{id}', 'update')->name('funcionario.update');
    Route::delete('/funcionario/editar/{id}', 'destroy')->name('funcionario.destroy');
});

// Rotas crud de Movimentações
Route::controller(MovimentacaoController::class)->group(function (){
    Route::get('/movimentacoes', 'index')->name('movimentacao.index');
    Route::get('/movimentacao/cadastrar', 'create')->name('movimentacao.create');
    Route::post('/movimentacao/entrada', 'store')->name('movimentacao.store');
    Route::get('/movimentacao/editar/{id}', 'edit')->name('movimentacao.edit');
    Route::put('/movimentacao/editar/{id}', 'update')->name('movimentacao.update');
    Route::delete('/movimentacao/editar/{id}', 'destroy')->name('movimentacao.destroy');
});



