<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Movimentacao;
use App\Models\Operacao;
use App\Models\Produto;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function index()
    {
        $movimentacoes = Movimentacao::with('operacao','produtos', 'produtos.fornecedor')->get();
        // dd($movimentacoess)->toArray();
        return view('movimentacao.index', compact('movimentacoes'));
    }

    public function create()
    {
        $operacoes = Operacao::get();
        $produtos = Produto::get();
        $fornecedores = Fornecedor::get();
        return view('movimentacao.create', compact('operacoes', 'produtos', 'fornecedores'));
    }

    public function store(Request $request)
    {
        Movimentacao::create($request->all());
        return redirect()->route('movimentacao.index')->with('sucesso', 'Cadastro realizado com sucesso!');
    }

    public function edit($id)
    {
        $operacoes = Operacao::get();
        $produtos = Produto::get();
        $fornecedores = Fornecedor::get();
        $movimentacao = Movimentacao::with('produtos', 'produtos.fornecedor', 'operacao')->find($id);
        return view('movimentacao.edit', compact('movimentacao', 'operacoes', 'produtos', 'fornecedores'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        Movimentacao::find($id)->update($request->all());
        return redirect()->route('movimentacao.index')->with('sucesso', 'Cadastro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Movimentacao::destroy($id);
        return redirect()->route('movimentacao.index')->with('sucesso','Sucesso! Movimentação deletada.'); 
    }
}
