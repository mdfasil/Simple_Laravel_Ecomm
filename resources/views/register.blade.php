@extends('master')
@section('content')

<div class="container py-5 h-100 mt-2 mb-5">
    <div class="row justify-content-center align-items-center h-100 mt-1">
        <div class="col-sm-4 col-md-offset-4 mx-auto">
            <form action="register" method="POST">
                @csrf
                <h2>Registration Form</h2>
                <br>
                <div class="form-outline">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}">
                    @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                    @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}">
                    @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-success btn-block btn-lg">Register</button>
                <p class="text-center text-muted mt-3 mb-2">Have already an account? <a href="/login"
                    class="fw-bold text-body mt-2"><u>Login here</u></a></p>

            </form>
        </div>
    </div>

</div>
<br>
<br>
@endsection
