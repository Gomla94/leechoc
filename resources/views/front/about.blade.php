@extends('layouts.front')

@section('styles')

@endsection

@section('content')
<div class="ps-page--about" style="font-family: 'Mada', sans-serif;">
      <div class="ps-hero bg--cover" data-background="{{asset('h1.png')}}">
        <div class="ps-hero__container">
         
          <h1 class="ps-hero__heading" 
          > من نحن </h1>
        </div>
      </div>

      <div class="ps-section ps-home-about" style="font-family: 'Mada', sans-serif; !important">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <div class="ps-section__header">
                <h3> أصل المنتج   </h3><img src="{{asset('img/hero/h2t.png')}}">
                              </div>
              <div class="ps-section__content">
                <p>   لكل شئ أصل وعند الحديث عن أصل الشوكولا فنحن نفخر أن عائلة السماني ذات الأسم العريق في سوريا من أوائل من بدأوا صناعة الحلوى والشوكولا في سوريا منذ عام ١٩١٠ على يد السيد محمد صالح سماني، وسا على نهجه ولده السيد جميل سماني حيث نشأ على حب وعشق صناعة الشوكولا ومن ثم قام بتوسيع الشركة وأحدث طفرة في صناعة الحلوى إذ كان هو من أدخل صناعة الشوكولا إلى الأسواق السورية       </p>
               <p>     والأن يتولى السيد سعد سماني الرئيس التنفيذي ل "لي شوك" الإشراف على إنتاج هذا المذاق المميز والمعشوق من جماهير "لي شوك" منذ العام ١٩٩٢ إلى أن وصلنا في يومنا هذا لأكثر من ٢٠٠ منفذ بيع متخصص حول العالم وإلى أن تم افتتاح فرع "لي شوك" بالمدينة المنورة عام ٢٠١٧      </p>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <div class="ps-section__image"><img src="{{asset('new5.jpg')}}" alt="" style="margin: 20px;">
<img src="{{asset('new4.jpg')}}" alt="" style="margin: 20px;">

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-home-awards bg--cover" style="background-color: brown">
        <div class="container">
          
          <div class="ps-section__content">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="ps-block--award">
                  <div class="ps-block__header"><img src="{{asset('01.png')}}" width="150px" height="150px" alt="">
                    <h4 style="font-size: 30px;">  هدفنا </h4>

                    <h4>  اسعاد عملاؤنا  </h4>                    
                  </div>
                  <div class="ps-block__content">
                    <p> ان اهتمامنا يتمحور حول تحقيق الجودة والأحترافية من خلال التطوير الدائم والناجح على المدى الطويل لاسعاد عملاؤنا بأعلى جودة وأشهى مذاق       </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="ps-block--award">
                  <div class="ps-block__header"><img src="{{asset('02.png')}}" width="150px" height="150px" alt="">
                    <h4 style="font-size: 30px;">      رسالتنا   </h4>
                    <h4>  التميز  </h4>
                  </div>
                  <div class="ps-block__content">
                    <p>  ان نجعل من كل لحظة تتذوق فيها لي شوك لحظة مميزة تستحق الأحتفال وتعيش في ذكراكم    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="ps-block--award">
                  <div class="ps-block__header"><img src="{{asset('03.png')}}" width="150px" height="150px" alt="">
                    <h4 style="font-size: 30px;">  رؤيتنا  </h4>
                   <h4 > الخيار ألاول </h4>

                  </div>
                  <div class="ps-block__content">
                    <p>     أن نكون دائما الاختيار الأول والمفضل لأصحاب الذوق الرفيع وخبراء التذوق في عالم الشيكولاتة بالمدينة المنورة            </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-home-best-services">
        <div class="ps-section__left bg--cover" data-background="{{asset('043.jpg')}}"></div>
        <div class="ps-section__right">
          <div class="ps-section__container" style="background-color :#D5C990;">
            <div class="ps-section__header">
              <p> </p>
              <h3>   سر منتجات لي شوك  </h3><img src="{{asset('img/hero/h2t.png')}}" >
            </div>
            <div class="ps-section__content">
              <p>   إن سر نجاح وأنتشار "لي شوكولا" حول العالم هو التمسك بتقاليد وسر مزج عائلة السماني لأفضل وأجود أنواع الكاكاو مع زبدة الكاكاو بعشق وحب لإنتاج ما يزيد عن 1200 طن سنوياً لنقدم لكم منتجات "لي شوك" المتنوعة .في اكثر 200 متجر حول العالم    </p>
              
            </div>
          </div>
          <div class="ps-section__image bg--cover" data-background="{{asset('043.jpg')}}"></div>
        </div>
      </div>

    </div>

    @section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  $( document ).ready(function() {
   $('#about').addClass('active')


  });

</script>
@endsection

@endsection

  
