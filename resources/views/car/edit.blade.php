@extends('layouts.template')
@section('content')

<!-- general form elements disabled -->
<div class="card card-warning">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
    <h3 class="text-white text-capitalize ps-3"> Edit Car ( {{$car -> plateNo}} )</h3>
</div>
<br>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-">
            <!-- general form elements -->

              <!-- form start -->
              <form action="{{route('car.update', $car->id)}}" class="text-start" method="POST">
                    @csrf
                    @method('PUT')

                  <!-- Car ID -->
                  <input type="hidden" name="id" value="{{$car -> id}}">

                  <!-- Plate Number -->
                  <div class="form-group">
                    <h5>Plate Number</h5>
                    <label for="plateNumber"></label>
                    <input type="text" class="form-control" name="plateNo" id="plateNo" value="{{$car -> plateNo}}" placeholder="WYH 1921">
                  </div>
                  
                  <br>

                  <!-- Model -->
                  <div class="form-group">
                    <h5>Model</h5>
                    <label for="model"></label>
                    <input type="text" class="form-control" name="model" id="model" value="{{$car -> model}}" placeholder="Perodua Bezza">
                  </div>

                  <br>

                  <!-- Price -->
                  <div class="form-group">
                    <h5>Price</h5>
                    <label for="pricePerDay"></label>
                    <input type="decimal" min="1" class="form-control" name="pricePerDay" id="pricePerDay" value="{{$car -> pricePerDay}}" placeholder="100.00">
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