@extends('layouts.phone')
@section('title')
Lookbook
@endsection
@section('content')
@include('components.headerphone2')
<section>
  <div class="lookbook-wrapper">
    <div class="container-lg">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          @foreach($lookbook as $l)
          <div class="swiper-slide" style="background-image: url({{$l->image}});"></div>
          @endforeach
        <!-- Add Pagination -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
      
      <div class="lookbook-name">
        @foreach($lookbook as $l)
          {{$l->image}}
        @endforeach
        @php echo $lookbook_text; @endphp
      </div>
    </div>
  </div>
</section>
	
@include('components.footerphone')
@endsection
	
@section('script')
<script>
  
    var swiper = new Swiper('.swiper-container', { 
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true, 
      autoplay: { 
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
</script>
@endsection