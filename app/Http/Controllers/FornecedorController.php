<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    // Função apenas para listar os fornecedores já cadastrados
    public function index()
    {
        // Utiliza-se a Model junto com o metodo "get()" para trazer os dados do banco de dados
        $fornecedores = Fornecedor::get();

        // Para enviar os dados para o front-end é usada a função "compact()"
        return view('fornecedor.index', compact('fornecedores'));
    }

    // Função que vai retornar a view para cadastar fornecedor
    public function create()
    {
        return view('fornecedor.create');
    }

    // Função onde vai salvar no banco de dados o cadastro do fornecedor
    public function store(Request $request)
    {
        /*
            Passa a Model (Fornecedor) junto com o método para criar registro no banco "create()".
            Variável $request é usada para resgatar os dados enviados no formulário de cadastro.
        */
        Fornecedor::create($request->all());
        return redirect()->route('fornecedor.index');
    }

    // Função que retorna a view de editar
    public function edit($id)
    {
        // metodo "find()" vai buscar e trazer do banco o registro com o $id informado
        $fornecedor = Fornecedor::find($id);
        return view('fornecedor.edit', compact('fornecedor'));
    }

    // Função para atualizar um registro
    public function update(Request $request, $id)
    {
        /*
            Novamente se faz uma busca usando o "find()" para buscar o item que será atualizado,
            $request->all() para resgatar as alteraçoes no formulário de edição e
            depois o método "update()" para atualizar o registro no banco de dados.
        */ 
        Fornecedor::find($id)->update($request->all());
        return redirect()->route('fornecedor.index')->with('message','Sucesso! Cadastro editado.');
    }

    // Funçao para excluir um registro
    public function destroy($id)
    {
        // Passa a Model Fornecedor junto com o método "destroy()" que recebe o $id como parametro
        Fornecedor::destroy($id);
        return redirect()->route('fornecedor.index')->with('message','Sucesso! Cadastro deletado.'); 
    }
}
