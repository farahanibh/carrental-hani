@section('content')

<div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <h2 class="mb-1">List of Cars</h2>
                <p class="text-sm">Jasin Car Rental</p>
              </div>

              <!--Add New Booking-->
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.create') }}"> Book A Car! </a>
            </div>
            <br><br>
              <div class="row">
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="{{asset('admin/assets/img/Cmyvi1.png')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-2 text-sm">PROTON EXORA</p>
                      <a href="javascript:;">
                        <h5>
                          RM120.00
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Manual Transmission <br> Big Category (1-6 Seaters)
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="{{asset('admin/assets/img/Cexora.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-2 text-sm">PROTON EXORA</p>
                      <a href="javascript:;">
                        <h5>
                          RM120.00
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Manual Transmission <br> Big Category (1-6 Seaters)
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="{{asset('admin/assets/img/Caxia.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">PERODUA AXIA</p>
                      <a href="javascript:;">
                        <h5>
                          RM90.00
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Automatic Transmission <br> Small Category (1-4 Seaters)
                      </p>

                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="{{asset('admin/assets/img/Cativa.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">PERODUA ATIVA</p>
                      <a href="javascript:;">
                        <h5>
                            RM140.00
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Automatic Transmission <br> SUV Category (1-5 Seaters)
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>


@endsection