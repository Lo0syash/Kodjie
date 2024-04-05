@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
    <section class="form-modal-block">
        <div class="container">
            <div class="form-modal-block__inner">
                <p class="form-modal-block--error">error</p>
                <form method="post">
                    <input type="text" placeholder="Имя">
                    <input type="text" placeholder="Фамилия">
                    <input type="text" placeholder="Отчество (при наличии)">
                    <input type="text" placeholder="Логин">
                    <input type="password" placeholder="Пароль">
                    <input type="password" placeholder="Повторите пароль">
                    <div class="checkbox-rule--box">
                        <input type="checkbox" name="checkbox-rule" id="checkbox-rule">    
                        <label for="checkbox-rule">Согласие с правилами регистрации</label>
                    </div>
                    <input type="submit" value="Зарегистрироваться">
                </form>
                <a href="{{route('auth.index')}}" class="form-modal-block__inner-link">Уже зарегистрированы?</a>
            </div>
        </div>
    </section>
@endsection