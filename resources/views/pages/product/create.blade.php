@extends('layouts.app')
@section('title', 'Добавление товара')
@section('content')
    <section class="form-modal-block">
        <div class="container">
            <div class="form-modal-block__inner">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="form-modal-block--error">{{$error}}</p>
                    @endforeach
                @endif
                <form action="{{route('product.store')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Название товара" value="{{@old('name')}}">
                    <textarea name="description" placeholder="Описание для товара" class="input-textarea"></textarea>
                    <input type="text" name="price" placeholder="Цена товара" value="{{@old('price')}}">
                    <select name="category_id" class="category_input">
                        @foreach($category as $item)
                            <option id="{{$item->id}}" value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <input type="file" class="input w-full" name="path">
                    <input type="submit" value="Добавить">
                </form>
            </div>
        </div>
    </section>
@endsection
