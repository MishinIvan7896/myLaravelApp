@extends('layouts.app')

@section('title-block')Войти@endsection

@section('content')
<h1>Войти</h1>

<form action="{{route('user.login')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="email">Введите e-mail:</label>
        <input type="email" id="email" name="email" placeholder="Введите email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Введите пароль:</label>
        <input name="password" id="password" type="password" placeholder="Введите пароль" class="form-control">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Войти</button>
</form>
@endsection