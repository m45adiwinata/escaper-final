@extends('layouts.phone')
@section('title')
Home
@endsection
@section('content')
@include('components.headerphone')
<section>
    <div class="homepage" style="background-image: url({{$background}});">
        <a href="/shop">Shop Now</a>
    </div>
</section>
@include('components.footerphone')
@endsection