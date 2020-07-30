@extends('layouts.app')

@section('title')
    Войти
@endsection

@section('content')
    <div class="container">
        <h1>Войти</h1>
        <form class="w-50" method="POST" action="/login">
         {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="mt-3 btn btn-primary">Войти</button>
            </div>
        </form>
        <div class="">
            <a href="/register" class="nounderline">Нет аккаунта? Зарегистрируйтесь</a>
        </div>
        @include('inc.errors')
    </div>
@endsection