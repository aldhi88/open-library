@extends('component.layout.auth',['webTitle' => 'Form Register'])

@section('content')
    
    <div class="text-center">
        <div>
            <a href="index.html" class="logo"><img src="{{ asset('assets/images/logo-dark.png') }}" height="20" alt="logo"></a>
        </div>

        <h4 class="font-size-18 mt-4">Welcome Back !</h4>
        <p class="text-muted">Register</p>
    </div>

    <div class="p-2 mt-5">
        <form class="form-horizontal" action="index.html">

            <div class="form-group auth-form-group-custom mb-4">
                <i class="ri-user-2-line auti-custom-input-icon"></i>
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>

            <div class="form-group auth-form-group-custom mb-4">
                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                <label for="userpassword">Password</label>
                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember me</label>
            </div>

            <div class="mt-4 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
            </div>

            <div class="mt-4 text-center">
                <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
            </div>
        </form>
    </div>

    <div class="mt-5 text-center">
        <p>Don't have an account ? <a href="auth-register.html" class="font-weight-medium text-primary"> Register </a> </p>
        <p>© 2020 Nazox. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
    </div>

@endsection