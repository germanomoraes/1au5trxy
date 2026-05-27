<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

// ===== EXERCÍCIO 1 - Controller Simples =====
// Objetivo: Fixar a criação e uso básico de controllers.
Route::get('/cursos', [CursoController::class, 'index']);

// ===== EXERCÍCIO 2 - Controller Retornando View =====
// Objetivo: Integrar controller e view.
Route::get('/cursos/novo', [CursoController::class, 'create']);

// ===== EXERCÍCIO 3 - Envio de Dados para a View =====
// Objetivo: Trabalhar com passagem de dados.
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);

// ===== EXERCÍCIO 4 - Controller com Parâmetro =====
// Objetivo: Compreender parâmetros em rotas.
Route::get('/cursos/{id}', [CursoController::class, 'show']);

// ===== EXERCÍCIO 5 - Formulário e Request =====
// Objetivo: Receber dados via formulário.
Route::post('/cursos', [CursoController::class, 'store']);

// ===== EXERCÍCIO 6 - Resource Controller (CRUD) =====
// Objetivo: Aplicar Resource Controllers.
Route::resource('alunos', AlunoController::class);

// ===== EXERCÍCIO 7 - Desafio Prático =====
// Desafio: Criar DisciplinaController com rotas, views organizadas e parâmetros.
Route::resource('disciplinas', DisciplinaController::class);

// ===== ATIVIDADE - Fluxo create → store =====
// Objetivo: Compreender a relação entre rotas GET, POST e controller.
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);
