@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')
<h1>Контакты</h1>

<form action="{{route('contact-form')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введите имя:</label>
        <input type="text" id="name" name="name" placeholder="Введите имя" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Введите e-mail:</label>
        <input type="email" id="email" name="email" placeholder="Введите email" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Введите имя:</label>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection