@extends('layouts.app')
@section('title', 'Авторизация')
@section('content')
    <section class="form-modal-block">
        <div class="container">
            <div class="form-modal-block__inner">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="form-modal-block--error">{{$error}}</p>
                    @endforeach
                @endif
                @error('invalid_credentials') <p class="form-modal-block--error">{{$message}}</p> @enderror
                <form action="{{route('auth.auth')}}" method="post">
                    @csrf
                    <input type="text" name="login" placeholder="Логин" value="{{@old('login')}}">
                    <input type="password" name="password" placeholder="Пароль">
                    <input type="submit" value="Войти">
                </form>
                <a href="{{route('registration.index')}}" class="form-modal-block__inner-link">Ещё зарегистрированы?</a>
            </div>
        </div>
    </section>
@endsection
