@extends('layouts.app')
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
                    <a href="#" class="catalog__more">Показать все</a>
                </div>
                <div class="catalog__inner-content">
                    <div class="catalog__inner-item--list">
                        <a href="#" class="catalog__inner-item">
                            <div class="catalog__inner-item--image"></div>
                            <p class="catalog__inner-item--name">Серьги Лира</p>
                            <p class="catalog__inner-item--price">1.880 ₽</p>
                        </a>
                        <a href="#" class="catalog__inner-item">
                            <div class="catalog__inner-item--image"></div>
                            <p class="catalog__inner-item--name">Серьги Лира</p>
                            <p class="catalog__inner-item--price">1.880 ₽</p>
                        </a>
                        <a href="#" class="catalog__inner-item">
                            <div class="catalog__inner-item--image"></div>
                            <p class="catalog__inner-item--name">Серьги Лира</p>
                            <p class="catalog__inner-item--price">1.880 ₽</p>
                        </a>
                        <a href="#" class="catalog__inner-item">
                            <div class="catalog__inner-item--image"></div>
                            <p class="catalog__inner-item--name">Серьги Лира</p>
                            <p class="catalog__inner-item--price">1.880 ₽</p>
                        </a>
                        <a href="#" class="catalog__inner-item">
                            <div class="catalog__inner-item--image"></div>
                            <p class="catalog__inner-item--name">Серьги Лира</p>
                            <p class="catalog__inner-item--price">1.880 ₽</p>
                        </a>
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
