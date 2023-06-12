<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>OpenFormations</title>
    <meta name="theme-name" content="mono" />
    <!-- GOOGLE FONTS -->
    <link href="{{ asset('admin/https://fonts.googleapis.com/css?family=Karla:400,700|Roboto') }}" rel="stylesheet">
    <link href="{{ asset('admin/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('admin/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />

    <link href="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link href="{{ asset('admin/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />

    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{ asset('admin/css/style.css') }}" />

    <!-- FAVICON -->
    <link href="{{ asset('admin/images/favicon.png') }}" rel="shortcut icon" />

    <script src="{{ asset('admin/plugins/nprogress/nprogress.js') }}"></script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>


    {{-- Wrapper --}}
    <div class="wrapper">
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="">
                        <span class="brand-name">OpenFormations</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-left" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">

                        <li class="active">
                            <a class="sidenav-item-link" href="">
                                <i class="mdi mdi-briefcase-account-outline"></i>
                                <span class="nav-text">Tableau de bord</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidenav-item-link">
                                <i class="mdi mdi-chart-line"></i>
                                <span class="nav-text">Analytics Dashboard</span>
                            </a>
                        </li>

                        <li class="section-title">
                            Apps
                        </li>

                        <li class="section-title">
                            UI Elements
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="{{ asset('admin/javascript:void(0)') }}"
                                data-toggle="collapse" data-target="#formations" aria-expanded="false"
                                aria-controls="formations">
                                <i class="mdi mdi-folder-outline"></i>
                                <span class="nav-text">Formations</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="formations" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{route('admin.formations')}}">
                                            <span class="nav-text">Liste des formations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">dd</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="{{ asset('admin/javascript:void(0)') }}"
                                data-toggle="collapse" data-target="#familles" aria-expanded="false"
                                aria-controls="familles">
                                <i class="mdi mdi-folder-outline"></i>
                                <span class="nav-text">Familles</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="familles" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{route('admin.familles.index')}}">
                                            <span class="nav-text">Liste des familles</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">dd</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="{{ asset('admin/javascript:void(0)') }}"
                                data-toggle="collapse" data-target="#sousfamilles" aria-expanded="false"
                                aria-controls="sousfamilles">
                                <i class="mdi mdi-folder-outline"></i>
                                <span class="nav-text">Sous Familles</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="sousfamilles" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{route('admin.sousfamilles.index')}}">
                                            <span class="nav-text">Liste des sous familles</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">Ajouter une sous famille</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="{{ asset('admin/javascript:void(0)') }}"
                                data-toggle="collapse" data-target="#messagerie" aria-expanded="false"
                                aria-controls="messagerie">
                                <i class="mdi mdi-folder-outline"></i>
                                <span class="nav-text">Messagerie</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="messagerie" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">Réclamations</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="section-title">
                            Pages
                        </li>

                    </ul>
                </div>
            </div>
        </aside>
        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header" id="header">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <span class="page-title">dashboard</span>
                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="d-none d-lg-inline-block">Admin</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-footer">
                                        <a class="dropdown-link-item" href="{{ route('admin.logout') }}"> <i
                                                class="mdi mdi-logout"></i> Se deconnecter
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>