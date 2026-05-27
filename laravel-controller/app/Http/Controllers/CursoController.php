<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Exercício 1 - Método index simples
    public function index()
    {
        return "Lista de cursos";
    }

    // Exercício 2 - Retornar view create
    public function create()
    {
        return view('cursos.create');
    }

    // Exercício 3 - Listagem com dados
    public function listagem()
    {
        $cursos = [
            ['id' => 1, 'nome' => 'Laravel Básico'],
            ['id' => 2, 'nome' => 'PHP Avançado'],
            ['id' => 3, 'nome' => 'JavaScript Moderno'],
        ];

        return view('cursos.listagem', ['cursos' => $cursos]);
    }

    // Exercício 4 - Método show com parâmetro
    public function show($id)
    {
        return "Curso selecionado: ID " . $id;
    }

    // Exercício 5 - Método store para receber dados
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Curso cadastrado: " . $nome;
    }
}
