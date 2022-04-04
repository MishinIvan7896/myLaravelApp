@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')
<h1>Обновление записи</h1>

<form action="{{route('contact-update-submit', $data->id)}}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введите имя:</label>
        <input type="text" id="name" name="name" placeholder="Введите имя" class="form-control" value="{{$data->name}}">
    </div>
    <div class="form-group">
        <label for="email">Введите e-mail:</label>
        <input type="email" id="email" name="email" placeholder="Введите email" class="form-control" value="{{$data->email}}">
    </div>
    <div class="form-group">
        <label for="message">Введите имя:</label>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control">{{$data->message}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Обновить</button>
</form>
@endsection