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
        // dd($movimentacoes);
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
        // dd($request->all());
        Movimentacao::create($request->all());
        return redirect()->route('movimentacao.index');
    }

    public function edit($id)
    {
        return view('movimentacao.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('movimentacao.index');
    }

    public function destroy($id)
    {
        return redirect()->route('movimentacao.index');
    }
}
