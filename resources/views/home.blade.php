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

  <header class="header">
      <div class="">
        <h2>Web Developer Interview Assignment</h2>
        <h3>Saalim Al Marhubi</h2>
      </div>
      <div class="logo">
        <img class="logo-image" src="/images/logo.webp" alt="logo image">
      </div>
  </header>
  

  <div class="container">
    {{-- <p>{{$cards}}</p> --}}
  
    @foreach($cards as $card)
    <div class="card">
      @if(isset($card['image']))
      <img class="image" src="{{$card['image']}}" alt="card image">
      @endif
      <div class="card-body">
        <p class="title">{{ $card['title'] }}</p>
        <p class="content">{{ $card['content'] }}</p>
        @if(isset($card['cta']))
        <a target="_blank" class="button" href="{{$card['cta']['url']}}">{{$card['cta']['label']}}</a>
        @endif
      </div>
    </div>
    @endforeach
  </div>

  <footer class="footer">
    <div class="footer-content">

    </div>
  </footer>
  
  {{-- <script>
     
   fetch('/cards').then(response => response.json).catch(err => console.log(err))
  </script> --}}
  
</body>
</html>