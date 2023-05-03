@extends('layouts.admin')
@section('title') редактировать новость @parent @stop
@section('content')
    <div class="col-md-8 /*d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom*/">
        <h1 class="h2">Редактировать новость</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div> 
                @endforeach
            @endif

            <form method="POST" action="{{ route('news.update', ['news' => $news]) }}">
                @csrf
                @method('put')
                <div class="farm-group">
                    <label for="category_id">Категория *</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" 
                                @if($category->id === $news->category_id) selected 
                                @endif>{{ $category->title }}</option>
                        @endforeach
                    </select>
                    
                </div>
                <br>
                <div class="farm-group">
                    <label for="title">Заголовок *</label> 
                    <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
                </div>
                <br>
                <!--<div class="farm-group">
                    <label for="slug">Слаг *</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}">
                </div>
                <br>-->
                <div class="farm-group">
                    <label for="image">Логотип *</label>
                    <input type="file" class="form-control" name="image" id="image" value="{{ $news->image }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="description">Описание *</label>
                    <textarea class="form-control" name="description" id="description">{!! $news->description !!}</textarea>
                </div>
                <br>
                <div class="farm-group">
                    <label for="status">Статус *</label>
                    <select class="form-control" name="status" id="status">
                        <option>draft</option>
                        <option>published</option>
                        <option>blocked</option>
                    </select>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Редактировать новость</button>
            </form>

            <!--<div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span> 
                This week
            </button>-->
        </div>
    </div>
@endsection
 
