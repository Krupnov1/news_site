@extends('layouts.main')
@section('title') заказы @parent @stop
@section('content')
    <div class="col-md-6 container text-verticals"> 
        <br>
        <h1 class="h2">Заказ на получение выгрузки данных</h1> 
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div> 
                @endforeach
            @endif

            <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <div class="farm-group">
                    <label for="name">Имя *</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="tel">Номер телефона *</label>
                    <input type="tel" class="form-control" name="tel" id="tel" value="{{ old('tel') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="email">Email - адрес *</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="comment">Что Вы хотите получить? *</label>
                    <textarea class="form-control" name="comment" id="comment">{!! old('comment') !!}</textarea>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Отправить заказ</button>
            </form>
        </div>
    </div>
@endsection