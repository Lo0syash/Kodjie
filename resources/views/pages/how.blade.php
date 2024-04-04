@extends('layouts.app')
@section('title', 'Где нас найти?')
@section('content')
    <section class="how">
        <div class="container-content">
            <div class="how__inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.0791011467322!2d49.17637657182949!3d55.80175225120453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415eb2821ae12973%3A0xb7064b3d52be5316!2z0YPQuy4g0JPQsNC70LXQtdCy0LAsIDPQkCwg0JrQsNC30LDQvdGMLCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCA0MjAwNjE!5e0!3m2!1sru!2sru!4v1712188444777!5m2!1sru!2sru" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="how-content">
                    <p class="adress">Адрес: <span>г. Казань, ул. Бари Галеева, д. 3а</span></p>
                    <p class="num">Контактный номер: <a href="tel:+79521522507">+79521522507</a></p>
                    <p class="email">Email: <a href="mailto:kodjie@gmail.com">kodjie@gmail.com</a></p>
                </div>        
            </div>
        </div>
    </section>
@endsection