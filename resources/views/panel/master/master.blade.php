<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mixing('/panel/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ mixing('/panel/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/panel/assets/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ mixing('/panel/assets/css/dashboard.css') }}">

    @hasSection('css')
        @yield('css')
    @endif

    <link rel="icon" type="image/png" href="{{ url(asset('panel/assets/images/favicon.png')) }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SISTEMA</title>
</head>

<body>


    <div id="wrapper">

        <div id="sidebar" class="flex-shrink-0 p-3 bg-white border" style="width: 280px;">
            <div class="sidebar-header border-bottom mb-3">
                <div class="sidebar-user">
                    <img class="img-fluid" src="{{ url(asset('panel/assets/images/avatar.jpg')) }}" alt="" title="" />
                    <a href="#" class="btn text-dash-blue fs-4">Ivan Lenon</a>
                </div>
            </div>

            <ul class="list-unstyled ps-0">
                <li class="{{ isActive('admin.home') }} mb-1">
                    <a href="{{ route('home') }}" class="btn btn-dash text-uppercase align-items-center rounded"
                        style="font-weight: 600;">
                        
                        Dashboard
                    </a>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#clientes-collapse" aria-expanded="false">
                        Clientes
                    </button>
                    <div class="collapse" id="clientes-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">Ver Todos</a></li>
                            <li><a href="#" class="link-dark rounded">Empresas</a></li>
                            <li><a href="#" class="link-dark rounded">Time</a></li>
                            <li><a href="#" class="link-dark rounded">Criar Novo</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Dashboard
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">Overview</a></li>
                            <li><a href="#" class="link-dark rounded">Weekly</a></li>
                            <li><a href="#" class="link-dark rounded">Monthly</a></li>
                            <li><a href="#" class="link-dark rounded">Annually</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse" aria-expanded="false">
                        Orders
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">New</a></li>
                            <li><a href="#" class="link-dark rounded">Processed</a></li>
                            <li><a href="#" class="link-dark rounded">Shipped</a></li>
                            <li><a href="#" class="link-dark rounded">Returned</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">New...</a></li>
                            <li><a href="#" class="link-dark rounded">Profile</a></li>
                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                            <li><a href="#" class="link-dark rounded">Sign out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg bg-dash-blue p-3">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn text-white border-0">
                        <i class="bi bi-list"></i>
                        SISTEMA
                    </button>

                    <a href="{{ route('logout') }}" class="btn btn-outline-light border-0">
                        <i class="bi bi-box-arrow-right"></i>
                        Sair
                    </a>

                </div>
            </nav>

            <div class="dash_content_box p-3">
                @yield('content')
            </div>
        </div>

    </div> <!-- /#wrapper -->

    <script src="{{ mixing('/panel/assets/js/jquery.js') }}"></script>
    <script src="{{ mixing('/panel/assets/js/bootstrap.js') }}"></script>
    <script src="{{ mixing('/panel/assets/js/panel.js') }}"></script>

    @hasSection('js')
        @yield('js')
    @endif

</body>

</html>
