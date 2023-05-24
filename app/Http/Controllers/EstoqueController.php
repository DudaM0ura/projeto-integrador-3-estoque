<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use App\Models\Movimentacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtosEmEstoque = DB::select(
                                        "SELECT produtos.id, produtos.nome, fornecedores.nome_fornecedor, SUM(CASE WHEN movimentacoes.id_operacao = 1 THEN movimentacoes.quantidade ELSE -movimentacoes.quantidade END) AS quantidade_estoque
                                        FROM produtos
                                        JOIN movimentacoes ON produtos.id = movimentacoes.id_produto
                                        JOIN fornecedores ON fornecedores.id = produtos.id_fornecedor
                                        GROUP BY produtos.id, produtos.nome
                                    "); 
// dd($produtosEmEstoque);
        return view('estoque.index', compact('produtosEmEstoque'));
    }

   
}
