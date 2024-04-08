@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
    <section class="form-modal-block">
        <div class="container">
            <div class="form-modal-block__inner">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="form-modal-block--error">{{$error}}</p>
                    @endforeach
                @endif
                {{-- @error('invalid_credentials')  @enderror --}}
                <form action="{{route('registration.reg')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Имя" value="{{@old('name')}}">
                    <input type="text" name="surname" placeholder="Фамилия" value="{{@old('surname')}}">
                    <input type="text" name="patronimic" placeholder="Отчество (при наличии)" value="{{@old('patronimic')}}">
                    <input type="text" name="login" placeholder="Логин" value="{{@old('login')}}">
                    <input type="password" name="password" placeholder="Пароль">
                    <input type="password" name="re_password" placeholder="Повторите пароль">
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
