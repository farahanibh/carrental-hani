@extends('layouts.template')
@section('content')

<!-- general form elements disabled -->
<div class="card card-warning">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
    <h3 class="text-white text-capitalize ps-3">View Booking <p> Name : {{$booking -> user -> name}} </p></h3>
</div>
<br>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-">
            <!-- general form elements -->

                  <!-- User -->
                  <div class="form-group">
                    <h5>Customer Detail</h5>
                    <p><b>Name:</b> {{$booking -> user -> name}} </p> 
                    <p><b>Phone Number:</b> {{$booking -> user -> phoneNo}} </p> 
                    <p><b>Email:</b> {{$booking -> user -> email}} </p> 
                  </div>
                  
                  <br>

                  <!-- Car -->
                  <div class="form-group">
                    <h5>Car Detail</h5>
                    <p><b>Car Model:</b> {{$booking -> car-> model}} </p> 
                    <p><b>Plate Number:</b> {{$booking -> car-> plateNo}} </p> 
                    <p><b>Price: RM</b> {{$booking -> car-> pricePerDay}} </p> 
                    
                  </div>

                  <br>

                  <!-- Booking -->
                  <div class="form-group">
                    <h5>Booking Detail</h5>
                    <p><b>Date Pickup:</b> {{$booking -> datePickup}} </p> 
                    <p><b>Date Return:</b> {{$booking -> dateReturn}} </p> 
                    <p><b>Location:</b> {{$booking -> location}} </p> 
                    
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-primary" href="javascript:history.go(-1)"> Back </a> 
                </div>
            </div>
            <!-- /.card -->
@endsection
