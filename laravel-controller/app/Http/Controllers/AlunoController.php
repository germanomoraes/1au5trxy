<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // Exercício 6 - Resource Controller (CRUD)
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = [
            ['id' => 1, 'nome' => 'João Silva', 'email' => 'joao@example.com'],
            ['id' => 2, 'nome' => 'Maria Santos', 'email' => 'maria@example.com'],
            ['id' => 3, 'nome' => 'Pedro Costa', 'email' => 'pedro@example.com'],
        ];
        
        return view('alunos.index', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        
        return "Aluno cadastrado: " . $nome . " (" . $email . ")";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = [
            'id' => $id,
            'nome' => 'Aluno ' . $id,
            'email' => 'aluno' . $id . '@example.com'
        ];
        
        return view('alunos.show', ['aluno' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
