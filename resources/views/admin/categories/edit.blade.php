@extends('layouts.admin')
@section('title') редактировать категорию @parent @stop
@section('content')
    <div class="col-md-8 /*d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom*/">
        <h1 class="h2">Редактировать категории новостей</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            <form method="POST" action="{{ route('categories.update', ['category' => $category]) }}">
                @csrf
                @method('put')
                <div class="farm-group">
                    <label for="title">Заголовок *</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $category->title }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="description">Описание *</label>
                    <textarea class="form-control" name="description" id="description">{!! $category->description !!}</textarea>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Редактировать категорию</button>
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