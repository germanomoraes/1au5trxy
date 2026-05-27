# Exercícios Práticos - Controllers no Laravel

Este projeto contém a implementação completa de todos os exercícios práticos sobre Controllers no Laravel.

## Estrutura do Projeto

```
laravel-controller/
├── app/Http/Controllers/          # Controllers
│   ├── CursoController.php
│   ├── AlunoController.php
│   ├── DisciplinaController.php
│   └── ProdutoController.php
├── resources/views/               # Views Blade
│   ├── cursos/
│   │   ├── create.blade.php
│   │   └── listagem.blade.php
│   ├── alunos/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   └── show.blade.php
│   ├── disciplinas/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   └── show.blade.php
│   └── produtos/
│       └── create.blade.php
└── routes/
    └── web.php                    # Todas as rotas configuradas
```

## Exercícios Implementados

### Exercício 1 - Controller Simples
- **Rota:** `/cursos`
- **Controller:** `CursoController::index()`
- **Resultado:** Retorna "Lista de cursos"

### Exercício 2 - Controller Retornando View
- **Rota:** `/cursos/novo`
- **Controller:** `CursoController::create()`
- **Resultado:** Exibe formulário de cadastro de curso

### Exercício 3 - Envio de Dados para a View
- **Rota:** `/cursos/listagem`
- **Controller:** `CursoController::listagem()`
- **Resultado:** Exibe 3 cursos em tabela usando `@foreach`

### Exercício 4 - Controller com Parâmetro
- **Rota:** `/cursos/{id}`
- **Controller:** `CursoController::show($id)`
- **Resultado:** Retorna "Curso selecionado: ID X"

### Exercício 5 - Formulário e Request
- **Rota GET:** `/cursos/novo`
- **Rota POST:** `/cursos`
- **Controller:** `CursoController::store(Request $request)`
- **Resultado:** Exibe "Curso cadastrado: [nome]"

### Exercício 6 - Resource Controller (CRUD)
- **Rotas:** Geradas automaticamente por `Route::resource('alunos', AlunoController::class)`
  - `GET /alunos` → index (listar)
  - `GET /alunos/create` → create (formulário)
  - `POST /alunos` → store (salvar)
  - `GET /alunos/{id}` → show (exibir)
- **Métodos:** index(), create(), store(), show()

### Exercício 7 - Desafio Prático
- **Controller:** `DisciplinaController`
- **Rotas:** Similar ao Exercício 6 (resource)
- **Features:** 
  - Listar disciplinas
  - Cadastrar disciplinas
  - Visualizar disciplina por ID
  - Views organizadas em pasta `disciplinas/`

### Atividade - Fluxo create → store
- **Rotas:** 
  - `GET /produtos/create` (exibir formulário)
  - `POST /produtos` (receber dados)
- **Controller:** `ProdutoController`
- **Métodos:** create(), store()
- **Resultado:** Exibe "Produto cadastrado: [nome]"

## Como Usar

1. **Verificar as rotas** em `routes/web.php`
2. **Analisar os controllers** em `app/Http/Controllers/`
3. **Estudar as views** em `resources/views/`

## Pontos Principais

### Controllers
- Criação básica de controllers
- Métodos que retornam strings
- Métodos que retornam views
- Passagem de dados para views
- Resource controllers (CRUD)
- Recebimento de parâmetros de rota
- Recebimento de dados via Request

### Rotas
- Rotas simples GET
- Rotas com parâmetros `{id}`
- Rotas POST para formulários
- Rotas resource (geradas automaticamente)
- Nomenclatura de controllers

### Views Blade
- Sintaxe básica do Blade
- Loop `@foreach`
- Exibição de variáveis `{{ $variavel }}`
- Token CSRF `@csrf`
- Formulários POST

## Conceitos Aprendidos

1. **MVC Pattern** - Model-View-Controller
2. **Route Binding** - Parâmetros em rotas
3. **Request Handling** - Recebimento de dados
4. **View Rendering** - Renderização de views
5. **Resource Controllers** - CRUD em poucas linhas
6. **Blade Templating** - Motor de templates do Laravel
7. **Form Submission** - GET e POST
8. **Data Passing** - Envio de dados para views
