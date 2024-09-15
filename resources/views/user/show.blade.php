<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuário - SAEV, Sistema de Agenda Escolar Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">{{ $user->name_user}}</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Senha</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>{{ $user->email_user}}</td>
                        <td>{{ $user->password_user}}</td>
                        <td> <a href="{{ route('user.index' )}}" class="btn btn-info btn-sm">Voltar</a></td>
                    </tr>
                </tbody>
            </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
