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

            <input type="text" name="name_user" placeholder="nome"  value="{{ old('name_user') }}"  class="form-control {{ $errors->has('name_user') ? 'is-invalid' : '' }} ">
            @if($errors->has('name_user'))
                <div class='invalid-feedback'>
                    {{ $errors->first('name_user') }}
                </div>
            @endif

            <input type="email" name="email_user" placeholder="email"  value="{{ old('email_user') }}">
            <input type="password" name="password_user" placeholder="senha"  value="{{ old('password_user') }}">
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
            <input type="email" name="email_user" id="" placeholder="email" value=""required>
            @if($errors->any())
                <div class='invalid-feedback'>
                    <ul>
                            <li> {{ $errors->first() }}</li>
                    </ul>
                </div>
            @endif
            <input type="password" name="password_user" id="" placeholder="senha" required>
            <a href="#">Esqueceu a senha?</a>
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