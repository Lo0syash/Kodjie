@extends('layouts.app')
@section('title', 'Кольцо')
@section('content')
    <section class="catalog-item">
        <div class="container">
            <div class="catalog-item__inner">
                <img class="catalog__inner-item--image" src="{{asset('public' . \Illuminate\Support\Facades\Storage::url($product->path))}}" alt="{{$product->name}}" style="border-radius: 15px;" >
                <div class="catalog-item__inner-content">
                    <h1 class="catalog-item__inner-title">{{$product->name}}</h1>
                    <p class="catalog-item__inner-price">{{$product->price}} ₽</p>
                    <p class="catalog-item__inner-description">{{$product->description}}</p>
                    @auth()
                        <form action="{{route('basket.create')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button class="catalog-item__inner-basket" style="cursor: pointer">Добавить в корзину</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </section>
@endsection
