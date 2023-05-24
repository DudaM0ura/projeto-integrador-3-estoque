<?php

namespace App\Http\Controllers;

use App\Models\Funcao;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionario::with('funcao')->get();
        return view('funcionario.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $funcoes = Funcao::all();
        return view('funcionario.create', compact('funcoes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $form = [
            "nome" => $request->nome,
            "data_nascimento" => $request->data_nascimento,
            "cpf" => $request->cpf,
            "id_funcao" => $request->id_funcao,
        ];

        Funcionario::create($form);

        return redirect()->route('funcionario.index')->with('sucesso','Sucesso! Cadastro realizado.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $funcionario = Funcionario::with('funcao')->find($id);
        $funcoes = Funcao::all();
        return view('funcionario.edit', compact('funcionario', 'funcoes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        Funcionario::find($id)->update($request->all());
        return redirect()->route('funcionario.index')->with('sucesso','Sucesso! Cadastro editado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionario.index')->with('sucesso','Sucesso! Cadastro deletado.'); 
    }
}
