@extends('layouts.app')
@section('title','Админ панель')
@section('content')
    <div class="admin">
        <div class="container">
            <div class="admin__inner">
                <div class="admin__box">
                    <div class="admin__box-top">
                        <h2 class="admin__title">Категории</h2>
                        <a href="{{route('category.create')}}" class="admin__btn">Добавить категорию</a>
                    </div>
                    <div class="admin__category-body">
                        <div class="admin__category-list">
                            @if (!empty($category))
                                @foreach($category as $item)
                                <div class="admin__category-item">
                                    {{$item->name}}
                                    <div class="admin__category-item--btn">
                                        <a href="{{route('category.edit', $item->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                                                <path d="M11 4H7.2C6.0799 4 5.51984 4 5.09202 4.21799C4.71569 4.40974 4.40973 4.7157 4.21799 5.09202C4
                                                5.51985 4 6.0799 4 7.2V16.8C4 17.9201 4 18.4802 4.21799 18.908C4.40973 19.2843 4.71569 19.5903 5.09202
                                                19.782C5.51984 20 6.0799 20 7.2 20H16.8C17.9201 20 18.4802 20 18.908 19.782C19.2843 19.5903 19.5903
                                                19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V12.5M15.5 5.5L18.3284 8.32843M10.7627 10.2373L17.411
                                                3.58902C18.192 2.80797 19.4584 2.80797 20.2394 3.58902C21.0205 4.37007 21.0205 5.6364 20.2394
                                                6.41745L13.3774 13.2794C12.6158 14.0411 12.235 14.4219 11.8012 14.7247C11.4162 14.9936 11.0009
                                                15.2162 10.564 15.3882C10.0717 15.582 9.54378 15.6885 8.48793 15.9016L8 16L8.04745 15.6678C8.21536
                                                14.4925 8.29932 13.9048 8.49029 13.3561C8.65975 12.8692 8.89125 12.4063 9.17906 11.9786C9.50341
                                                11.4966 9.92319 11.0768 10.7627 10.2373Z" stroke="#333" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                        <form action="{{route('category.destroy', $item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background: transparent; cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                                                <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412
                                                16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202
                                                21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871
                                                19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784
                                                15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936
                                                3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729
                                                3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#333" stroke-width="2"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg></button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="admin__box">
                    <div class="admin__box-top">
                        <h2 class="admin__title">Товары</h2>
                        <a href="{{route('product.create')}}" class="admin__btn">Добавить товар</a>
                    </div>
                    <div class="catalog__inner-content">
                        <div class="catalog__inner-item--list">
                            @if(!empty($product))
                                @foreach($product as $item)
                                    <div class="catalog__inner-item">
                                        <div class="catalog__inner-item--image">
                                            <img src="{{$item->getImgeUrl()}}" alt="">
                                        </div>
                                        <div class="catalog-content--box">
                                            <p class="catalog__inner-item--name">{{$item->name}}</p>
                                            <p class="catalog__inner-item--price">{{$item->price}} ₽</p>
                                        </div>
                                        <hr>
                                        <div class="catalog-content--btn">
                                            <a href="{{route('product.edit', $item->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                                                    <path d="M11 4H7.2C6.0799 4 5.51984 4 5.09202 4.21799C4.71569 4.40974 4.40973 4.7157 4.21799 5.09202C4
                                            5.51985 4 6.0799 4 7.2V16.8C4 17.9201 4 18.4802 4.21799 18.908C4.40973 19.2843 4.71569 19.5903 5.09202
                                            19.782C5.51984 20 6.0799 20 7.2 20H16.8C17.9201 20 18.4802 20 18.908 19.782C19.2843 19.5903 19.5903
                                            19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V12.5M15.5 5.5L18.3284 8.32843M10.7627 10.2373L17.411
                                            3.58902C18.192 2.80797 19.4584 2.80797 20.2394 3.58902C21.0205 4.37007 21.0205 5.6364 20.2394
                                            6.41745L13.3774 13.2794C12.6158 14.0411 12.235 14.4219 11.8012 14.7247C11.4162 14.9936 11.0009
                                            15.2162 10.564 15.3882C10.0717 15.582 9.54378 15.6885 8.48793 15.9016L8 16L8.04745 15.6678C8.21536
                                            14.4925 8.29932 13.9048 8.49029 13.3561C8.65975 12.8692 8.89125 12.4063 9.17906 11.9786C9.50341
                                            11.4966 9.92319 11.0768 10.7627 10.2373Z" stroke="#333" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                            <form action="{{route('product.destroy', $item->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background: transparent; cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                                                    <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412
                                                        16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202
                                                        21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871
                                                        19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784
                                                        15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936
                                                        3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729
                                                        3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#333" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg></button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="admin__box">
                    <div class="admin__box-top">
                        <h2 class="admin__title">Заказы</h2>
                    </div>
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
                                        <div class="basket-list--item__image"></div>
                                        <p class="basket-list--item__name">Кольцо серцеедка</p>
                                        <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                                        <p class="basket-list--item__price">1.880 ₽</p>
                                    </li>
                                    <li class="order-basket-item">
                                        <div class="basket-list--item__image"></div>
                                        <p class="basket-list--item__name">Кольцо серцеедка</p>
                                        <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                                        <p class="basket-list--item__price">1.880 ₽</p>
                                    </li>
                                    <li class="order-basket-item">
                                        <div class="basket-list--item__image"></div>
                                        <p class="basket-list--item__name">Кольцо серцеедка</p>
                                        <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                                        <p class="basket-list--item__price">1.880 ₽</p>
                                    </li>
                                </ul>
                                <hr>
                                <div class="order-detail">
                                    <p class="order-status">Статус: <span>Выполнено</span></p>
                                    <p class="order-sum">Итого: <span>99.999 ₽</span></p>
                                </div>
                                <hr>
                                <form method="post" class="order-detail">
                                    <div class="order-status--change">
                                        <p class="order-status">Статус:</p>
                                        <select>
                                            <option name="" id="">Выполнено</option>
                                            <option name="" id="">На проверке</option>
                                            <option name="" id="">В пути</option>
                                            <option name="" id="">Отклонено</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="Обновить" class="order-status--change__btn">
                                </form>
                            </div>
                        </div>
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
                                        <div class="basket-list--item__image"></div>
                                        <p class="basket-list--item__name">Кольцо серцеедка</p>
                                        <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                                        <p class="basket-list--item__price">1.880 ₽</p>
                                    </li>
                                    <li class="order-basket-item">
                                        <div class="basket-list--item__image"></div>
                                        <p class="basket-list--item__name">Кольцо серцеедка</p>
                                        <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                                        <p class="basket-list--item__price">1.880 ₽</p>
                                    </li>
                                    <li class="order-basket-item">
                                        <div class="basket-list--item__image"></div>
                                        <p class="basket-list--item__name">Кольцо серцеедка</p>
                                        <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                                        <p class="basket-list--item__price">1.880 ₽</p>
                                    </li>
                                </ul>
                                <hr>
                                <div class="order-detail">
                                    <p class="order-status">Статус: <span>Выполнено</span></p>
                                    <p class="order-sum">Итого: <span>99.999 ₽</span></p>
                                </div>
                                <hr>
                                <form method="post" class="order-detail">
                                    <div class="order-status--change">
                                        <p class="order-status">Статус:</p>
                                        <select>
                                            <option name="" id="">Выполнено</option>
                                            <option name="" id="">На проверке</option>
                                            <option name="" id="">В пути</option>
                                            <option name="" id="">Отклонено</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="Обновить" class="order-status--change__btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
