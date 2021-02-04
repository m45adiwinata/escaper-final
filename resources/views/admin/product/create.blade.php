@extends('admin.layouts.form')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_product">Nama Product</label>
                    <input type="text" class="form-control" id="nama_product" name="name" placeholder="Enter product name" autocomplete="on">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" class="form-control select2" name="product_type_id" style="width: 100%;">
                      @foreach($types as $key=>$type)
                      @if($key==0)
                      <option value="{{($key+1)}}" selected="selected">{{$type->name}}</option>
                      @else
                      <option value="{{($key+1)}}">{{$type->name}}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="desc">Deskripsi</label>
                    <textarea class="form-control" id="desc" rows="3" placeholder="Enter ..." name="desc"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="discount">Diskon</label>
                    <input type="text" class="form-control" id="discount" name="discount" placeholder="Enter product name" autocomplete="on">
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="regular" name="radio1">
                      <label class="form-check-label" for="regular">Reguler</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="percent" name="radio1" checked>
                      <label class="form-check-label" for="percent">Persen</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection