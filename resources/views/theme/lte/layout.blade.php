<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo','OB - Biblioteca')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet"
        href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
    @yield('styles')
    <!-- Custom Theme style -->
    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-boxed">

    <div class="wrapper">
        <!-- Inicio Header->
            @include("theme/$theme/header")
            <!-- Fin Header -->

        <!-- Inicio Aside ->
        @include("theme/$theme/aside")
        <!-- Fin Aside -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                @yield('contenido')
            </section>
            <!-- /.content -->
        </div>
    </div>

    <!-- Inicio Footer -->
    @include("theme/$theme/footer")
    <!-- Inicio Footer -->

    <!--Inicio de ventana modal para login con más de un rol -->
    @if(session()->get("roles") && count(session()->get("roles")) > 1)
    @csrf
    <div class="modal fade" id="modal-seleccionar-rol" data-rol-set="{{empty(session()->get("rol_id")) ? 'NO' : 'SI'}}"
        tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Roles de Usuario</h4>
                </div>
                <div class="modal-body">
                    <p>Cuentas con mas de un Rol en la plataforma, a continuación seleccione con cual de ellos desea
                        trabajar</p>
                    @foreach(session()->get("roles") as $key => $rol)
                    <li>
                        <a href="#" class="asignar-rol" data-rolid="{{$rol['id']}}" data-rolnombre="{{$rol["nombre"]}}">
                            {{$rol["nombre"]}}
                        </a>
                    </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery -->
    <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"> </script>
    @yield('scriptsPlugins')
    <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"> </script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"> </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset("assets/js/scripts.js")}}"></script>
    <script src="{{asset("assets/js/funciones.js")}}"> </script>
    @yield('scripts')
    </script>
</body>

</html>