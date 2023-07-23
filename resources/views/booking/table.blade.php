@section ('content')
@include ('sweetalert::alert')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-5 pb-3">
                <h6 class="text-white text-capitalize ps-3">Booking Management</h6>
                
              </div>

            <br>

            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Car Detail</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Booking Detail</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                    @foreach ($booking as $s)
                    <!--User Detail-->
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$s -> user -> name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$s -> user -> phoneNo}}</p>
                            <p class="text-xs text-secondary mb-0">{{$s -> user -> email}}</p>
                          </div>
                        </div>
                      </td>

                    <!--Car Detail-->
                      <td>
                        <h6 class="mb-0 text-sm">{{$s -> car -> model}}</h6>
                        <p class="text-xs text-secondary mb-0">{{$s -> car -> plateNo}}</p>
                      </td>

                    <!--Booking Detail-->
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm"> {{$s -> location}} </h6>
                        <p class="text-xs text-secondary mb-0">{{$s -> datePickup}} </p>
                        <p class="text-xs text-secondary mb-0">{{$s -> dateReturn}}</p>
                      </td>

                    <!--Creted At-->
                      <td class="align-middle text-center text-sm">
                        <p class="mb-0 text-sm"> {{$s -> created_at}}</p>
                      </td>
                     
                    <!--Action Button-->
                      <td class="align-middle">
                        <form action="{{ route('booking.destroy',$s->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('booking.show',$s->id) }}">Show</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
        <p>Total Booking = {{$booking -> count()}}</p>
      </div>

@endsection