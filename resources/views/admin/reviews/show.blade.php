@extends('layouts.admin')
@section('title') удалить отзыв @parent @stop
@section('content')
    <div class="col-md-8 /*d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom*/">
        <h1 class="h2">Удаление отзыва!</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">

            <form method="POST" action="{{ route('review.destroy', ['review' => $review]) }}">
                @csrf
                @method('DELETE')
                <br>
                
                <h2>Вы действительно хотите удалить отзыв от пользователя {{ $review->name }} ?</h2>

                <br>
                <button class="btn btn-success" type="submit">Удалить отзыв</button>
            </form>
        </div>
    </div>
@endsection