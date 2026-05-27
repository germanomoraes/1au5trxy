<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Aluno</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { padding: 8px; width: 100%; max-width: 400px; }
        button { padding: 10px 20px; background-color: #2196F3; color: white; border: none; cursor: pointer; margin-top: 10px; }
        button:hover { background-color: #0b7dda; }
        a { color: #2196F3; text-decoration: none; }
    </style>
</head>
<body>
    <h1>Cadastro de Novo Aluno</h1>
    
    <form action="/alunos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">Cadastrar</button>
        <a href="/alunos" style="margin-left: 10px;">Voltar</a>
    </form>
</body>
</html>
