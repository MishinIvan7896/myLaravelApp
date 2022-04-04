@extends('layouts.app')

@section('title-block')Сообщения@endsection

@section('content')
    <h1>Сообщение {{ $data->id }}</h1>
    <div class="alert alert-info">
        <p>{{ $data->name }}</p>
        <p>{{ $data->message }}</p>
        <p><small>{{ $data->email }}</small></p>
        <p><small>{{ $data->created_ats }}</small></p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection      