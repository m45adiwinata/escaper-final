@extends('layouts.phone')
@section('title')
Payment Confirmation
@endsection
@section('content')
@include('components.headerphone2')
<div class="upload-wrapper">
	<div class="container-lg">
        <div class="upload-content">
            <p> <b>Payment Confirmation</b></p>
            <form class="form-row" action="/cart/post-upload" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$checkout->id}}">
                <div>
                    <label for="purchase_code">Purchase code *</label>
                    <input type="text" class="form-control" name="purchase_code" id="purchase_code" placeholder="" autocomplete="off">
                </div>
                <div>
                    <label for="username">Bank account name *</label>
                    <input type="text" class="form-control" name="namabank" id="username" placeholder="" autocomplete="off">
                </div>
                <div>
                    <label for="upload">Upload Evidence Of Payment *</label>
                    <input type="file" class="form-control" name="file" id="imgInp" name="file">
                    <img id="preview"></img>
                </div>
                <div>
                    <label for="inputNotes">Message (optional)</label>
                    <textarea class="form-control" id="inputNotes" rows="4" name="message" placeholder=""></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</div>
@include('components.footerphone')
@endsection

@section('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>
@endsection