<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { padding: 8px; width: 100%; max-width: 300px; }
        button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h1>Cadastro de Curso</h1>
    
    <form action="/cursos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Curso:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
