<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    // Exercício 7 - Desafio Prático: Disciplina Controller
    
    /**
     * Listar todas as disciplinas
     */
    public function index()
    {
        $disciplinas = [
            ['id' => 1, 'nome' => 'Programação Web', 'professor' => 'Prof. João'],
            ['id' => 2, 'nome' => 'Banco de Dados', 'professor' => 'Prof. Maria'],
            ['id' => 3, 'nome' => 'Engenharia de Software', 'professor' => 'Prof. Pedro'],
        ];
        
        return view('disciplinas.index', ['disciplinas' => $disciplinas]);
    }

    /**
     * Exibir formulário de cadastro
     */
    public function create()
    {
        return view('disciplinas.create');
    }

    /**
     * Salvar nova disciplina (simulado)
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $professor = $request->input('professor');
        
        return "Disciplina cadastrada: " . $nome . " (Professor: " . $professor . ")";
    }

    /**
     * Visualizar disciplina por ID
     */
    public function show($id)
    {
        $disciplina = [
            'id' => $id,
            'nome' => 'Disciplina ' . $id,
            'professor' => 'Professor responsável',
            'descricao' => 'Descrição da disciplina ' . $id
        ];
        
        return view('disciplinas.show', ['disciplina' => $disciplina]);
    }

    /**
     * Formulário de edição
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualizar disciplina
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Deletar disciplina
     */
    public function destroy($id)
    {
        //
    }
}
