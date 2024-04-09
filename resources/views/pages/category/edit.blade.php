@extends('layouts.app')
@section('title', 'Редактирование категории')
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
                    <input type="text" name="name" placeholder="Наименование категории" value="{{$category->name}}">
                    <input type="submit" value="Добавить">
                </form>
            </div>
        </div>
    </section>
@endsection
