@extends('layouts.verify')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ 'Подтвердите свою почту' }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ 'Мы отправили вам повторно письмо.' }}
                        </div>
                    @endif

                    {{ 'Мы отправили Вам письмо с ссылкой для подтверждения электронной почты. Проверьте папку Спам. ' }}
                    {{ 'Если вы не получили письмо, то' }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ 'нажмите здесь, чтобы отправить письмо повторно' }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
