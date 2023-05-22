<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcioarios = Funcionario::with('funcao')->get();
        return view('funcionario.index', compact('funcionario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Funcionario::create($request->all());
        return redirect()->route('funcionario.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produto = Funcionario::find($id);
        return view('funcionario.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Funcionario::find($id)->update($request->all());
        return redirect()->route('funcionario.index')->with('message','Sucesso! Cadastro editado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionario.index')->with('message','Sucesso! Cadastro deletado.'); 
    }
}
