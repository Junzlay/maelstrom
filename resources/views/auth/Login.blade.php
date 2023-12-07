@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Css/style.css">
    <title>Log In</title>
</head>
<body>
    @include('partials._header')
    <div class="container-fluid Loginpage">
        <div class="logo">
            <img src="img/logo.png" width="150px" height="150px" style="margin-top: 33px;">
            <h1 class="login">Log In</h1>
            <img src="img/car-service.png" width="240px" height="50%">
        </div>

        <div class="welcomeback">
            <h1>Welcome Back!</h1>
            <input type="text " placeholder="Email Address">
            <input type="password"  placeholder= "Password"  >
            <button>Sign In</button>
            <h6>Sign Up</h6>
            <p>Don't have an account yet? <img src="img/ask.png" height="30px" width="30px" style="transform:rotate(30deg);"> </p>
        </div>
    </div>
</body>

</html>
{{-- @include('partials._footer') --}}
@endsection
