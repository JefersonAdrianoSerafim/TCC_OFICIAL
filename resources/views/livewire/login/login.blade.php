<div class="container" id="container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="sign-up">

        <form method="POST" action= "{{route('user.store')}}" >
            @csrf
            <h1>Criar conta</h1>
            <div class="icons">
                <a href="#"><i class="fa-brands fa-google"></i></a>
            </div>
            <span>ou use seu email para o cadastro</span>

            <input type="text" name="name" placeholder="nome"  value="{{ old('name') }}" class="form-control" >
            <input type="email" name="email" placeholder="email"  value="{{ old('email') }}" class="form-control" >
            <input type="password" name="password" placeholder="senha"  value="{{ old('password') }}" class="form-control" >
            @if($errors->any())
                <div class='invalid-feedback'>
                    <ul>
                            <li> {{ $errors->first() }}</li>
                    </ul>
                </div>
            @endif

            <button class="btn" id="submitRegister" type="submit">Cadastrar</button>
        </form>
    </div>

    <div class="sign-in">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <h1>Entrar</h1>
            <div class="icons">
                <a href="#"><i class="fa-brands fa-google"></i></a>
            </div>
            <span>ou use seu email para o entrar</span>
            <input type="email" name="emailLogin" id="" placeholder="email" value="{{old('emailLogin')}}" class="form-control" required>
            <input type="password" name="passwordLogin" id="" placeholder="senha" value="{{old('passwordLogin')}}" class="form-control" required>
            @if($errors->any())
                <div class='invalid-feedback'>
                    <ul>
                            <li> {{ $errors->first() }}</li>
                    </ul>
                </div>
            @endif
            <a href="#">Esqueceu a senha?</a>
            <input type="checkbox" name="remember" class="checkbox">Lembrar de mim</input>
            <button tyclass="btn" id="submitLogin">entrar</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Olá, usuario!</h1>
                <p>se você ja tiver uma conta</p>
                <button class="button" id="login">entrar</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Olá, usuario!</h1>
                <p>se você não tiver uma conta</p>
                <button class="button" id="register">cadastrar</button>
            </div>
        </div>
    </div>
</div>