@section ('content')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-5 pb-3">
                <h6 class="text-white text-capitalize ps-3">Car Management</h6>
              </div>

            <br><br>

            <!--Add New Car-->
            <div class="pull-right">
                <a class="badge badge-sm bg-gradient-secondary" href="{{ route('car.create') }}"> Add New Car</a>
            </div>

            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plate Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Model</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>

                    @foreach ($car as $s)
                    <!--Plate Number-->
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$s -> plateNo}}</h6>
                            <p class="text-xs text-secondary mb-0"></p>
                          </div>
                        </div>
                      </td>

                    <!--Car Model-->
                      <td>
                        <h6 class="mb-0 text-sm">{{$s -> model}}</h6>
                      </td>

                    <!--Car Price-->
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm"> RM {{$s -> pricePerDay}}</h6>
                      </td>

                    <!--Creted At-->
                      <td class="align-middle text-center text-sm">
                        <p class="mb-0 text-sm"> {{$s -> created_at}}</p>
                      </td>
                     
                    <!--Action Button-->
                      <td class="align-middle">
                        <form action="{{ route('car.destroy',$s->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('car.show',$s->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('car.edit',$s->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>

                  {{$sum += $s -> pricePerDay}}

                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection