@extends('admin.base')

@section('content')
    <div id="toaster"></div>

    <div class="card">
        <div class="card-header">
            <h1 class="fw-bolder text text-center">Bienvenue a votre espace admin</h1>
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2></h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="">Voir Plus</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Nombre de formations</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2></h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="">Voir Plus</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Nombre de familles</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2></h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="">Voir Plus</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Nombre de sous familles</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2></h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="">Voir Plus</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Nombre de réclamations</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2></h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="">Voir Plus</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Nombre de contacts</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-7"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
