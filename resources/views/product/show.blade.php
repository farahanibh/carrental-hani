@extends('layouts.template')
@section('content')

<!-- general form elements disabled -->
<div class="card card-warning">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
    <h3 class="text-white text-capitalize ps-3">Payment</h3>
</div>
<br>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> JCR.
                    <small class="float-right"></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, JCR.</strong><br>
                    Kampung Seri Mendapat<br>
                    77300 Merlimau, Melaka <br>
                    Phone: (011) 123-5432<br>
                    Email: jcr@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{auth()->user()->name}}</strong><br>
                    Phone: {{auth()->user()->phoneNo}}<br>
                    Email: {{auth()->user()->email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice # {{$product -> id}}</b><br>
                  <br>
                  <b>Date: </b> {{$product -> created_at}} <br> 
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Model</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Location</th>
                      <th>Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>{{$product -> car['model']}} <br> {{$product -> car['plateNo']}}</td>
                      <td>{{$product -> datePickup}}</td>
                      <td>{{$product -> dateReturn}}</td>
                      <td>{{$product -> location}}</td>
                      <td> RM
                        <?php
                            $total = $product -> car['pricePerDay'] * $product['duration'];
                            echo $total;
                        ?>
                      </td>

                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:
                    <br> Cash On Delivery
                  </p>
                
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Thank you for using our service! <br> Please show this invoice to pay.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due {{$product -> dateReturn}}</p>

                  <div class="table-responsive">
                    <table class="table">

                      <tr>
                        <th style="width:50%">Price:</th>
                        <td> RM 
                          {{$product -> car['pricePerDay']}}
                        </td>
                      </tr>

                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td> Discount 10% <br> RM
                        <?php
                            if ($product -> duration >= 3){
                              $total = ($product -> car['pricePerDay'] * $product['duration'])*0.9;
                              echo $total;
                            }
                            else {
                              $total = $product -> car['pricePerDay'] * $product['duration'];
                            echo $total;
                            }
                        ?>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection