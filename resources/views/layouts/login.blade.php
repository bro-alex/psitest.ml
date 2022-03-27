<div class="card">
    <div class="card-header-wrapper">
        <a href="#" class="card-header">Вход</a>
        <a href="#" class="card-header-reg">Регистрация</a>
    </div>
    

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            
                <label for="email" class="email"></label>

                
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ваша почта" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
            

            
                <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Ваш пароль" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
            

            
                
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Запомнить меня
                        </label>
                    </div>
                
            

            
                <div class="submin-button">
                    <button type="submit" class="submin-button-but">
                        ВОЙТИ
                    </button>
</div>
                    @if (Route::has('password.request'))
                        <a class="submin-button-link" href="{{ route('password.request') }}">
                            Забыли пароль?
                        </a>
                    @endif
                
            
        </form>
    </div>
</div>
