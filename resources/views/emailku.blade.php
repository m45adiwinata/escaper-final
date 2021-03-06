<img src="{{$message->embed($logo)}}" alt="ESCAPER'S LOGO" style="width:887px; height:133px; display:block; margin-left:auto; margin-right:auto;">
<h2 style="text-align:center;">Thank you {{ $first_name }} {{$last_name}},<br>your order has been received.</h2>
<h4 style="text-align:center;">Purchase Code : {{ $guest_code }}/{{$id}}</h4>
<br>
<h4>Customer Info</h4>
<hr>
{{ $first_name }} {{$last_name}}<br>
{{ $address }}, {{$kelurahan ? $kelurahan.', ' : ''}} {{$kecamatan ? $kecamatan.', ' : ''}} {{ $city }}, {{ $zipcode }}<br>
{{ $country }}<br>
{{ $phone }}
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th colspan="2">Product</th>
            <th style="padding-left:30px;">Quantity</th>
            <th style="padding-left:100px;">Price</th>
        </tr>
    </thead>
    <tbody>
    @foreach($carts as $cart)
        <tr>
            <td style=""><img src="{{$message->embed($cart['image'])}}" alt="{{$cart['name']}}" style="width:240px; height:240px;"></td>
            <td>{{$cart['name']}} - {{$cart['size']}}</td>
            <td style="text-align:center;">{{$cart['qty']}}</td>
            <td style="text-align:center;">{{$currency == 'IDR' ? 'Rp '.number_format($cart['price'],0,',','.') : '$ '.number_format($cart['price'],2,'.',',')}}</td>
        </tr>
    @endforeach
        <tr>
            <td></td>
            <td>
                Payment<br>
                Subtotal<br>
                {{ $discount == 0 ? '' : 'Discount<br>' }}
                Shipping<br>
                Total<br>
            </td>
            <td>
                :<br>
                :<br>
                {{ $discount == 0 ? '' : ':<br>' }}
                :<br>
                :<br>
            </td>
            <td>
                {{ $payment }}<br>
                {{$currency == 'IDR' ? 'Rp '.number_format($sub_total, 2, ',', '.') : '$ '.number_format($sub_total, 2, '.', ',')}}<br>
                @if($discount > 0)
                {{$currency == 'IDR' ? 'Rp '.number_format($discount, 2, ',', '.').'<br>' : '$ '.number_format($discount, 2, '.', ',').'<br>'}}
                @endif
                {{$currency == 'IDR' ? 'FREE SHIPPING' : '$ '.number_format($shipping, 2, '.', ',')}}<br>
                {{$currency == 'IDR' ? 'Rp ' : '$ '}}{{ number_format($grand_total, 2, '.', ',') }}<br>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<br>
<a class="btn" href="http://escaper-store.com/cart/upload-payment/{{$id}}">Payment Confirmation</a>
<br>
<br>
<br>
<p>Thanks for purchasing our product. Consider to  subscribe and stay tune with our project.</p>
<p>Best Regard</p>
<p><a href="http://escaper-store.com">ESCAPER®</a></p>