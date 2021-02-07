@extends('layouts.phone')
@section('title')
Shipping & Return
@endsection
@section('content')
@include('components.headerphone2')
<section>
    <div class="shipping-wrapper">
        <div class="container lg">
            <div class="shipping-content">
                <h1>Shipping & Return</h1>
                @php echo $shipping->text; @endphp
            </div>
        </div>
    </div>
</section>
@include('components.footerphone')
@endsection
	
@section('script')
@endsection