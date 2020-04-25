@extends("theme.$theme.layout")
@section('titulo')
Crear Permisos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="card card-danger">
    @include('includes.mensaje')
    <div class="card-header with-border">
        <h3 class="card-title">Crear Permisos</h3>
        <a href="{{route('permiso')}}" class="btn btn-info btn-sm pull-right">Listado</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <!-- form start -->
        <form action="{{route('guardar_permiso')}}" id="form-general" class="form-horizontal" method="POST"
            autocomplete="off">
            @csrf
            <div class="card-body">
                @include('admin.permiso.form')
            </div>
            <div class="card-footer">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    @include('includes.boton-form-crear')
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection