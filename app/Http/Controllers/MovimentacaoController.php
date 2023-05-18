<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function index()
    {
        return view('movimentacao.index');
    }

    public function entrada()
    {
        return view('movimentacao.entrada');
    }

    public function salvarEntrada()
    {
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
