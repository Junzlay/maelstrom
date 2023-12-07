@extends('layouts.layout')
@section('title', 'Shopping Cart')

@section('content')

    {{-- <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Shopping Cart</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        {{-- <script src="Js/requestform.js"></script> --}}
    {{-- </head>

    <body>
        @include('partials._header') --}}
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <div class="requestform">
                        <h5 class="text-center mb-4">CAR SERVICE REQUEST FORM</h5>
                        <form class="form-card" action="{{ route('services.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex">
                                    <label class="form-control-label px-3">CLIENT INFORMATION</label>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3" for="name">Full Name: <span
                                            class="text-danger"> *</span></label>
                                    <input type="text" id="name" name="name" onblur="validate(1)" value="{{ old('name') }}">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3" for="contact">Contact: <span
                                            class="text-danger"> *</span></label>
                                    <input type="text" id="contact" name="contact" onblur="validate(2)" value="{{ old('contact') }}">
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3" for="email">Email Address: <span
                                            class="text-danger"> *</span></label>
                                    <input type="text" id="email" name="email" onblur="validate(3)" value="{{ old('email') }}">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3" for="address">Current Address: <span
                                            class="text-danger"> *</span></label>
                                    <input type="text" id="address" name="address" onblur="validate(4)" value="{{ old('address') }}">
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex">
                                    <label class="form-control-label px-3">VEHICLE INFORMATION</label>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3"for="model">Model of the Car: <span
                                            class="text-danger"> *</span></label>
                                    <input type="text" id="model" name="car_model" placeholder=""
                                        onblur="validate(5)" value="{{ old('car_model') }}">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3" for="yom">Year of Manufacture: <span
                                            class="text-danger"> *</span></label>
                                    <input type="text" id="yom" name="year_manufactured" onblur="validate(6)" value="{{ old('year_manufactured') }}">
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex">
                                    <label class="form-control-label px-3">MAINTENANCE / SERVICE DETAIL</label>
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3" for="service">Service Name: <span
                                            class="text-danger"> *</span></label>
                                    <input type="text" id="service" name="service_name" placeholder=""
                                        onblur="validate(7)" value="{{ old('service_name') }}">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3" for="date">Preferred Date and Time: <span
                                            class="text-danger"> *</span></label>
                                    <input type="date" id="date" name="preferred_date_time" class="is-valid" value="{{ old('preferred_date_time') ? date_format(date_create(old('preferred_date_time')), 'd/m/Y') : '' }}">
                                </div>
                            </div>

                            <div class="row justify-content-between text-left">
                                <div class="form-group col-12 flex-column d-flex">
                                    <label class="form-control-label px-3"for="specialrequest">Special requests and
                                        instructions:<span class="text-danger"> *</span></label>
                                    <input type="text" id="specialrequest" name="special_instructions" placeholder=""
                                        class="@error('special_instructions')
                                            is-invalid
                                        @enderror" value="{{ old('special_instructions') }}">
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-6">
                                    <button type="submit" class="btn-block btn-primary">Submit Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- </body>

    </html> --}}
    {{-- @include('partials._footer') --}}
@endsection
