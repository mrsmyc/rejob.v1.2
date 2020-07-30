@extends('layouts.app')

@section('title')
Профиль
@endsection

@section('content')
    <div class="container">
        <h1 class="">Мой профиль</h1>
        <div class="w-50 mx-auto">

            <div class="card align-items-center">
                <div class="">
                    <img class="rounded-circle" src="/uploads/avatars/{{ $user->avatar }}" alt="">
                </div>
                <div class="mt-2">
                    <form action="/profile" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="file" name="avatar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="mt-2 btn btn-primary">Обновить</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <p>{{ $user->name }}</p>
                </div>
                <div class="mb-3">
                    <a href="" class="btn btn-primary" >Редактировать профль</a>
                </div>
            </div>
        </div>
    </div>
@endsection