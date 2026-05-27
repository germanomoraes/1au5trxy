<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        table { border-collapse: collapse; width: 100%; max-width: 700px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #2196F3; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #ddd; }
        a { color: #2196F3; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Listagem de Alunos</h1>
    
    <a href="/alunos/create">+ Novo Aluno</a>
    
    <table style="margin-top: 20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno['id'] }}</td>
                    <td>{{ $aluno['nome'] }}</td>
                    <td>{{ $aluno['email'] }}</td>
                    <td><a href="/alunos/{{ $aluno['id'] }}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
