<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Atividade - Fluxo create → store
    
    /**
     * Exibir formulário de criação
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Armazenar o produto no banco (simulado)
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        
        return "Produto cadastrado: " . $nome;
    }
}
