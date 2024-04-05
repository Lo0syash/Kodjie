@extends('layouts.app')
@section('title', 'Профиль')
@section('content')
    <section class="profile">
        <div class="container">
            <div class="profile__inner">
                <div class="profile-date">
                    <h1 class="profile-title">Данные о пользователе</h1>
                    <div class="profile-content">
                        <p class="login">Логин: <span>test</span></p>
                        <p class="name">Имя: <span>test</span></p>
                        <p class="surname">Фамилия: <span>test</span></p>
                        <p class="patromic">Отчестов: <span>test</span></p>
                    </div>
                </div>
                <div class="profile-basket">
                    <h1 class="profile-title">Корзина</h1>
                    <ul class="basket-list">
                        <li class="basket-list--item">
                            <div class="basket-list--item__image"></div>
                            <p class="basket-list--item__name">Кольцо серцеедка</p>
                            <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                            <div class="basket-list--item__btn--container">
                                <div>
                                    <a href="#" class="basket-list--item__add">+</a>
                                    <a href="#" class="basket-list--item__remove">-</a>
                                </div>
                                <a href="#" class="basket-list--item__delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="basket-list--item">
                            <div class="basket-list--item__image"></div>
                            <p class="basket-list--item__name">Кольцо серцеедка</p>
                            <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                            <div class="basket-list--item__btn--container">
                                <div>
                                    <a href="#" class="basket-list--item__add">+</a>
                                    <a href="#" class="basket-list--item__remove">-</a>
                                </div>
                                <a href="#" class="basket-list--item__delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="basket-list--item">
                            <div class="basket-list--item__image"></div>
                            <p class="basket-list--item__name">Кольцо серцеедка</p>
                            <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                            <div class="basket-list--item__btn--container">
                                <div>
                                    <a href="#" class="basket-list--item__add">+</a>
                                    <a href="#" class="basket-list--item__remove">-</a>
                                </div>
                                <a href="#" class="basket-list--item__delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="basket-list--item">
                            <div class="basket-list--item__image"></div>
                            <p class="basket-list--item__name">Кольцо серцеедка</p>
                            <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                            <div class="basket-list--item__btn--container">
                                <div>
                                    <a href="#" class="basket-list--item__add">+</a>
                                    <a href="#" class="basket-list--item__remove">-</a>
                                </div>
                                <a href="#" class="basket-list--item__delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="basket-list--item">
                            <div class="basket-list--item__image"></div>
                            <p class="basket-list--item__name">Кольцо серцеедка</p>
                            <p class="basket-list--item__num">Кол-во: <b>2 шт.</b></p>
                            <div class="basket-list--item__btn--container">
                                <div>
                                    <a href="#" class="basket-list--item__add">+</a>
                                    <a href="#" class="basket-list--item__remove">-</a>
                                </div>
                                <a href="#" class="basket-list--item__delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection