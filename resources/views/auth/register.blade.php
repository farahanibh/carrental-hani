@extends('layouts.app') 
@include ('sweetalert::alert')

@section('content') 
<div class="container"> 
    <br><br>
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card"> 
            <div class="card-header" style="background-color: #EF007F; color:white;">
                <b>{{ __('Register') }}</b>
            </div>
 
                <div class="card-body"> 
                    <form method="POST" action="{{ route('register') }}"> 
                        @csrf 
 
                        <div class="form-group row"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> 
 
                            <div class="col-md-6"> 
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 
 
                                @error('name') 
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong> 
                                    </span> 
                                @enderror 
                            </div> 
                        </div> 
 
                        <div class="form-group row"> 
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> 
 
                            <div class="col-md-6"> 
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> 
 
                                @error('email') 
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong> 
                                    </span> 
                                @enderror 
                            </div> 
                        </div> 
 
                        <div class="form-group row"> 
                            <label for="phoneNo" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label> 
 
                            <div class="col-md-6"> 
                                <input id="phoneNo" type="text" class="form-control @error('phoneNo') is-invalid @enderror" name="phoneNo" value="{{ old('phoneNo') }}" required autocomplete="phoneNo" autofocus> 
 
                                @error('phoneNo') 
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong> 
                                    </span> 
                                @enderror 
                            </div> 
                        </div> 
 
                        <div class="form-group row"> 
                            <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('Register as') }}</label> 
 
                            <div class="col-md-6"> 
                                <input type="radio" id="user_type1" name="user_type" value="admin" required autocomplete="user_type" autofocus> 
                                 <label for="user_type1">Administrator</label> 
                                <input
                                type="radio" id="user_type2" name="user_type" value="renter" required autocomplete="user_type" autofocus> 
                                 <label for="user_type2">Renter</label> 
 
                                @error('user_type') 
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong> 
                                    </span> 
                                @enderror 
                            </div> 
                        </div> 
 
                        <div class="form-group row"> 
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> 
 
                            <div class="col-md-6"> 
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> 
 
                                @error('password') 
                                    <span class="invalid-feedback" role="alert"> 
                                        <strong>{{ $message }}</strong> 
                                    </span> 
                                @enderror 
                            </div> 
                        </div> 
 
                        <div class="form-group row"> 
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> 
 
                            <div class="col-md-6"> 
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
                            </div> 
                        </div> 
 
                        <div class="form-group row mb-0"> 
                            <div class="col-md-6 offset-md-4"> 
                                <button type="submit" class="btn btn-dark"> 
                                    {{ __('Register') }} 
                                </button> 
                            </div> 
                        </div> 
                    </form> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection
