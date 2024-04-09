@extends('layouts.app')
@section('title', 'Добавление категории')
@section('content')
    <section class="form-modal-block">
        <div class="container">
            <div class="form-modal-block__inner">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="form-modal-block--error">{{$error}}</p>
                    @endforeach
                @endif
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Наименование категории" value="{{@old('name')}}">
                    <input type="submit" value="Добавить">
                </form>
            </div>
        </div>
    </section>
@endsection
