@extends('layouts.phone')
@section('title')
Stockists
@endsection
@section('content')
@include('components.headerphone2')
<section>
    <div class="stockist-wrapper">
        <div class="container lg">
            <div class="stockist-content">
                <div class="countries columns">
                    @foreach($stockist_countries as $country)
                    <div class="country">
                        <h3>{{$country->name}}</h3>
                        <div class="stockists">
                            @foreach($country->stockist()->get() as $stockist)
                            <a href="{{$stockist->link}}">{{$stockist->text}}</a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.footerphone')
@endsection
	
@section('script')
@endsection