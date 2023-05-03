@extends('layouts.admin')
@section('title') профили @parent @stop
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Профили пользователей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('profile.create') }}" class="btn btn-sm btn-outline-secondary">Добавить</a>
            </div>
            <!--<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"> 
                <span data-feather="calendar"></span>
                This week
            </button>-->
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>№ID</th>
                    <th>Имя</th>
                    <th>Электронная почта</th>
                    <th>Пароль</th>
                    <th>Статус администратора</th>
                    <th>Дата регистрации</th> 
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($profiles as $profile) 
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ $profile->password }}</td>
                    <td>{{ $profile->is_admin }}</td>
                    <td>{{ $profile->created_at->format('d-m-Y H:i') }}</td>
                    <td><a href="{{ route('profile.edit', ['profile' => $profile]) }}" class="btn btn-sm btn-outline-secondary">Редактировать</a>
                        <a href="{{ route('profile.show', ['profile' => $profile]) }}" class="btn btn-sm btn-outline-secondary">Удалить</a>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4"><h3>Записей нет</h3></td>
                    </tr>
                @endforelse 
            </tbody>
        </table>
    </div>
@endsection 