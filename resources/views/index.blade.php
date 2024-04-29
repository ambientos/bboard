@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    @if (count($bbs) > 0)
        @foreach ($bbs as $item)
            <article id="{{$item->id}}">
                <h2>
                    <a href="{{route('detail', ['item' => $item->id])}}">
                        {{$item->title}}
                    </a>
                </h2>
                <p>{{$item->content}}</p>
                <p>{{$item->price}}</p>
            </article>
        @endforeach
    @else
        <p>Ничего не найдено</p>
    @endif
@endsection('content')
