<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0-beta.4
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Admin</title>
    <!-- Icons-->
    <link href="{{ asset('vendors/coreui/vendors/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/coreui/vendors/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/coreui/vendors/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('vendors/coreui/css/style.css') }}" rel="stylesheet">
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Login Admin</h1>
                        <p class="text-muted">Login untuk melanjutkan</p>
                        <form action="{{ url('/login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" name="username">

                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                              @if($errors->has('username'))
                                    <p>
                                   
                                        <small id="helpId" class="text-danger">{{ $errors->first('username') }}</small>
                                    </p>
                                @endif
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-4">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap and necessary plugins-->
<script src="{{ asset('vendors/coreui/vendors/js/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/popper.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/pace.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('vendors/coreui/vendors/js/coreui.min.js') }}"></script>
</body>
</html>