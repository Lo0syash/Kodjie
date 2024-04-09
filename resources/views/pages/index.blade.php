@extends('layouts.app')
@section('title','Главная')
@section('content')
    <section class="banner">
        <div class="container-content">
            <div class="banner__inner">
                <div class="banner-slider">
                    <div class="banner-slides">
                        <div class="banner-slide active">
                            <div class="banner-slide--content">
                                <h1>Полудрагоценные камни</h1>
                                <p>Настроение - Весна! Коллекция украшений с полудрагоценными камнями определенно повышает настроение своей обладательнице и дарит самые позитивные эмоции.</p>
                                <a href="#">Смотреть ></a>
                            </div>
                        </div>
                        <div class="banner-slide">
                            <div class="banner-slide--content">
                                <h1>Помолвочные кольца</h1>
                                <p>Она точно скажет "да!", от помолвочных колец KODJIE невозможно отказаться.</p>
                                <a href="#">Смотреть ></a>
                            </div>
                        </div>
                        <div class="banner-slide">
                            <div class="banner-slide--content">
                                <h1>Драгоценные камни</h1>
                                <p>По настоящему уникальные и благородные драгоценные камни в одной коллекции. Роскошь и элегантность в каждой детали.</p>
                                <a href="#">Смотреть ></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-btn">
                        <div class="btn-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                                <path d="M7.85715 13.6158C7.9234 13.6815 7.96066 13.771 7.96066 13.8643C7.96066 13.9576 7.9234 14.0471 7.85715 14.1128L7.11526 14.8546C7.05176 14.9223 6.9631
                                14.9607 6.8703 14.9607C6.7775 14.9607 6.68884 14.9223 6.62534 14.8546L0.193313 8.42262C0.0948434 8.32427 0.0394598 8.19085 0.0393373 8.05168L0.0393373
                                7.86971C0.0394598 7.73054 0.0948435 7.59711 0.193313 7.49876L6.62534 1.06674C6.68884 0.999074 6.7775 0.960693 6.8703 0.960693C6.9631 0.960693 7.05176
                                0.999075 7.11526 1.06674L7.85715 1.80863C7.9234 1.87433 7.96066 1.96378 7.96066 2.05709C7.96066 2.1504 7.9234 2.23984 7.85715 2.30555L2.20201 7.96069L7.85715
                                13.6158Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="btn-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                                <path d="M0.142851 2.30555C0.0766015 2.23984 0.0393372 2.1504 0.0393372 2.05709C0.0393372 1.96378 0.0766015 1.87434 0.142851 1.80863L0.884738 1.06674C0.948242
                                0.999077 1.0369 0.960693 1.1297 0.960693C1.2225 0.960693 1.31116 0.999077 1.37466 1.06674L7.80669 7.49876C7.90516 7.59711 7.96054 7.73054 7.96066
                                7.86971V8.05168C7.96054 8.19085 7.90516 8.32428 7.80669 8.42262L1.37466 14.8546C1.31116 14.9223 1.2225 14.9607 1.1297 14.9607C1.0369 14.9607 0.948242
                                14.9223 0.884738 14.8546L0.142851 14.1128C0.0766015 14.0471 0.0393372 13.9576 0.0393372 13.8643C0.0393372 13.771 0.0766015 13.6815 0.142851 13.6158L5.79799
                                7.96069L0.142851 2.30555Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                    <div class="banner-pagination">
                        <div class="ellipse active"></div>
                        <div class="ellipse"></div>
                        <div class="ellipse"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="container-content">
            <div class="catalog__inner">
                <div class="catalog__inner-top">
                    <h2 class="catalog__title">Каталог</h2>
                    <a href="{{route('category.index')}}" class="catalog__more">Показать все</a>
                </div>
                <div class="catalog__inner-content">
                    <div class="catalog__inner-item--list">
                        <a href="#" class="catalog__inner-item">
                            <div class="catalog__inner-item--image"></div>
                            <p class="catalog__inner-item--name">Серьги Лира</p>
                            <p class="catalog__inner-item--price">1.880 ₽</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
