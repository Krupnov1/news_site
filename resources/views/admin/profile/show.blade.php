@extends('layouts.admin')
@section('title') удалить профиль @parent @stop
@section('content')
    <div class="col-md-8 /*d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom*/">
        <h1 class="h2">Удаление профиля!</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            <form method="POST" action="{{ route('profile.destroy', ['profile' => $profile]) }}">
                @csrf
                @method('DELETE')
                <br>
                
                <h2>Вы действительно хотите удалить профиль пользователя {{ $profile->name }} ?</h2>

                <br>
                <button class="btn btn-success" type="submit">Удалить профиль</button>
            </form>
        </div>
    </div>
@endsection