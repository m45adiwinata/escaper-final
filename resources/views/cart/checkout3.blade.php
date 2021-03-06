@extends('layouts.phone')
@section('title')
Checkout
@endsection
@section('content')
@include('components.headerphone2')
<div class="container-lg">
    <div class="checkout-wrapper">
        <div class="cart-top">
            <a class="shopping-carts" href="/cart">Shopping Carts</a>
            <p>></p>
            <a class="checkout-detail" href="/cart/checkout">Checkout Detail</a>
            <p>></p>
            <p class="order-complete">Order Complete</p>
        </div>
        <div class="checkout-option">
            <p>Returning customer? <a href="#" id="showlogin"> Click here to login</a></p>
            <div class="login">
                <p>If you have shopped with us before, please enter your detail below. If you are a new customer, please proceed to the Billing section.</p>
                <form action="/cart/checkout/login" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="username"><b>Username or email *</b></label>
                            <input type="email" class="form-control" name="username" id="username" placeholder="" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="password"><b>Password *</b></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="" type="checkbox" value="" id="checkRemember" name="checkRemember">
                        <label class="" for="checkRemember">Remember me</label>
                    </div>
                    <button class="btn">LOGIN</button>
                </form>
            </div>
            <p>Have a coupon? <a href="#" id="showcoupon">Click here to enter your code</a></p>
            <div class="coupon">
                <p>If you have a coupon code, please apply it below.</p>
                <div class="form-row">
                    <div class="col-md-8">
                        <input class="form-control" type="text" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                        <button class="btn">APPLY COUPON</button>
                    </div>                   
                </div>              
            </div>
        </div>
        <form action="/cart/place-order" method="POST" id="main-checkout-form">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="checkout-info">
                        <p><b>BILLING & SHIPPING</b></p>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFirstName"><b>First Name <span>*</span></b></label>
                                <input type="text" class="form-control" name="firstName" id="inputFirstName" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLastName"><b>Last Name (optional)</b></label>
                                <input type="text" class="form-control" name="lastName" id="inputLastName" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCompany"><b>Company/Organization (optional)</b></label>
                            <input type="text" class="form-control" name="company" id="inputCompany" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="selectCountry"><b>Country <span>*</span></b></label>
                            <select class="form-control" id="selectCountry" name="country"><option value="" selected="selected" style="border-radius:0px;" disabled></option></select>
                        </div>
                        <div class="form-group">
                            <label for="selectCountry"><b>State/Province <span>*</span></b></label>
                            <select class="form-control" id="selectState" name="state"><option value="" selected="selected" disabled></option></select>
                        </div>
                        <div class="form-group" style="display:none;" id="inputCitySelect">
                            <label for="selectCity"><b>City *</b></label>
                            <select class="form-control" id="selectCity" name="city"><option value="" selected="selected" disabled></option></select>
                        </div>
                        <div class="form-group" id="inputCityText">
                            <label for="inputCity"><b>City *</b></label>
                            <input type="text" class="form-control" name="citytext" id="inputCity" placeholder="">
                        </div>
                        <div class="form-group" style="display:none;" id="inputKec">
                            <label for="selectKec"><b>Kecamatan *</b></label>
                            <select class="form-control" id="selectKec" name="kecamatan"><option value="" selected="selected" disabled></option></select>
                        </div>
                        <div class="form-group" style="display:none;" id="inputKel">
                            <label for="selectKel"><b>Kelurahan *</b></label>
                            <select class="form-control" id="selectKel" name="kelurahan"><option value="" selected="selected" disabled></option></select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress"><b>Address <span>*</span></b></label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="address">
                        </div>
                        <div class="form-group">
                            <label for="inputZipCode"><b>Zip Code (optional)</b></label>
                            <input type="text" class="form-control" id="inputZipCode" placeholder="" name="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="inputPhone"><b>Phone <span>*</span></b></label>
                            <input type="text" class="form-control" id="inputPhone" placeholder="" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail"><b>Email address <span>*</span></b></label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="" name="email">
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="subscribe" id="checkSubscribe" name="checkSubscribe" checked>
                            <label class="form-check-label" for="checkSubscribe">
                                <b>Subscribe to our newsletter</b>
                            </label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="createAcc" id="checkCreateAcc" name="checkCreateAcc">
                            <label class="form-check-label" for="checkCreateAcc">
                                Create an account?
                            </label>
                        </div>
                        <div class="form-group" id="create-password" style="display:none;">
                            <label for="inputNewaPass"><b>Create your password <span>*</span></b></label>
                            <input type="password" class="form-control" name="new_password" id="inputNewaPass">
                        </div>
                        <p class="mt-3"><b>ADDITIONAL INFORMATION</b></p>
                        <div class="form-group">
                            <label for="inputNotes"><b>Order notes (optional)</b></label>
                            <textarea class="form-control" id="inputNotes" rows="4" name="notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </div>
                        <input type="hidden" id="h-grandtotal" value="0">
                        <input type="hidden" name="discount" id="h-discount" value="0">
                        <input type="hidden" name="shipping" id="h-shipping" value="0">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="checkout-order">
                        <p><b>YOUR ORDER</b></p>
                        <table class="table">
                            <tr>
                                <th class="text-left">PRODUCT</th>
                                <th class="text-right">SUBTOTAL</th>
                            </tr>
                            @php $subtotal = 0; @endphp
                            @foreach($carts as $cart)
                            <tr>
                                <td class="text-left">{{$cart->product()->first()->name}} <b>x {{$cart->amount}}</b></td>
                                <td class="text-right">
                                    <b>
                                        @php $subtotal+= $cart->total; @endphp
                                                {{($_COOKIE['currency'] == 'IDR') ? 'Rp '.number_format($cart->total, 0, ',', '.') : '$ '.number_format($cart->total, 2, '.', ',')}}
                                    </b>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="text-left"><b>Subtotal</b></td>
                                <td class="text-right">
                                    <b>
                                        {{($_COOKIE['currency'] == 'IDR') ? 'Rp '.number_format($subtotal, 0, ',', '.') : '$ '.number_format($subtotal, 2, '.', ',')}}
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left"><b>Discount</b></td>
                                <td class="text-right">
                                    <b id="discount-val">
                                        {{$_COOKIE['currency'] == 'IDR' ? 'Rp 0' : '$ 0'}}
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left"><b>Shipping{{$_COOKIE['currency'] == 'IDR' ? '' : ' (flat rate)'}}</b></td>
                                <td class="text-right">
                                    <b>
                                        @php 
                                        if ($_COOKIE['currency'] == 'USD' && $subtotal >= 150) {
                                            $shipping = 0; 
                                            echo('FREE SHIPPING');
                                        }
                                        else if ($_COOKIE['currency'] == 'USD') {
                                            $shipping = 10;
                                            echo('$ '.number_format($shipping, 2, '.', ','));
                                        }
                                        else {
                                            $shipping = 0;
                                            echo('FREE SHIPPING');
                                        }
                                        @endphp
                                    </b>
                                </td>
                            </tr>
                            <tr class="total">
                                <td class="text-left"><b>Total</b></td>
                                <td class="text-right">
                                    <b id="grandtotal-val">
                                        @php $grandtotal = $subtotal + $shipping; @endphp
                                        {{($_COOKIE['currency'] == 'IDR') ? 'Rp '.number_format($grandtotal, 0, ',', '.') : '$ '.number_format($grandtotal, 2, '.', ',')}}
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radTrfBank" id="radTrfBank" value="option1" checked>
                                        <label class="form-check-label" for="radTrfBank">
                                            <b>Bank Transfer BCA : 6115373947 (I Made Bayu Dharma Wibawa)</b>
                                        </label>
                                        <br>
                                        Make your payment directly into our bank account. Please use your Purchase Code as the payment reference to info.escaper@gmail.com. Your order will not be shipped until the funds have cleared in our account.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radPayPal" id="radPayPal" value="option2">
                                        <label class="form-check-label" for="radPayPal">
                                            <b>PayPal</b>
                                            <img src="{{asset('images/paypal icon.png')}}" alt="PayPal Icon" style="width:84px;height:37px;">
                                        </label>
                                        <br>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.
                                        <div id="smart-button-container" style="display:none;">
                                            <div style="text-align: center;">
                                                <div id="paypal-button-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="place-order">
                                <td colspan="2"><button type="submit" class="btn " id="submitbtn">PLACE ORDER</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@include('components.footerphone')
