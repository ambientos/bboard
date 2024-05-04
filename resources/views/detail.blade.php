@extends('layouts.app')

@section('title', $item->title)

@section('content')
<h1>{{$item->title}}</h1>
<h2>Описание</h2>
<p>{{$item->content}}</p>
<p>Цена: {{$item->price}}</p>
<p><a href="{{route('index')}}">Вернуться назад</a></p>
@endsection('content')
