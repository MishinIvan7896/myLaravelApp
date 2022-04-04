@extends('layouts.app')

@section('title-block')Сообщения@endsection

@section('content')
    <h1>Сообщения</h1>
    @foreach($data as $item)
    <div class="alert alert-info">
        <p>{{ $item->name }}</p>
        <p><small>{{ $item->email }}</small></p>
        <p><small>{{ $item->created_ats }}</small></p>
        <a href="{{ route('contact-data-one', $item->id) }}"><button class="btn btn-warning">Детальнее</button></a>
    </div>
    @endforeach
@endsection      