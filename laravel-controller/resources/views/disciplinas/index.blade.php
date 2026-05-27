<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Disciplinas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        table { border-collapse: collapse; width: 100%; max-width: 800px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #FF9800; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #ddd; }
        a { color: #FF9800; text-decoration: none; margin-right: 10px; }
        a:hover { text-decoration: underline; }
        .btn-novo { display: inline-block; padding: 10px 20px; background-color: #FF9800; color: white; text-decoration: none; border-radius: 4px; margin-bottom: 20px; }
        .btn-novo:hover { background-color: #e68900; }
    </style>
</head>
<body>
    <h1>Listagem de Disciplinas</h1>
    
    <a href="/disciplinas/create" class="btn-novo">+ Nova Disciplina</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Professor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($disciplinas as $disciplina)
                <tr>
                    <td>{{ $disciplina['id'] }}</td>
                    <td>{{ $disciplina['nome'] }}</td>
                    <td>{{ $disciplina['professor'] }}</td>
                    <td><a href="/disciplinas/{{ $disciplina['id'] }}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
