@extends('layouts.admin')
@section('title') заказы @parent @stop
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Заказы пользователей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('order.create') }}" class="btn btn-sm btn-outline-secondary">Добавить</a>
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
                    <th>Телефон</th>
                    <th>Электронная почта</th>
                    <th>Комментарий</th>
                    <th>Дата добавления</th> 
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order) 
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->tel }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->comment }}</td>
                    <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                    <td><a href="{{ route('order.edit', ['order' => $order]) }}" class="btn btn-sm btn-outline-secondary">Редактировать</a>
                        <a href="{{ route('order.show', ['order' => $order]) }}" class="btn btn-sm btn-outline-secondary">Удалить</a>
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