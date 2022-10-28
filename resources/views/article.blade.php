@extends('layouts.app')

@section('title-block'){{$data->title}}@endsection

@section('content')
<h1>{{$data->title}}</h1>
<small>Автор: {{$author->name}} |</small>
<small>Дата публикации: {{$data->created_at->format('d.m.Y')}}</small>
@if($data->subject)
<p>Тема публикации: {{$data->subject}}</p>
@endif
<div class="content">
    {{$data->text}}
</div>
@endsection