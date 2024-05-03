@extends('layouts.app')

@section('title', 'Мои объявления')

@section('content')

<h1>Мои объявления</h1>

<h2>Пользователь: {{Auth::user()->name}}</h2>

<p><a href="{{route('bb.create')}}">Добавить объявление</a></p>

@if (count($bbs) > 0)
    <style>
        th, td {
            border: 1px solid #000;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bbs as $bb)
                <tr>
                    <td><h3>{{ $bb->title }}</h3></td>
                    <td>{{ $bb->price }}</td>
                    <td>
                        <a href="{{route('bb.edit', ['bb' => $bb->id])}}">Изменить</a>
                    </td>
                    <td>
                        <a href="{{route('bb.delete', ['bb' => $bb->id])}}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@endsection
