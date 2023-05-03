@extends('layouts.main')
@section('title') личный кабинет @parent @stop
@section('content')
<div class="container home-container">
    <h2>Личный кабинет пользователя</h2>
    <br>
    <h3>Добро пожаловать: {{ Auth::user()->name }}</h3>

    @if (Auth::user()->is_admin === "1")
        <h4>Ваш статус: 
        <a href="{{ route('categories.index') }}">Администратор</a></h4>
    @else
        <h4>Ваш статус: Пользователь</h4>
    @endif
</div>
@endsection
