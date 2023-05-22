<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use App\Models\Operacao;
use App\Models\Produto;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function index()
    {
        $movimentacoes = Movimentacao::with('operacao','produtos')->get();
        return view('movimentacao.index');
    }

    public function create()
    {
        $operacoes = Operacao::get();
        $produtos = Produto::get();
        return view('movimentacao.create', compact('operacoes', 'produtos'));
    }

    public function salvarEntrada(Request $request)
    {
        $entrada = Movimentacao::create($request->all());
        return redirect()->route('movimentacao.index');
    }

    public function saida()
    {
        return view('movimentacao.saida');
    }

    public function salvarSaida()
    {
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
