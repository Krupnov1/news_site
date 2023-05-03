@extends('layouts.main')
@section('title') новость {{ $news->id }} @parent @stop
@section('content')
    <section class="text-center container text-verticals">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $news->title }}</h1>
                <p class="lead text-muted">На данной странице подробнее представлена выбранная новость</p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <h4>{{ $news->description }}</h4> 
        </div>
    </div>
@endsection

