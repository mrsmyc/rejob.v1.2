@extends('layouts.app')

@section('title')
    Редактировать отзыв
@endsection

@section('content')
    <div class="container">
        <h1 class="">Напишите отзыв на компанию</h1>
        <div class="w-50 mx-auto">
        <form method="POST" action="{{ route('user_reviews.update', $review->id) }}">
                @method('PATCH')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Заголовок</label>
                <input class="form-control" value="{{$review->title}}" type="text" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="body">Отзыв</label>
                    <textarea class="form-control"  name="body" id="body" cols="30" rows="10">{!! $review->review_body!!}</textarea>
                </div>

                <div class="form-group my-3">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            @include('inc.errors')
            </form>
        </div>
    </div>
@endsection