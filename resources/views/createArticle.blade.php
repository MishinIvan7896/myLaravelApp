@extends('layouts.app')

@section('title-block')Написать статью@endsection

@section('content')
<h1>Написать статью</h1>

<form action="{{route('save-article')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="subject">Тема:</label>
        <input type="text" id="subject" name="subject" placeholder="Введите тему" class="form-control">
    </div>
    <div class="form-group">
        <label for="tltle">Название:</label>
        <input type="tltle" id="tltle" name="tltle" placeholder="Введите название" class="form-control">
    </div>
    <div class="form-group">
        <label for="text">Текст:</label>
        <textarea name="text" id="text" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Опубликовать</button>
</form>
@endsection