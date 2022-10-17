@extends('master')
@section('content')
    <div class="container mt-2 mb-5 custom-login">
        <div class="row justify-content-center align-items-center h-100 mt-5 mb-5">
            <div class="col-sm-4 col-sm-offset-4 mx-auto mt-3 mb-5">
                <form action="login" method="POST">
                    <h2 class="text-center mb-3"><b>Login</b></h2>
                    <div class="form-group">
                        @csrf
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email')}}" id="exampleInputEmail1" placeholder="Email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                        @error('password')<small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-2 mt-2 ">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="text-center mt-3">
                        <p>Not a Member? <a href="/register">Register</a> </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
