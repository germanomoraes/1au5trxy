<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Disciplina</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        .info { margin: 20px 0; padding: 15px; border: 1px solid #ddd; border-radius: 4px; max-width: 600px; }
        .info p { margin: 10px 0; line-height: 1.6; }
        .info strong { color: #FF9800; }
        a { color: #FF9800; text-decoration: none; margin-top: 10px; display: inline-block; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Detalhes da Disciplina</h1>
    
    <div class="info">
        <p><strong>ID:</strong> {{ $disciplina['id'] }}</p>
        <p><strong>Nome:</strong> {{ $disciplina['nome'] }}</p>
        <p><strong>Professor:</strong> {{ $disciplina['professor'] }}</p>
        <p><strong>Descrição:</strong> {{ $disciplina['descricao'] }}</p>
    </div>
    
    <a href="/disciplinas">← Voltar para a lista</a>
</body>
</html>
