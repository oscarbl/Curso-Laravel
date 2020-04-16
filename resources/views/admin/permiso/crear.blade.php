@extends("theme.$theme.layout")

@section('contenido')
<div class="card card-danger">
    <div class="card-header with-border">
        <h3 class="card-title">Crear Permisos</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">

        @@include('form')

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection