@extends('layouts.app')
@section('title', 'Редактирование товара')
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
                    <input type="text" name="name" placeholder="Название товара" value="{{$product->name}}">
                    <textarea name="description" placeholder="Описание для товара" class="input-textarea">{{$product->description}}</textarea>
                    <input type="text" name="price" placeholder="Цена товара" value="{{$product->price}}">
                    <select name="category_id" class="category_input">
                        @foreach($category as $item)
                            <option
                                @selected($product->id == $item->id)
                                id="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <input type="file" class="input w-full" name="path" value="{{$product->path}}">
                    <input type="submit" value="Обновить">
                </form>
            </div>
        </div>
    </section>
@endsection
