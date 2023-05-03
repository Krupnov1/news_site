@extends('layouts.admin')
@section('title') добавить комментарий @parent @stop
@section('content')
    <div class="col-md-8 /*d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom*/">
        <h1 class="h2">Добавить комментарий</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div> 
                @endforeach
            @endif

            <form method="POST" action="{{ route('review.store') }}">
                @csrf
                <div class="farm-group">
                    <label for="name">Имя *</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="comment">Комментарий *</label>
                    <textarea class="form-control" name="comment" id="comment">{!! old('comment') !!}</textarea>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Добавить комментарий</button>
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