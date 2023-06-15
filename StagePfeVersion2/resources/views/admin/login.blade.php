<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Login</title>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
        <link href="{{ asset('admin/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
        <!-- PLUGINS CSS STYLE -->
        <link href="{{ asset('admin/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
        <!-- MONO CSS -->
        <link id="main-css-href" rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />
        <!-- FAVICON -->
        <link href="{{ asset('admin/images/favicon.png') }}" rel="shortcut icon" />
        <script src="{{ asset('admin/plugins/nprogress/nprogress.js') }}"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="card card-default mb-0">
                        <div class="card-header pb-0">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                            </div>
                        </div>
                        <div class="card-body px-5 pb-5 pt-0">
                            <h4 class="text-dark mb-6 text-center">Se connecter à votre compte</h4>
                            <form action="{{route('login.custom')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" class="form-control input-lg" id="email"
                                            aria-describedby="emailHelp" placeholder="email" name="email">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control input-lg" id="password"
                                            placeholder="Password" name="password">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit"
                                            class="btn btn-primary btn-pill mb-4">S'authentifier</button>
                                        <a href="{{route('index')}}"
                                            class="btn btn-success btn-pill mb-4">Espace Cadre</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
