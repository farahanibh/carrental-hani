@extends('layouts.template')
@section('content')

<!-- general form elements disabled -->
<div class="card card-warning">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
    <h3 class="text-white text-capitalize ps-3">Booking Car</h3>
</div>
<br>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-20">
            <!-- general form elements -->

              <!-- form start -->
              <form action="{{route('product.store')}}" class="text-start" method="POST">
                    @csrf

                <!--User-->
                <input type="hidden" name="user" value="{{$user=Auth::id()}}">

                <!-- Choose Car-->
                <div class="card-body">
                  <div class="form-group">
                    <h5>Car Model</h5>
                    <label class="form-label"></label>
                        <select class="form-control-lg" name="carID">
                            @foreach ($car as $id => $name)
                                <option 
                                    value = "{{$id}}" {{ (isset($product ['carID']) 
                                    && $product['carID'] == $id) ? 
                                    'selected' : '' }} 
                                    > {{$name}} 
                                </option>
                            @endforeach
                        </select>
                  </div>
            
                  <br><br>

                  <!-- Start Date -->
                  <div class="form-group">
                    <h5>Start Date</h5>
                    <label for="datePickup"></label>
                    <input type="date" class="form-control-lg" name="datePickup" id="datePickup" placeholder="Start Date">
                  </div>
                  
                  <br><br>

                  <!-- End Date -->
                  <div class="form-group">
                    <h5>End Date</h5>
                    <label for="dateReturn"></label>
                    <input type="date" class="form-control-lg" name="dateReturn" id="dateReturn" placeholder="End Date">
                  </div>

                  <br><br>

                  <!-- Location -->
                  <div class="form-group">
                    <h5>Location</h5>
                    <label for="location"></label>
                        <select name="location" class="form-control-lg" id="location"> 
                            <option selected="selected" value="UiTM Jasin">UiTM Jasin</option>
                            <option value="Politeknik Merlimau">Politeknik Merlimau</option>
                            <option value="Melaka Sentral">Melaka Sentral</option>
                            <option value="Dataran Pahlawan">Dataran Pahlawan</option>
                        </select>
                  </div>

                  <br><br>

                  <!-- Duration -->
                  <div class="form-group">
                    <h5>Duration</h5>
                    <label for="duration"></label>
                    <input type="number" min="1" class="form-control-lg" name="duration" id="duration" placeholder="Duration">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>

                  <a class="btn btn-primary" href="javascript:history.go(-1)"> Back </a> 
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection