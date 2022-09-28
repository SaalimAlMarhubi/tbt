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
      <div class="header-title">
        <h2>Web Developer Interview Assignment</h2>
        <h3>Saalim Al Marhubi</h2>
      </div>
      <div class="logo">
        <img class="logo-image" src="/images/logo.webp" alt="logo image">
      </div>
  </header>
  

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

  <footer class="footer">
    <div class="footer-content">
        <div class="footer-contact">
        <h2>Let's chat!</h2>
        <h4>
        <a class="footer-phone" href="tel:+441373469270">+44 (0)1373 469 270</a>
        </h4>
        <div class="footer-socials">
        <a href="https://twitter.com/tbt_marketing" class="social-link" target="_blank" rel="noopener"><img src="https://www.tbtmarketing.com/images/twitter.svg" alt="Twitter"></a>
        <a href="https://www.facebook.com/tbtmarketing" class="social-link" target="_blank" rel="noopener"><img src="https://www.tbtmarketing.com/images/facebook.svg" alt="Facebook"></a>
        <a href="https://www.linkedin.com/company/tbt-marketing" class="social-link" target="_blank" rel="noopener"><img src="https://www.tbtmarketing.com/images/linkedin.svg" alt="LinkedIn"></a>
        </div>
      </div>
        <br><br>
        <div class="">
        <div class="content">
        <h4>TBT Marketing</h4>
        <p>K1 &amp; K2, The Courtyard<br>Jenson Avenue<br>Commerce Park<br>Frome BA11 2FG, UK<br></p>
        </div>
        </div>
    </div>
  </footer>
  
</body>
</html>