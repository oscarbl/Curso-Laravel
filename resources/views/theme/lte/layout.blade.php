<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biblioteca| Oscar Bello</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Biblioteca hecha por Ing. Oscar Bello</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    Bienvenido a la Aplicación de la Biblioteca!
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

    <!-- Inicio Footer -->
    @include("theme/$theme/footer")
    <!-- jQuery -->
    <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"> </script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("assets/$theme/dist/js/demo.js")}}">
    </script>
</body>

</html>