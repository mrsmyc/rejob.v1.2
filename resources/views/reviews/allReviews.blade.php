@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Отзывы</h1>
        <div class="col-md-3 ml-auto">
            <a href="/reviews/create">Написать отзыв</a>
        </div>
        <div class="col-md-8 mr-auto">
            @foreach ($reviews as $review)
                {{-- @if ($review->user_id == Auth::user()->id)
                <div class="card mt-3">
                    <div class="card-body">
                    <h5 class="card-title">{{ $review->title }}</h5>
                    <p class="card-text">{{ $review->review_body }}</p>
                        <a href="{{ route('user_reviews.edit', $review->id )}}" class="btn btn-primary">Редактировать</a>

                    </div>
                </div>
                @else
                <div class="card mt-3">
                    <div class="card-body">
                    <h5 class="card-title">{{ $review->title }}</h5>
                    <p class="card-text">{{ $review->review_body }}</p>
                    </div>
                </div>
                @endif --}}
                <div class="card mt-3">
                    <div class="card-body">
                    <h5 class="card-title">{{ $review->title }}</h5>
                    <p class="card-text">{{ $review->review_body }}</p>
                    @if ($review->user_id == Auth::user()->id)
                        <a href="{{ route('user_reviews.edit', $review->id )}}" class="btn btn-primary">Редактировать</a>
                    @endif

                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3">
            {{ $reviews->links() }}
        </div>
    </div>
@endsection