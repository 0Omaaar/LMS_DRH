@extends('admin.base')

@section('content')
    <div id="toaster"></div>

    <div class="card">
        <div class="card-header">
            {{-- <h1 class="fw-bolder text text-center">Bienvenue a votre espace admin</h1> --}}
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2>{{ $formations->count() }}</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('admin.formations') }}">Voir Plus</a>
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
                        <h2>{{ $familles->count() }}</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('admin.familles.index') }}">Voir Plus</a>
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
                        <h2>{{ $sousfamilles->count() }}</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('admin.sousfamilles.index') }}">Voir Plus</a>
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
                        <h2>{{ $reclamations->count() }}</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('admin.reclamations.index') }}">Voir Plus</a>
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
                        <h2>{{ $contacts->count() }}</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('admin.contacts.index') }}">Voir Plus</a>
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
            <div class="col-xl-4 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2>{{ $demandes->count() }}</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('admin.demandes.index') }}">Voir Plus</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Nombre de demandes de formations</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-9"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card card-default card-mini">
                    <div class="card-header">
                        <h2>{{ $evenements->count() }}</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('admin.evenements.index') }}">Voir Plus</a>
                            </div>
                        </div>
                        <div class="sub-title">
                            <span class="mr-1">Nombre d'evenements</span>
                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-wrapper">
                            <div>
                                <div id="spline-area-99"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div>
            <div class="card card-default">
                <div class="card-header">
                    <h2>Liste des formations les plus vues</h2>
                </div>
                <div class="card-body">
                    <div class="card-group">
                        @foreach ($topformations->take(3) as $topformation)
                        <div class="card m-2">
                            <img class="card-img-top" src="{{asset('img/imgann/'.$topformation->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{$topformation->titre}}</h5>
                                <p class="card-text pb-4">{{$topformation->objectif}}</p>
                                <p class="card-text">
                                    <span>Publié le : {{ \Carbon\Carbon::parse($topformation->created_at)->format('d-m-Y') }}</span>
                                    <i class="mdi mdi-eye ml-8"></i> {{$topformation->vues}}
                                </p>
                            </div>
                        </div>  
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
