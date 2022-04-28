@extends('guest.templates.base')

@section('title', $title)

@section('content')
    <h1>{{ $comic['title'] }}</h1>
    <p>{{ $comic['price'] }}</p>
    <p>{{ $comic['description'] }}</p>
    <img src="{{ $comic['thumb'] }}" alt="">
@endsection
