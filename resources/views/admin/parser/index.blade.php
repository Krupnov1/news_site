@extends('layouts.admin')
@section('title') парсер @parent @stop
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Парсер новостей</h1>
    </div>
    <div class="table-responsive">
        <h3>Категория</h3>

        <form method="POST" action="{{ route('categories.store') }}"> 
                @csrf
                <div class="farm-group">
                    <label for="title">Заголовок *</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $services->title }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="description">Описание *</label>
                    <textarea class="form-control" name="description" id="description">{!! $services->description !!}</textarea>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Добавить категорию</button> 
        </form>

        <br>
        <br>

        <h3>Новости</h3>
        @foreach ($items as $service)
        <form method="POST" action="{{ route('news.store') }}">
                @csrf
                <div class="farm-group">
                    <label for="category_id">Категория *</label>
                    <select class="form-control" name="category_id" id="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                    </select>
                </div>
                <br>
                <div class="farm-group">
                    <label for="title">Заголовок *</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $service->title }}">  
                </div>
                <br>
                <div class="farm-group">
                    <label for="description">Описание *</label>
                    <textarea class="form-control" name="description" id="description">{!! $service->description !!}</textarea>
                </div>
                <button class="btn btn-success" type="submit">Добавить новость</button>
        </form>
        <br>
        @endforeach 

        <!--<table class="table table-bordered">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($items as $service)
                    <tr>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                                           
                    <td><a href="#" class="btn btn-sm btn-outline-secondary">Добавить</a></td> 
                    </tr>               
                @endforeach
                    
                              
            </tbody>
        </table>-->

    </div>
@endsection 