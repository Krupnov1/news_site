@extends('layouts.main')
@section('title') главная @parent @stop
@section('content')
    <section class="text-center container text-verticals">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Приветствуем Вас на сайте новостей</h1>
                <p class="lead text-muted">На данном сайте представлены новости по категориям. Для просмотра перейдите на страницу категорий новостей</p>
                <a href="{{ route('newsCategory') }}">Перейти на страницу категорий новостей</a>
            </div>
        </div>
    </section>
@endsection