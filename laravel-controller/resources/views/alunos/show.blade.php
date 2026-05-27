<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Aluno</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        .info { margin: 20px 0; padding: 15px; border: 1px solid #ddd; border-radius: 4px; max-width: 500px; }
        .info p { margin: 10px 0; }
        .info strong { color: #2196F3; }
        a { color: #2196F3; text-decoration: none; margin-top: 10px; display: inline-block; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Detalhes do Aluno</h1>
    
    <div class="info">
        <p><strong>ID:</strong> {{ $aluno['id'] }}</p>
        <p><strong>Nome:</strong> {{ $aluno['nome'] }}</p>
        <p><strong>Email:</strong> {{ $aluno['email'] }}</p>
    </div>
    
    <a href="/alunos">← Voltar para a lista</a>
</body>
</html>
