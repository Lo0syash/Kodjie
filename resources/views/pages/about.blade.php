@extends('layouts.app')
@section('title', 'О нас')
@section('content')
    <section class="about">
        <div class="container">
            <div class="about__inner">
                <div class="logotype-container">
                    <div class="logo-box">
                        <img src="{{ asset('resources/assets/images/icons/logo.svg') }}" alt="logo" class="logotype">
                    </div>
                </div>
                <div class="about-content">
                    <p><label><span>K</span>odjie</label> - команда профессиональных любителей ювелирных изделий, чья цель - предложить вам широкий ассортимент уникальных украшений, которые подчеркнут вашу индивидуальность и стиль. В нашем магазине вы найдете коллекции из изысканных изделий из драгоценных металлов и благородных камней, от классических обручальных колец до современных подвесок и серег.</p>
                </div>
                
                <p class="text-compl">Мы уделяем особое внимание качеству и уникальности каждого украшения, чтобы вы могли наслаждаться его красотой и элегантностью.</p>
            </div>
        </div>
    </section>
@endsection

