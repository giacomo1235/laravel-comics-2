@extends('guest.templates.base')

@section('title', 'Laravel Comics - Home')

@section('content')
<main>
    <div class="container">
        <div class="current">current series</div>
        <div class="centered">
          <div class="contents">
              @php
               $series = config('comics')   
              @endphp
              @foreach ($series as $serie)
                  <div class="card-hero">
                      <a href="{{ route('comic', ['id' => $serie['id']]) }}">
                        <img src="{{$serie['thumb']}}" alt="">
                        <h2 class="title">{{$serie['series']}}</h2>
                      </a>
                  </div>    
              @endforeach
          </div>
        </div>
        <div class="button-load">
            <button>load more</button>
          </div>
        <ul class="cards">
          <li>
              <img src="./images/buy-comics-digital-comics.png" alt="">
              <a href="#!">digital comics</a>
          </li>
          <li>
            <img src="./images/buy-comics-merchandise.png" alt="">
            <a href="#!">dc merchandise</a>
          </li>
          <li>
            <img src="./images/buy-comics-subscriptions.png" alt="">
            <a href="#!">subscription</a>
          </li>
          <li>
            <img src="./images/buy-comics-shop-locator.png" alt="">
            <a href="#!">comic shop locator</a>
          </li>
          <li>
            <img src="./images/buy-dc-power-visa.svg" alt="">
            <a href="#!">dc power visa</a>
          </li>
        </ul>
    </div>
</main>       
@endsection