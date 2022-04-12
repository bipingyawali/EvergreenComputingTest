@extends('layout.min')
@section('title', 'Login')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-md-12 p-5">
                            <div class="mx-auto mb-5">
                                    <h3 class="d-inline align-middle ml-1 text-logo">Test App</h3>
                            </div>

                            <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                            <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                access admin panel.</p>

                            {!! Form::open(['route'=>'login','method'=> 'POST', 'class' => 'authentication-form']) !!}
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                        </div>
                                        {!! Form::email('email',null,['class' => 'form-control '.($errors->has("email")? "parsley-error":""), 'id' => 'email', 'placeholder' => 'Enter Email']) !!}
                                    </div>
                                    @error('email')
                                        <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $message }}</li></ul>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label class="form-control-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                        </div>
                                        {!! Form::password('password',['class' => 'form-control '.($errors->has("password")? "parsley-error":"") , 'id' => 'password', 'placeholder' => 'Enter your password.']) !!}
                                    </div>
                                    @error('password')
                                    <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $message }}</li></ul>
                                    @enderror
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-primary fw-bold ms-1">Register</a></p>
                </div> <!-- end col -->
            </div>
        </div> <!-- end col -->
    </div>
@endsection
