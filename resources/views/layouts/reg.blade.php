
    
        
            <div class="card-2">
                <div class="card-header-wrapper">
                <a href="#" class="card-header" onclick="log()">Вход</a>
                <a class="card-header-reg">Регистрация</a>
                    </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        
                            <label for="name" class="name"></label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Ваше имя" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                                <label for="phone" class="phone"></label>

                            
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Ваш телефон" required autocomplete="phone">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ваша почта">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

                        
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ваш пароль">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

                        
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Подтвердить пароль">
                            
                        

                        
                                <div class="submin-button">
                                <button type="submit" class="submin-button-but">
                                    Регистрация
                                </button>
                                </div>
                        
                    </form>
                </div>
            </div>
        
    
