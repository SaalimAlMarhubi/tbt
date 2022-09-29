<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <link href="/resources/css/app.css" rel="stylesheet"> --}}
  {{-- <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet" type="text/css" > --}}

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;700&display=swap" rel="stylesheet">
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Web Developer Interview Assignment</title>
</head>
<body>
  <style>
   
  </style>

  @include('components.header')
  
  <div class="container" id="app">
    <cards-grid></cards-grid>
  </div>

  <div class="container">
    @foreach($cards as $card)
    <div class="card">
      @if(isset($card['image']))
      <img class="image" src="{{$card['image']}}" alt="card image">
      @else
      <img class="image" src="https://placekitten.com/600/400?v=5" alt="card image">
      @endif
      <div class="card-body">
        <p class="title">{{ $card['title'] }}</p>
        <p class="content">{{ $card['content'] }}</p>
        @if(isset($card['cta']))
        <a target="_blank" class="button" href="{{$card['cta']['url']}}" rel="noopener noreferrer">{{$card['cta']['label']}} </a>
        @endif
      </div>
    </div>
    @endforeach
  </div>

  @include('components.footer')
  
</body>
</html>