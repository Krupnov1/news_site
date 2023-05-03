@extends('layouts.main')
@section('title') отзывы @parent @stop
@section('content')
    <div class="col-md-6 container text-verticals"> 
        <br>
        <h1 class="h2">Форма обратной связи</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div> 
                @endforeach
            @endif

            <form method="POST" action="{{ route('reviews.store') }}">
                @csrf
                <div class="farm-group">
                    <label for="name">Имя *</label>
                    <input type="text" class="form-control" name="name" id="title" value="{{ old('name') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="comment">Комментарий/отзыв *</label>
                    <textarea class="form-control" name="comment" id="comment">{!! old('comment') !!}</textarea>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Отправить отзыв</button>
            </form>
        </div>
    </div>
@endsection