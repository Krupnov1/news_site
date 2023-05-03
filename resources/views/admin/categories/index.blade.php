@extends('layouts.admin')
@section('title') категории новостей @parent @stop
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список категорий новостей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-secondary">Добавить категорию</a>
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
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Дата добавления</th> 
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category) 
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at->format('d-m-Y H:i') }}</td>
                    <td><a href="{{ route('categories.edit', ['category' => $category]) }}" class="btn btn-sm btn-outline-secondary">Редактировать</a>
                        <a href="{{ route('categories.show', ['category' => $category]) }}" class="btn btn-sm btn-outline-secondary">Удалить</a>
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