@endsection
@section('script')
<script src="https://www.paypal.com/sdk/js?client-id=AS4RC9ACUJEUfAZHnPyiq4chJcOGzclOslQX9SBaFeHi9stA5zBOnshRWiJiZHPt3VvZ8T9Q7SNWLBjg" data-sdk-integration-source="button-factory"></script>
<script>
    // var req = unirest("GET", "https://www.universal-tutorial.com/api/countries/");
    // req.headers({
    //     "Accept": "application/json",
    //     "api-token": "brooWpJXcwCVMd_VcEmwf-9V7PiwSJxo_M81ppmVYgFPckBiJj3xGRzA4bIIDxlQuhI",
    //     "user-email": "m45adiwinata@gmail.com"
    // });
    var provinsis = [];
    var kabupatens = [];
    var kecamatans = [];
    var auth_token;
    
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'horizontal',
          label: 'paypal',
          tagline: false,
        },

        createOrder: function(data, actions) {
            var bill = $('#h-grandtotal').val();
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":bill}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            $('#main-checkout-form').submit();
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
    function formatRupiah(angka, prefix){
        var number_string = angka.toString(),
        split   		= number_string.split('.'),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        // return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
        return prefix + ' ' + rupiah
    }

    function formatDolar(angka, prefix){
        var number_string = angka.toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? ',' : '';
            rupiah += separator + ribuan.join('.');
        }
        rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
        // return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
        return prefix + ' ' + rupiah
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    $(document).ready(function() {
        $('#h-grandtotal').val({!! $grandtotal !!});
        $.ajax({
            url:'https://www.universal-tutorial.com/api/getaccesstoken', 
            type: "GET",
            dataType: 'json',
            headers:
            {
                "Accept": "application/json",
                "api-token": "brooWpJXcwCVMd_VcEmwf-9V7PiwSJxo_M81ppmVYgFPckBiJj3xGRzA4bIIDxlQuhI",
                "user-email": "m45adiwinata@gmail.com"
            },
            contentType: 'application/json; charset=utf-8',
            success: function(data) {
                // $('#inputCompany').val(data.auth_token);
                auth_token = data.auth_token;
                $.ajax({
                    url: "https://www.universal-tutorial.com/api/countries/",
                    type: "GET",
                    dataType: 'json',
                    headers: {
                        "Authorization": "Bearer " + auth_token,
                        "Accept": "application/json"
                    },
                    contentType: 'application/json; charset=utf-8',
                    success: function(result) { 
                        result.forEach(country => {
                            $('#selectCountry').append('<option value="'+country.country_name+'">'+country.country_name+'</option>');
                        });
                    },
                    error: function (error) {   console.log(error); }
                });
            },
            error: function (error) {   console.log(error); }
        });
        $('#h-shipping').val({!! $shipping !!});
        // $.get('https://restcountries.eu/rest/v2/all', function(countries) {
        //     countries.forEach(country => {
        //         $('#selectCountry').append('<option value="'+country.name+'">'+country.name+'</option>');
        //     });
        // });
        $('#selectCountry').select2();
        $('#selectState').select2();
        $('#selectCountry').change(function() {
            if($(this).val() == 'Indonesia') {
                $('#inputCityText').css('display', 'none');
                $('#inputCitySelect').css('display', 'block');
                $('#inputKec').css('display', 'block');
                $('#inputKel').css('display', 'block');
                $('#selectCity').select2();
                $('#selectKec').select2();
                $('#selectKel').select2();
                $('#selectState').empty().append('<option value="" selected="selected" disabled></option>');
                $.get("https://dev.farizdotid.com/api/daerahindonesia/provinsi", function(data) {
                    provinsis = data.provinsi;
                    data.provinsi.forEach(d => {
                        $('#selectState').append('<option value="'+d.nama+'">'+d.nama+'</option>');
                    });
                });
            }
            else {
                $('#inputCityText').css('display', 'block');
                $('#inputCitySelect').css('display', 'none');
                $('#inputKec').css('display', 'none');
                $('#inputKel').css('display', 'none');
                $('#selectState').empty().append('<option value="" selected="selected" disabled></option>');
                var country = $(this).select2('data')[0].id;
                $.ajax({
                    url: "https://www.universal-tutorial.com/api/states/"+country,
                    type: "GET",
                    dataType: 'json',
                    headers: {
                        "Authorization": "Bearer " + auth_token,
                        "Accept": "application/json"
                    },
                    contentType: 'application/json; charset=utf-8',
                    success: function(result) { 
                        result.forEach(state => {
                            $('#selectState').append('<option value="'+state.state_name+'">'+state.state_name+'</option>');
                        });
                    },
                    error: function (error) {   console.log(error); }
                });
            }
        });
        $('#selectState').change(function() {
            if($('#selectCountry').val() == 'Indonesia') {
                $('#selectCity').empty().append('<option value="" selected="selected" disabled></option>');
                var idprovinsi = -1;
                provinsis.forEach(p => {
                    if(p.nama == $('#selectState').val()) {
                        idprovinsi = p.id;
                    }
                });
                $.get("https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" + idprovinsi, function(data) {
                    kabupatens = data.kota_kabupaten;
                    data.kota_kabupaten.forEach(k => {
                        $('#selectCity').append('<option value="'+k.nama+'">'+k.nama+'</option>');
                    });
                });
            }
            // else {
            //     $('#selectCity').empty().append('<option value="" selected="selected" disabled></option>');
            //     var state = $(this).select2('data')[0].id;
            //     $.ajax({
            //         url: "https://www.universal-tutorial.com/api/cities/"+state,
            //         type: "GET",
            //         dataType: 'json',
            //         headers: {
            //             "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InVzZXJfZW1haWwiOiJtNDVhZGl3aW5hdGFAZ21haWwuY29tIiwiYXBpX3Rva2VuIjoiYnJvb1dwSlhjd0NWTWRfVmNFbXdmLTlWN1Bpd1NKeG9fTTgxcHBtVllnRlBja0JpSmozeEdSekE0YklJRHhsUXVoSSJ9LCJleHAiOjE2MTEwMjE2MTl9.DbcJeMkD5U9QIdEeVJCNKXjOIS7nJTHeuAG7hoxxj5g",
            //             "Accept": "application/json"
            //         },
            //         contentType: 'application/json; charset=utf-8',
            //         success: function(result) { 
            //             result.forEach(city => {
            //                 $('#selectCity').append('<option value="'+city.city_name+'">'+city.city_name+'</option>');
            //             });
            //         },
            //         error: function (error) {   console.log(error); }
            //     });
            // }
        });
        $('#selectCity').change(function() {
            if($('#selectCountry').val() == 'Indonesia') {
                $('#selectKec').empty().append('<option value="" selected="selected" disabled></option>');
                var idkab = -1;
                kabupatens.forEach(k => {
                    if(k.nama == $('#selectCity').val()) {
                        idkab = k.id;
                    }
                });
                $.get("https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=" + idkab, function(data) {
                    kecamatans = data.kecamatan;
                    data.kecamatan.forEach(k => {
                        $('#selectKec').append('<option value="'+k.nama+'">'+k.nama+'</option>');
                    });
                });
            }
        });
        $('#selectKec').change(function() {
            if($('#selectCountry').val() == 'Indonesia') {
                $('#selectKel').empty().append('<option value="" selected="selected" disabled></option>');
                var idkec = -1;
                kecamatans.forEach(k => {
                    if(k.nama == $('#selectKec').val()) {
                        idkec = k.id;
                    }
                });
                $.get("https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=" + idkec, function(data) {
                    data.kelurahan.forEach(k => {
                        $('#selectKel').append('<option value="'+k.nama+'">'+k.nama+'</option>');
                    });
                });
            }
        });
        $('#radPayPal').change(function() {
            $('#radTrfBank').prop("checked", false);
            $('#smart-button-container').css('display', 'block');
            $('#submitbtn').css('display', 'none');
        });
        $('#radTrfBank').change(function() {
            $('#radPayPal').prop("checked", false);
            $('#smart-button-container').css('display', 'none');
            $('#submitbtn').css('display', 'block');
        });
        $('#showlogin').click(function() {
            if($('.login').css('display') == 'none') {
                $('.login').css('display', 'block');
            }
            else {
                $('.login').css('display', 'none');
            }
        });
        $('#showcoupon').click(function() {
            if($('.coupon').css('display') == 'none') {
                $('.coupon').css('display', 'block');
            }
            else {
                $('.coupon').css('display', 'none');
            }
        });
        $('#checkCreateAcc').change(function() {
            if(this.checked) {
                if($('#inputEmail').val()) {
                    $('#create-password').css('display', 'block');
                    $.get('/cart/check-discount/'+$('#inputEmail').val(), function(count) {
                        console.log(count);
                        if(count == 0) {
                            // $.ajax({
                            //     type: "POST",
                            //     url: '/cart/update-temp-cart',
                            //     success
                            // })
                            $.post('/cart/update-temp-cart', {
                                '_token' : $('meta[name=csrf-token]').attr('content'),
                                discount: 1
                            })
                            .done(function() {
                                subtotal = {!! $subtotal !!};
                                grandtotal = {!! $grandtotal !!};
                                discount = subtotal / 10;
                                $('#h-discount').val(discount);
                                currency = getCookie('currency');
                                if(currency == 'IDR') {
                                    prefix = 'Rp';
                                    discount_str = formatRupiah(discount, prefix);
                                    grandtotal -= discount;
                                    grandtotal_str = formatRupiah(grandtotal, prefix);
                                }
                                else {
                                    prefix = '$';
                                    discount_str = formatRupiah(discount, prefix);
                                    grandtotal -= discount;
                                    grandtotal_str = formatRupiah(grandtotal, prefix);
                                }
                                $('#discount-val').html(discount_str);
                                $('#grandtotal-val').html(grandtotal_str);
                                $('#h-grandtotal').val(grandtotal);
                            });
                        }
                    });
                }
                else {
                    $('#checkCreateAcc').prop('checked', false);
                    $('#inputEmail').focus();
                }
            }
            else {
                $.post('/cart/update-temp-cart', {
                    '_token' : $('meta[name=csrf-token]').attr('content'),
                    discount: 0
                })
                .done(function() {
                    $('#create-password').css('display', 'none');
                    currency = getCookie('currency');
                    if(currency == 'IDR') {
                        prefix = 'Rp';
                    }
                    else {
                        prefix = '$';
                    }
                    $('#discount-val').html(prefix + ' 0');
                    $('#h-discount').val(0);
                    $('#grandtotal-val').html(prefix + ' {!! $grandtotal !!}');
                    $('#h-grandtotal').val({!! $grandtotal !!});
                });
            }
        });
    });
</script>
@endsection