@extends('layouts.admin')
@section('title') редактировать профиль @parent @stop
@section('content')
    <div class="col-md-8 /*d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom*/">
        <h1 class="h2">Редактировать профиль</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            <form method="POST" action="{{ route('profile.update', ['profile' => $profile]) }}">
                @csrf
                @method('put')
                <div class="farm-group">
                    <label for="name">Имя *</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $profile->name }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="email">Электронная почта *</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $profile->email }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="password">Пароль *</label>
                    <input type="text" class="form-control" name="password" id="password" value="{{ $profile->password }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="is_admin">Статус администратора *</label>
                    <input type="text" class="form-control" name="is_admin" id="is_admin" value="{{ $profile->is_admin }}">
                </div>
                <br>
                <button class="btn btn-success" type="submit">Редактировать профиль</button>
            </form>
        </div>
    </div>
@endsection