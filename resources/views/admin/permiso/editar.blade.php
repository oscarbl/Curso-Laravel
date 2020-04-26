@extends("theme.$theme.layout")
@section('titulo')
Sistemas de Permisos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-outline card-danger">
            <div class="card-header with-border">
                <h3 class="card-title">Editar Permisos {{$data->nombre}}</h3>
                <a href="{{route('permiso')}}" class="btn btn-info btn-sm pull-right">Listado</a>
            </div>
            <form action="{{route('actualizar_permiso', ['id' => $data->id])}}" id="form-general"
                class="form-horizontal" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="card-body p-0">
                    @include('admin.permiso.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-editar')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection