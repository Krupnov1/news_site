@extends('layouts.admin')
@section('title') добавить пользователя @parent @stop
@section('content')
    <div class="col-md-8 /*d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom*/">
        <h1 class="h2">Добавить пользователя</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div> 
                @endforeach
            @endif

            <form method="POST" action="{{ route('profile.store') }}">
                @csrf
                <div class="farm-group">
                    <label for="name">Имя *</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="email">Электронная почта *</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="password">Пароль *</label>
                    <input type="text" class="form-control" name="password" id="password" value="{{ old('password') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="is_admin">Статус администратора *</label>
                    <input type="text" class="form-control" name="is_admin" id="is_admin" value="{{ old('is_admin') }}">
                </div>
                <br>
                <button class="btn btn-success" type="submit">Добавить пользователя</button>
            </form>
        </div>
    </div>
@endsection 