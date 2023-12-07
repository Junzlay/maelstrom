@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Css/style.css">
    <title>Register</title>
</head>
<body>
    @include('partials._header')
    <div class="container-fluid Registerpage">
        <div class="registerlogo">
            <img src="img/logo.png" width="190px" height="150px" style="margin-top: 33px;">
            <h1 class="login">Register</h1>
            <img src="img/car-service.png" width="240px" height="250px">
        </div>

        <div class="welcomeback">
            <h1>Create Your Account! </h1>
            <input type="text " placeholder="Username">
            <input type="text " placeholder="Email Address">
            <input type="text"  placeholder= "Contact Number " >
            <input type="text"  placeholder= "Current Address" >
            <input type="password"  placeholder= "Password " >
            <input type="password"  placeholder= "Check Password"  >
            <button>Sign Up</button>
            <h6>Sign In</h6>
            <p>Don't have an account yet? <img src="img/ask.png" height="30px" width="30px" style="transform:rotate(30deg);"> </p>
        </div>
    </div>
</body>
</html>
{{-- @include('partials._footer') --}}
@endsection
