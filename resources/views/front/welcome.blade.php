<!DOCTYPE html>
<html lang="en">
  
<!--  27:02-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>LEE Chooc</title>
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
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  </head>
  <body>
 
  <header class="header header--default header--home-4 line" style="background-color: #D5C990;" data-sticky="true">
      <div class="header__left">
        <ul class="ps-list--social">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/leechocoksa?s=09"target="_blank"><i class="fab fa-twitter"></i></a></li>
         </ul>
      </div>
      <div class="header__center" style="font-family: 'Mada', sans-serif;
      font-size: xx-large;">
        <nav class="header__navigation left">
                    <ul class="menu">
                       <li class="current-menu-item "><a href="/contact-us"> تواصل معنا   </a></li>
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
        <ul class="ps-list--social">

          <li><a href="#"><i class="fab fa-snapchat"></i></a></li>
          <li><a href="https://instagram.com/leechocoksa?igshid=7n0q8318p7o5"target="_blank"><i class="fab fa-instagram"></i></a></li>
       </ul>
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
        <a class="navigation__item active" style="text-align: center;" href="/">
          <i class="fa fa-home"></i>
        </a>
        <h5 style="color: white;margin-right: 5px;font-family: 'Mada', sans-serif;" >   الرئيسية  </h5>
        </div>
        <div>
        <a class="navigation__item " style="text-align: center;font-family: 'Mada', sans-serif;" href="/all">
          <i class="fa fa-store"></i>
        </a>
        <h5 style="color: white;margin-right: 5px;" >  المتجر </h5>
        </div>
        <div>
        <a class="navigation__item " style="text-align: center;font-family: 'Mada', sans-serif;" href="/about-us">
          <i class="fa fa-info"></i>
        </a>
        <h5 style="color: white;margin-right: 5px;font-family: 'Mada', sans-serif;" >  من نحن  </h5>
        </div>
        <div>
        <a class="navigation__item " style="text-align: center;" href="/contact-us">
          <i class="fa fa-info"></i>
        </a>
        <h5 style="color: white;margin-right: 5px;font-family: 'Mada', sans-serif;" >  تواصل معنا  </h5>
      </div>
        </div>
       
        
        </div>
    </div>
    <!--include search-sidebar-->
    <div id="homepage-1">
      <div class="ps-home-banner">
        <div class="ps-carousel--dots owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="off" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
          @foreach($slider_images as $image)
          <div class="ps-banner ps-banner--1 bg--cover" data-background="{{asset('images/'.$image->image_url)}}">
            <div class="ps-banner__content">
              <h3>     {{$image->main_text}}     </h3>
              <p>   {{$image->brief_text}}    </p><a class="ps-btn" style="background-color: #D5C990;" href="/all">تذوق الان</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="ps-section ps-home-about bg--cover" data-background="">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <div class="ps-section__image"><img src="{{ asset('035.jpg') }}" alt=""></div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <div class="ps-section__header">
                <h3>  {{$homepage->first_title}} </h3>
               <p>      {{$homepage->first_brief}}  </p><img src="{{asset('img/hero/h2t.png')}}">
              </div>
              <div class="ps-section__content">
              <p>{{$homepage->first_main_text}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-home-best-services">
        <div class="ps-section__left bg--cover" data-background="{{ '043.jpg'}}"></div>
        <div class="ps-section__right">
          <div class="ps-section__container" style="background-color: #D5C990;">
            <div class="ps-section__header">
              <p>        </p>
              <h3>  {{$homepage->second_title}}      </h3><img src="{{'croquettes.jpg'}}" >
            </div>
            <div class="ps-section__content">
              <p>نحن نمتن لأسرة سماني العريقة لتقديم سر خلطة السعادة من مزيج متناغم ما بين أجود انواع الكاكاو الخام لإنتاج أروع تشكيلة شيكولاتة يسعد بها الملايين حول العالم رغم اختلافات الثقافات وذلك مع اتباع سياستنا في "لي شيكولا" في الحفاظ على الطبيعة وتطبيق أقصى معايير الجودة والسلامة الغذائية في بيئة عمل أمنة اثناء انتاج أكثر من 1200 طن سنوياً ليستمتع بها عشاق الشيكولاتة حول العالم

              </p>
            </div>
          </div>
          <div class="ps-section__image bg--cover" data-background="{{'043.jpg'}}"></div>
        </div>
      </div>
     
      <div class="ps-section ps-home-product">
        <div class="container-fluid">
          <div class="ps-section__header">
            <p>               </p>
            <h3>      {{$homepage->third_title}}       </h3><img src="{{'007.jpg'}}" >
          </div>
          <div class="container">
              
            <div class='row'>
              <div class='col-md-12'>
                <div class="carousel slide media-carousel" id="media">
                  <div class="carousel-inner">
                    <div class="item  active">
                      <div class="row">
                        @foreach ($categories as $category)
                        <div class="col-md-4">
                          <a class="thumbnail" style="height:220px" href="{{ route('filter_products', $category->id)}}"><img alt="" src="{{ asset('images/categories/'.$category->image) }}"></a>
                          <div class="sliderThumb">
                            <a  href="{{ route('filter_products', $category->id)}}" class="sliderThumbnail">{{ $category->name }}</a>
                          </div>
                        </div>                 
                        @endforeach
                      </div>
                    </div>
                    @if ($more_categories->count())
                      <div class="item">
                        <div class="row">
                            @foreach ($more_categories as $category)
                            <div class="col-md-4">
                              <a class="thumbnail" style="height:220px" href="{{ route('filter_products', $category->id)}}"><img alt="" src="{{ $category->image }}"></a>
                              <div class="sliderThumb">
                                <a  href="{{ route('filter_products', $category->id)}}" class="sliderThumbnail">{{ $category->name }}</a>
                              </div>
                            </div>                 
                          @endforeach    
                        </div>
                      </div>
                    @endif
                    
                  </div>
                  <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#media" class="right carousel-control">›</a>
                </div>                          
              </div>
            </div>
          </div>
          <div class="ps-section__footer"><a class="ps-btn ps-btn--outline" href="/all">    المتجر   </a></div>
        </div>
      </div>

      
     
      <div class="ps-home-book-table">
        <div class="ps-section__left bg--cover" data-background="{{ asset('007.jpg')}}">
          <div class="ps-section__content">
            
            <div class="ps-video"><a href="https://www.youtube.com/watch?v=U9ALO3njxDA"><i class="fa fa-play"></i></a></div>
          </div>
        </div>
        <div class="ps-section__right">
          <div class="ps-form--book-your-table" >
            <div class="ps-form__header">
              <h4>       </h4>
              <h3>     {{$homepage->fourth_title}}       </h3><img src="{{'croquettes.jpg'}}" >
              
               

            </div>
           
           
        </div>
      </div>
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
      <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
      <div class="ps-search__content">
        <form class="ps-form--primary-search" action="#" method="post">
          <input class="form-control" type="text" placeholder="Search for...">
          <button><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <!-- Plugins-->

    <script>
        const ACTIVE_CATEGORY = document.getElementById('active-category');
        ACTIVE_CATEGORY.classList.add('active');
    </script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
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
    <!-- Custom scripts-->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>

    <script>
      $('document').ready(function() {
      $('#media').carousel({
        pause: true,
        interval: false,
      });
    });
    </script>
  </body>

<!--  29:51-->
</html>
