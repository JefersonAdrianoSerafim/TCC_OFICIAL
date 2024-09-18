<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form  method="POST" action="{{ route('team_user.store', $id) }}">
        @csrf
        <button class="deleteButton" type="submit">Entrar</button>
    </form>
</body>
</html>