@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Мои отзывы</h1>
        <div class="col-md-3 ml-auto">
            <a href="/reviews/create">Написать отзыв</a>
        </div>
        <div class="col-md-8 mr-auto">
            @foreach ($reviews as $review)
                <div class="card mt-3">
                    <div class="card-body">
                    <h5 class="card-title">{{ $review->title }}</h5>
                    <p class="card-text">{{ $review->review_body }}</p>
                    <a href="{{ route('user_reviews.edit', $review->id )}}" class="btn btn-primary">Редактировать</a>
                    {{-- <a href="/myreviews/edit/{{$review->id}}" class="btn btn-primary">Редактировать</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3">
            {{ $reviews->links() }}
        </div>
    </div>
@endsection