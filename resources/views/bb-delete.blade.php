@extends('layouts.app')

@section('title', 'Удаление объявления :: Мои объявления')

@section('content')
    <h1>Удаление объявления</h1>
    <h2>Заголовок: {{$bb->title}}</h2>
    <p>Автор: {{$bb->user->name}}</p>
    <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
@endsection('content')
