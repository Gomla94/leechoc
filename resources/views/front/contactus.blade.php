@extends('layouts.front')

@section('style')
@endsection

@section('content')
<div class="ps-page--contact">
      <div class="ps-hero bg--cover" data-background="{{asset('h1.png')}}">
        <div class="ps-hero__container">
           
          <h1 class="ps-hero__heading"> تواصل معنا </h1>
        </div>
      </div>
<!--Section: Contact v.2-->
<div class="container">
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">   تواصل معنا و احصل علي خصم    </h2>
    <!--Section description-->

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
          <form class="ps-form--checkout" action="#" method="get" id="contact-form">
            <h4>معلومات الطلب</h4>
           
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="form-group">
                  <label>الاسم</label>
                  <input class="form-control" type="text" placeholder="" required>
                </div>
              </div>
             
            </div>
            
            <div class="form-group">
              <label>العنوان</label>
              <input class="form-control" type="text" placeholder="" required>
            </div>
            
            <div class="row">
              
              
              
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="form-group">
                  <label>رقم الهاتف</label>
                  <input class="form-control" type="text" placeholder="" required>
                </div>
              </div>
              
            </div>
            <div class="row">
              
              
              
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="form-group">
                  <a class="ps-btn ps-btn--fullwidth" onclick="document.getElementById('contact-form').submit();">ارسل الطلب</a>

                </div>
              </div>
              
            </div>

            
           
          </form>

         
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p> المدينة المنورة-شارع الأمير محمد بن عبدالعزيز</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p> 0508899054 / 8350004</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>lee.choco.m@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
</div>
<!--Section: Contact v.2-->

    </div>

    @section('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  $( document ).ready(function() {
   $('#contact').addClass('active')


  });

</script>
    @endsection
    @endsection