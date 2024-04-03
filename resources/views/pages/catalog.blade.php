@extends('layouts.app')
@section('title','Каталог')
@section('content')
    <section class="catalog">
        <div class="container">
            <div class="catalog__inner">
                <h1 class="catalog-title">Каталог товаров</h1>
                <div class="catalog-container">
                    <div class="catalog-sidebar">
                        <div class="catalog-sidebar__search">
                            <input type="text" class="catalog-sidebar__input" placeholder="Поиск по товарам">
                            <button class="catalog-sidebar__button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6431 13.9576L19.8645 18.1823C20.053 18.3919 20.0437 18.7128 19.8434 18.9111L19.1047 19.6504C19.0056 19.7504 18.8707 19.8066 18.73 19.8066C18.5893 19.8066 18.4544 19.7504 18.3553 19.6504L14.1339 15.4257C14.0172 15.3087 13.9112 15.1815 13.8173 15.0454L13.0258 13.9893C11.7162 15.0359 10.0898 15.6057 8.41388 15.6052C4.96034 15.6172 1.95934 13.233 1.18757 9.86415C0.415791 6.49527 2.07921 3.04081 5.19304 1.54592C8.30686 0.0510231 12.0401 0.914654 14.1825 3.62551C16.3249 6.33638 16.3047 10.171 14.1339 12.8591L15.1893 13.5879C15.3541 13.6935 15.5063 13.8175 15.6431 13.9576ZM3.13727 8.21165C3.13727 11.1282 5.49976 13.4926 8.41405 13.4926C9.81354 13.4926 11.1557 12.9362 12.1453 11.9459C13.1349 10.9555 13.6908 9.61225 13.6908 8.21165C13.6908 5.29506 11.3283 2.93069 8.41405 2.93069C5.49976 2.93069 3.13727 5.29506 3.13727 8.21165Z" fill="black"/>
                                    <path d="M19.8645 18.1823L20.1433 17.9315L20.1367 17.9242L20.1298 17.9173L19.8645 18.1823ZM15.6431 13.9576L15.3747 14.2195L15.3778 14.2226L15.6431 13.9576ZM19.8434 18.9111L19.5796 18.6446L19.5781 18.646L19.8434 18.9111ZM19.1047 19.6504L18.8394 19.3854L18.8383 19.3865L19.1047 19.6504ZM18.3553 19.6504L18.6217 19.3865L18.6206 19.3854L18.3553 19.6504ZM14.1339 15.4257L13.8685 15.6906L13.8686 15.6907L14.1339 15.4257ZM13.8173 15.0454L14.1259 14.8324L14.1218 14.8264L14.1174 14.8206L13.8173 15.0454ZM13.0258 13.9893L13.3259 13.7644L13.0939 13.4548L12.7917 13.6963L13.0258 13.9893ZM8.41388 15.6052L8.41399 15.2302L8.41258 15.2302L8.41388 15.6052ZM1.18757 9.86415L1.5531 9.78041L1.18757 9.86415ZM5.19304 1.54592L5.03074 1.20786L5.19304 1.54592ZM14.1825 3.62551L13.8882 3.85803L14.1825 3.62551ZM14.1339 12.8591L13.8422 12.6235L13.5882 12.938L13.9208 13.1677L14.1339 12.8591ZM15.1893 13.5879L14.9761 13.8967L14.987 13.9037L15.1893 13.5879ZM20.1298 17.9173L15.9083 13.6925L15.3778 14.2226L19.5992 18.4474L20.1298 17.9173ZM20.1072 19.1776C20.4498 18.8385 20.4657 18.2899 20.1433 17.9315L19.5857 18.4331C19.6404 18.4939 19.6377 18.5871 19.5796 18.6446L20.1072 19.1776ZM19.3699 19.9155L20.1087 19.1762L19.5781 18.646L18.8394 19.3854L19.3699 19.9155ZM18.73 20.1816C18.9708 20.1816 19.2015 20.0854 19.371 19.9144L18.8383 19.3865C18.8096 19.4154 18.7706 19.4316 18.73 19.4316V20.1816ZM18.089 19.9144C18.2585 20.0854 18.4892 20.1816 18.73 20.1816V19.4316C18.6894 19.4316 18.6504 19.4154 18.6217 19.3865L18.089 19.9144ZM13.8686 15.6907L18.0901 19.9155L18.6206 19.3854L14.3992 15.1606L13.8686 15.6907ZM13.5087 15.2585C13.6154 15.4131 13.7358 15.5577 13.8685 15.6906L14.3993 15.1607C14.2985 15.0598 14.207 14.9499 14.1259 14.8324L13.5087 15.2585ZM12.7257 14.2141L13.5172 15.2703L14.1174 14.8206L13.3259 13.7644L12.7257 14.2141ZM8.41377 15.9802C10.1749 15.9807 11.8838 15.3819 13.2599 14.2822L12.7917 13.6963C11.5485 14.6898 10.0048 15.2307 8.41399 15.2302L8.41377 15.9802ZM0.822036 9.94788C1.63292 13.4875 4.78612 15.9928 8.41518 15.9802L8.41258 15.2302C5.13456 15.2416 2.28576 12.9786 1.5531 9.78041L0.822036 9.94788ZM5.03074 1.20786C1.7588 2.77866 0.0111622 6.40834 0.822036 9.94788L1.5531 9.78041C0.820419 6.58219 2.39963 3.30296 5.35533 1.88398L5.03074 1.20786ZM14.4767 3.393C12.2256 0.544588 8.30277 -0.362988 5.03074 1.20786L5.35533 1.88398C8.31095 0.465034 11.8545 1.28472 13.8882 3.85803L14.4767 3.393ZM14.4257 13.0947C16.7065 10.2703 16.7277 6.24131 14.4767 3.393L13.8882 3.85803C15.922 6.43144 15.9029 10.0717 13.8422 12.6235L14.4257 13.0947ZM15.4024 13.2793L14.347 12.5506L13.9208 13.1677L14.9762 13.8965L15.4024 13.2793ZM15.9114 13.6956C15.7548 13.5351 15.5804 13.3931 15.3915 13.2721L14.987 13.9037C15.1278 13.9939 15.2579 14.0998 15.3747 14.2195L15.9114 13.6956ZM8.41405 13.1176C5.70715 13.1176 3.51227 10.9214 3.51227 8.21165H2.76227C2.76227 11.3351 5.29238 13.8676 8.41405 13.8676V13.1176ZM11.88 11.6808C10.9607 12.6008 9.71398 13.1176 8.41405 13.1176V13.8676C9.91309 13.8676 11.3507 13.2716 12.4106 12.2109L11.88 11.6808ZM13.3158 8.21165C13.3158 9.51289 12.7993 10.7608 11.88 11.6808L12.4106 12.2109C13.4704 11.1502 14.0658 9.71161 14.0658 8.21165H13.3158ZM8.41405 3.30569C11.1209 3.30569 13.3158 5.50189 13.3158 8.21165H14.0658C14.0658 5.08823 11.5357 2.55569 8.41405 2.55569V3.30569ZM3.51227 8.21165C3.51227 5.50189 5.70715 3.30569 8.41405 3.30569V2.55569C5.29238 2.55569 2.76227 5.08823 2.76227 8.21165H3.51227Z" fill="white"/>
                                </svg>
                            </button>
                        </div>
                        <div class="catalog-sidebar__category">
                            <h3 class="catalog-sidebar__title">Категория</h3>
                            <div class="select">
                                <select class="catalog-sidebar__list">
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Кольца</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Браслеты</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Ожерелья</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Серьги</a></option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="catalog-sidebar__category">
                            <h3 class="catalog-sidebar__title">Сортировка</h3>
                            <div class="select">
                                <select class="catalog-sidebar__list">
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">От дешевого к дорогому</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">От дорогого к дешевому</a></option>
                                </select>
                            </div>
                        </div>
                        <div class="catalog-sidebar__category">
                            <h3 class="catalog-sidebar__title">Бренды</h3>
                            <div class="select">
                                <select class="catalog-sidebar__list">
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Бриллианты Якутии</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">МЦЗ</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Sunlight</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Krastsvetmet</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Okami</a></option>
                                    <option class="catalog-sidebar__item"><a href="#" class="catalog-sidebar__link">Бренды Италии</a></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="catalog-list">
                        <div class="catalog-list--item">
                            <div class="catalog-list--item__image"></div>
                            <p class="catalog-list--item__name">Название товара</p>
                            <p class="catalog-list--item__price">20.000 ₽</p>
                        </div>
                        <div class="catalog-list--item">
                            <div class="catalog-list--item__image"></div>
                            <p class="catalog-list--item__name">Название товара</p>
                            <p class="catalog-list--item__price">20.000 ₽</p>
                        </div>
                        <div class="catalog-list--item">
                            <div class="catalog-list--item__image"></div>
                            <p class="catalog-list--item__name">Название товара</p>
                            <p class="catalog-list--item__price">20.000 ₽</p>
                        </div>
                        <div class="catalog-list--item">
                            <div class="catalog-list--item__image"></div>
                            <p class="catalog-list--item__name">Название товара</p>
                            <p class="catalog-list--item__price">20.000 ₽</p>
                        </div>
                        <div class="catalog-list--item">
                            <div class="catalog-list--item__image"></div>
                            <p class="catalog-list--item__name">Название товара</p>
                            <p class="catalog-list--item__price">20.000 ₽</p>
                        </div>
                        <div class="catalog-list--item">
                            <div class="catalog-list--item__image"></div>
                            <p class="catalog-list--item__name">Название товара</p>
                            <p class="catalog-list--item__price">20.000 ₽</p>
                        </div>
                        <div class="catalog-list--item">
                            <div class="catalog-list--item__image"></div>
                            <p class="catalog-list--item__name">Название товара</p>
                            <p class="catalog-list--item__price">20.000 ₽</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
