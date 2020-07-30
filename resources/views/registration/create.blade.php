@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="mx-auto">Регистрация:</h1>
        <form class="w-50" method="POST" action="/register">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" class="form-control" id="password" name="password" required >
            </div>

            <div class="form-group">
                <label for="password_confirmation">Пароль еще раз:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="mt-3 btn btn-primary">Зарегестрироваться</button>
            </div>

            @include('inc.errors')
        </form>
    </div>
@endsection