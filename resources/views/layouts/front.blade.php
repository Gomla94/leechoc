<!DOCTYPE html>
<html lang="en">
  
<!--  27:02-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title> LEE Chooc </title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Mada&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/chikery-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    @yield('styles')
  </head>
  <body>
  <header class="header header--default header--home-4 line" data-sticky="true">
      <div class="header__left">
        <ul class="ps-list--social">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/leechocoksa?s=09"target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-snapchat"></i></a></li>
          <li><a href="https://instagram.com/leechocoksa?igshid=7n0q8318p7o5"target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="header__center">
        <nav class="header__navigation left" style="font-family: font-family: 'Mada', sans-serif;">
                    <ul class="menu">
                       <li class="current-menu-item "><a href="/contact-us">   تواصل معنا   </a>
            </li>
            <li class="current-menu-item "><a href="/about-us">   من نحن </a>
            </li>
                    </ul>


        </nav>
        <div class="header__logo"><a class="ps-logo" href=""><img src="{{asset('unnamed02.png')}}" alt=""></a></div>
        <nav class="header__navigation right">
          <ul class="menu">
            <li class="current-menu-item "><a href="/all">   المتجر  </a>
            </li>
            <li class="current-menu-item "><a href="/">    الرئيسية  </a>
             </li>
          </ul>
        </nav>
      </div>
      <div class="header__right">
        <div class="header__actions">
          <div class="ps-cart--mini"><a class="ps-cart__toggle" href="#">
            <i class="fa fa-shopping-basket"></i>
            <span><i id="cart_total_elements">0</i></span>
          </a>
            <div class="ps-cart__content" style="overflow:auto">
            
              <div class="ps-cart__items"  id="cart-normal">
              </div>
              <div class="ps-cart__footer">
                <h3>Sub Total:<strong id="total-cart">ر.س0.00</strong></h3>
                <figure class="cart-figure" id="cart-figure"><a class="ps-btn" href="{{ route('cart') }}">View Cart</a></figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <header class="header header--mobile" data-sticky="false" style="background-color :#D5C990;">
      <div class="header__content">
        <div class="header__center"><a class="ps-logo" href="#"><img src="{{asset('unnamed.png')}}" alt=""></a></div>
        
      </div>
    </header>

    <div class="navigation--list" style="background-color :#D5C990;">
      <div class="navigation__content">
        <div>
        <a class="navigation__item " style="text-align: center;" href="/">
          <i class="fa fa-home"></i>
        </a>
        <h5 style="color: white;margin-right: 5px;" >   الرئيسية  </h5>
        </div>
        <div>
        <a class="navigation__item " id="store" style="text-align: center;" href="/all">
          <i class="fa fa-store"></i>
        </a>
        <h5 style="color: white;margin-right: 5px;" >  المتجر </h5>
        </div>
        <div>
        
        </div>
       <div>
         <a class="navigation__item ps-toggle--sidebar" href="#cart-mobile">
          <i class="fa fa-shopping-basket" id="cart_total_elements_mobile">0</i>
        </a>
          <h5 style="color: white;margin-right: 5px;" > العربة </h5>
       </div>
       <div>
         <a class="navigation__item" id="contact" href="/contact-us" >
          <i class="fa fa-phone" ></i>
        </a>
          <h5 style="color: white;margin-right: 5px;" > تواصل معنا </h5>
       </div>
        
        </div>
    </div>
    <div class="ps-panel--sidebar" id="cart-mobile">
      <div class="ps-panel__header">
        <h3>Shopping Cart</h3>
      </div>
      <div class="navigation__content">
        <div class="ps-cart--mobile">
          <div class="ps-cart__content">

            <div class="ps-cart__items" id="cart-menu">
            </div>
            <div class="ps-cart__footer">
              <h3>Sub Total:<strong id="total-cart-mobile">ر.س0.00</strong></h3>
              <figure id="cart-figure-mobile"><a class="ps-btn" href="{{ route('cart') }}">View Cart</a></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--include search-sidebar-->
    <div id="homepage-1">
    @yield('content')
        
    </div>
    <footer class="ps-footer" style="background: #EAE0D6">
      <div class="ps-footer__content">
        <div class="container">
          <div class="ps-footer__left">
            <form class="ps-form--footer-subscribe" action="#" method="get">
          
              <div class="form-group--inside">
                <input class="form-control" type="text" placeholder="Your email...">
                <button><i class="fa fa-arrow-right"></i></button>
              </div>
            </form>
          </div>
          <div class="ps-footer__center">
            <div class="ps-site-info"><a class="ps-logo" href=""><img src="{{asset('unnamed02.png')}}" alt=""></a>
              <p>    المدينة المنورة-شارع الأمير محمد بن عبدالعزيز  </p>
              <p>Email: <span class="__cf_email__" >lee.choco.m@gmail.com</span></p>
              <p>Phone:<span class="ps-hightlight"> 0508899054 / 8350004</span></p>
            </div>
          </div>
          <div class="ps-footer__right">
            <aside class="widget widget_footer">
              <h3 class="widget-title">   مواعيد العمل  </h3>
              <p>{{$homepage->working_days}}:  <span>{{$homepage->working_hours}}</span></p>
              <p>{{$homepage->working_days_two}}:  <span>{{$homepage->working_hours_two}}</span></p>
            
            </aside>
          </div>
        </div>
      </div>
      <div class="ps-footer__bottom">
        <div class="container">
          <ul class="ps-list--social">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/leechocoksa?s=09"target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-snapchat"></i></a></li>
            <li><a href="https://instagram.com/leechocoksa?igshid=7n0q8318p7o5"target="_blank"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
   
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"><h4 style=" margin: 0;
  position: absolute;
  top: 50%;
  ">Loading Page...</h4>
  
</div>
    </div>
  
    <!-- Plugins-->
    <script src="{{asset('plugins/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('plugins/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('plugins/slick-animation.min.js')}}"></script>
    <script src="{{asset('plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('plugins/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('plugins/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('plugins/gmap3.min.js')}}"></script>
    <script src="{{asset('/js/cart.js')}}" defer></script>
    <!-- Custom scripts-->
    <script src="{{asset('js/main.js')}}"></script>
    @yield('scripts')
  </body>
<!--  29:51-->
</html>
