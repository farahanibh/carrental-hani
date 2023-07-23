@extends('layouts.template')
@section('content')

<!-- general form elements disabled -->
<div class="card card-warning">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
    <h3 class="text-white text-capitalize ps-3">View Car ( {{$car -> plateNo}} )</h3>
</div>
<br>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-">
            <!-- general form elements -->

                  <!-- Plate Number -->
                  <div class="form-group">
                    <h5>Plate Number</h5>
                    <label for="plateNumber"></label>
                    {{$car -> plateNo}}
                  </div>
                  
                  <br>

                  <!-- Model -->
                  <div class="form-group">
                    <h5>Model</h5>
                    <label for="model"></label>
                    {{$car -> model}}
                  </div>

                  <br>

                  <!-- Price -->
                  <div class="form-group">
                    <h5>Price</h5>
                    <label for="pricePerDay"></label>
                    RM {{$car -> pricePerDay}}
                  </div>

                  <br>

                </div>
                <!-- /.card-body -->
                

                <div class="card-footer">
                  <a class="btn btn-primary" href="javascript:history.go(-1)"> Back </a> 
                </div>
            </div>
            <!-- /.card -->


@endsection
