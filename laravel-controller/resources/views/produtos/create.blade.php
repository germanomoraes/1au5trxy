<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { padding: 8px; width: 100%; max-width: 400px; }
        button { padding: 10px 20px; background-color: #9C27B0; color: white; border: none; cursor: pointer; margin-top: 10px; }
        button:hover { background-color: #7b1fa2; }
    </style>
</head>
<body>
    <h1>Cadastro de Novo Produto</h1>
    
    <form action="/produtos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
