<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Disciplina</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { padding: 8px; width: 100%; max-width: 400px; }
        button { padding: 10px 20px; background-color: #FF9800; color: white; border: none; cursor: pointer; margin-top: 10px; }
        button:hover { background-color: #e68900; }
        a { color: #FF9800; text-decoration: none; margin-left: 10px; }
    </style>
</head>
<body>
    <h1>Cadastro de Nova Disciplina</h1>
    
    <form action="/disciplinas" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da Disciplina:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="professor">Professor:</label>
            <input type="text" id="professor" name="professor" required>
        </div>
        <button type="submit">Cadastrar</button>
        <a href="/disciplinas">Voltar</a>
    </form>
</body>
</html>
