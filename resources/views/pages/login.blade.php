@extends('layouts.app')
@section('title', 'Авторизация')
@section('content')
    <section class="form-modal-block">
        <div class="container">
            <div class="form-modal-block__inner">
                <p class="form-modal-block--error">error</p>
                <form method="post">
                    <input type="text" placeholder="Логин">
                    <input type="password" placeholder="Пароль">
                    <input type="submit" value="Войти">
                </form>
                <a href="{{route('registration.index')}}" class="form-modal-block__inner-link">Ещё зарегистрированы?</a>
            </div>
        </div>
    </section>
@endsection