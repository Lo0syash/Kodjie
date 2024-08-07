@extends('layouts.app')
@section('title', 'Профиль')
@section('content')
    <section class="profile">
        <div class="container">
            <div class="profile__inner">
                <div class="profile-container">
                    <div class="profile-date">
                        <h2 class="profile-title">Данные о пользователе</h2>
                        <div class="profile-content">
                                <p class="login">Логин: <span>{{$user->login}}</span></p>
                                <p class="name">Имя: <span>{{$user->name}}</span></p>
                                <p class="surname">Фамилия: <span>{{$user->surname}}</span></p>
                                <p class="patromic">Отчестов: <span>{{(!empty($user->patronimic) ? $user->patronimic : 'Не указан')}}</span></p>
                        </div>
                    </div>
                    <div class="profile-basket">
                        <h2 class="profile-title">Корзина</h2>
                        <form method="post">
                            <ul class="basket-list">
                                @foreach($products as $item)
                                    <li class="basket-list--item">
                                        <img class="basket-list--item__image" src="{{asset('public' . \Illuminate\Support\Facades\Storage::url($item->path))}}" alt="">
                                        <p class="basket-list--item__name">{{$item->name}}</p>
                                        <p class="basket-list--item__num">Кол-во: <b>{{$item->quantity}} шт.</b></p>
                                        <div class="basket-list--item__btn--container">
                                            <div>
                                                <form action="{{route('basket.increase') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                    <button type="submit" class="basket-list--item__add" style="cursor: pointer">+</button>
                                                </form>

                                                <form action="{{route('basket.decrease')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                    <button type="submit" class="basket-list--item__remove" style="cursor: pointer">-</button>
                                                </form>
                                            </div>
                                            <form action="{{route('basket.destroy', $item->id)}}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <button type="submit" class="basket-list--item__delete" style="background: transparent; cursor: pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412
                                                16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202
                                                21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871
                                                19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784
                                                15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936
                                                3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729
                                                3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#333" stroke-width="2"
                                                              stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="basket-btn--box" style="width: 750px;">
                                <p class="basket-sum">Итого: <span>{{ number_format($totalPrice, 2, ',', '.') }} ₽</span></p>
                                <form method="POST" action="{{ route('profile.checkout') }}">
                                    @csrf
                                    <input type="submit" name="checkout" class="basket-status--buy" value="Оформить заказ" style="cursor: pointer">
                                </form>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="profile-orders">
                    <h2 class="profile-title x">История заказов</h2>
                    <div class="orders-box">
                        <div class="orders-list">
                            <div class="order-item">
                                <div class="order-top">
                                    <p class="order-num">Заказ: #12315</p>
                                    <p class="order-status">Выполнен</p>
                                    <div class="btn-open-order">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" fill="none">
                                            <path d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805
                                            16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174
                                            9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939
                                            14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                                            fill="#0F0F0F"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="order-body">
                                    <ul class="order-basket-list">
                                        <li class="order-basket-item">
                                            <img class="basket-list--item__image" src="./public/storage/products/91KLXj9OVflLojwmaazX3VFS3lxDtphguO7eNbmw.jpg" alt="">
                                            <p class="basket-list--item__name">Золотое кольцо с гранатом и бриллиантами</p>
                                            <p class="basket-list--item__num">Кол-во: <b>1 шт.</b></p>
                                            <p class="basket-list--item__price">10490 ₽</p>
                                        </li>
                                        <li class="order-basket-item">
                                            <img class="basket-list--item__image" src="./public/storage/products/sCCmVSsc3e5aLjIP4oiYEjBcdm2HnYI4j5fSACvf.jpg" alt="">
                                            <p class="basket-list--item__name">Серебряные серьги с фианитами</p>
                                            <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                                            <p class="basket-list--item__price">3490 ₽</p>
                                        </li>
                                        <li class="order-basket-item">
                                            <img class="basket-list--item__image" src="./public/storage/products/443vexOLKGgTISyREnQzXF962F0DGbKHEhhRnXfh.jpg" alt="">
                                            <p class="basket-list--item__name">Золотое кольцо с бриллиантами</p>
                                            <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                                            <p class="basket-list--item__price">29990 ₽</p>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="order-detail">
                                        <p class="order-status">Статус: <span>Выполнено</span></p>
                                        <p class="order-sum">Итого: <span>77490 ₽</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const orderItemTop = document.querySelectorAll('.order-top')
        const orderItemBody = document.querySelectorAll('.order-body')
        const btnOrder = document.querySelectorAll('.btn-open-order')
        orderItemTop.forEach((item, index)=>{
            item.addEventListener('click', ()=>{
                orderItemBody[index].classList.toggle('active')
                btnOrder[index].classList.toggle('active')
            })
        })
    </script>
@endsection
