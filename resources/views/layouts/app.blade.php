<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>

   {{-- icon --}}
   <script src="https://kit.fontawesome.com/f4a502dd6f.js" crossorigin="anonymous"></script>

   <!-- Core theme JS-->
   <script src="{{ asset('js/scripts.js') }}"></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
   <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">
   @yield('style')
</head>

<body>
   <div id="app">

      <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm sticky-top" id="mainNav">
         <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- Left Side Of Navbar -->
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a href="{{route('product.index')}}" class="nav-link">Shopping</a>
                  </li>
               </ul>
               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                
                     <form method="get" action="{{ url('/search')}}">
                      
                           <input type="search" name="query" placeholder="search" class="form-control" id="exampleInputPassword1" placeholder="search">
                           <button type="submit" class="btn btn-primary">search</button>
                     
                     </form>
                 

                  <ul class="navbar-nav  ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="store#Category">Category</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('news')}}">News</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('about')}}">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('team')}}">Team</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact')}}">Contact</a>
                     </li>

                     @guest
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                     @if (Route::has('register'))
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                     @endif
                     @else
                     <li class="nav-item">
                        <a href="{{ route('cart.show')}}" class="nav-link">
                           <span class="fas fa-shopping-cart">
                              My Cart ({{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }})
                           </span>
                        </a>
                     </li>
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a href="{{ route('order.index') }}" class="dropdown-item">Orders <i class="fas fa-grip-horizontal ml-2"></i></a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                              <i class="fas fa-sign-out-alt ml-2"></i>
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </div>
                     </li>
                     @endguest
                  </ul>
               </ul>
            </div>
         </div>
      </nav>
      <main class="py-4">
         @yield('content')
      </main>
   </div>
   @include('sweetalert::alert')
   @yield('script')
   <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=328473508273292&autoLogAppEvents=1" nonce="rKujflOV"></script>
<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5" data-width=""></div>

   <!-- Footer-->
   <footer class="footer py-4">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © FPT Aptech 2020</div>
            <div class="col-lg-4 my-3 my-lg-0">
               <a class="btn btn-dark btn-social mx-2" id="icon" href="#!"><i class="fab fa-twitter"></i></a>
               <a class="btn btn-dark btn-social mx-2" id="icon" href="#!"><i class="fab fa-facebook-f"></i></a>
               <a class="btn btn-dark btn-social mx-2" id="icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
               <a class="mr-3" href="#!">Privacy Policy</a>
               <a href="#!">Terms of Use</a>
            </div>
         </div>
      </div>
   </footer>

   <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
         items: 4,
         loop: true,
         margin: 10,
         autoplay: true,
         autoplayTimeout: 2500,
         autoplayHoverPause: true
      });
      $('.play').on('click', function() {
         owl.trigger('play.owl.autoplay', [1000])
      })
      $('.stop').on('click', function() {
         owl.trigger('stop.owl.autoplay')
      })
   </script>

</body>

</html>