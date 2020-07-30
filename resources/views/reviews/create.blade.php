@extends('layouts.app')

@section('title')
    Написать отзыв
@endsection

@section('content')
    <div class="container">
        <h1 class="">Напишите отзыв на компанию</h1>
        <div class="w-50 mx-auto">
            <form method="POST" action="/reviews/create">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input class="form-control" type="text" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="review_body">Отзыв</label>
                    <textarea class="form-control" name="review_body" id="review_body" cols="30" rows="10" required></textarea>
                </div>

                <div class="form-group my-3">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            @include('inc.errors')

            </form>
        </div>
    </div>
@endsection