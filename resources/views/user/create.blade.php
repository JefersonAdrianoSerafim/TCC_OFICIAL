<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ef84d19b33.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login - SAEV, Sistema de Agenda Escolar Virtual</title>
</head>

<body>
    <div class="container" id="container">
        <div class="sign-up">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <h1>Criar conta</h1>
                <!-- <div class="icons">
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                </div> -->
                <span>ou use seu email para o cadastro</span>
                <input type="text" name="name_user" id="" placeholder="nome" required>
                <input type="email" name="email_user" id="" placeholder="email" required>
                <input type="password" name="password_user" id="" placeholder="senha" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
        <div class="sign-in">
            <form action="">
                <h1>Entrar</h1>
                <div class="icons">
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                </div>
                <span>ou use seu email para o entrar</span>
                <input type="email" name="email" id="" placeholder="email" required>
                <input type="password" name="password" id="" placeholder="senha" required>
                <a href="#">Esqueceu a senha?</a>
                <button>entrar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Olá, usuario!</h1>
                    <p>se você ja tiver uma conta</p>
                    <button class="hidden" id="login">entrar</button>
                </div>
                <div class="toggle-panel toggle-left">
                    <h1>Olá, usuario!</h1>
                    <p>se você não tiver uma conta</p>
                    <button class="hidden" id="register">cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/login_script.js"></script>
</body>

</html>