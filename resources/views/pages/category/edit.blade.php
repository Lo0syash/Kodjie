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
                <form action="{{route('category.update', $category->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="name" placeholder="Наименование категории" value="{{$category->name}}">
                    <input type="submit" value="Обновить">
                </form>
            </div>
        </div>
    </section>
@endsection
