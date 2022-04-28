@extends('guest.templates.base')

@section('title', $title)

@section('content')
    <div class="container-comic">
        <div class="bluebar"></div>
        <div class="centered-comic">
            <div class="col-left">
                <h1 class="comic-title">{{ $comic['title'] }}</h1>
                <div class="comic-price"><p>U.S. Price: <span>{{ $comic['price'] }}</span></p></div>
                <p class="comic-description">{{ $comic['description'] }}</p>
            </div>
            <div class="col-right">
                <img src="/images/parara.jpg" alt="">
            </div>
        </div>
    </div>
    
    <div class="comic-img">
        <img src="{{ $comic['thumb'] }}" alt="">
        <button>view gallery</button>
        <p>{{ $comic['type'] }}</p>
    </div>
@endsection
