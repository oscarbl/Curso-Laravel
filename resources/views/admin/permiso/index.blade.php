@extends("theme.$theme.layout")
@section('titulo')
Permisos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="card card-primary">
    @include('includes.mensaje')
    <div class="card-header with-border">
        <h3 class="card-title">Permisos</h3>
        <a href="{{route('crear_permiso')}}" class="btn btn-success btn-sm pull-right">Crear permiso</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped table-bordered table-hover" id="tabla-data">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th style="width: 40px">Slug</th>
                    <th></th>
                    <th class="width70"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permisos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->slug}}</td>
                    <td></td>
                    <td>
                        <a href="{{route("editar_permiso", ['id' => $permiso->id])}}" class="btn-accion-tabla tooltipsC"
                            title="Editar este registro">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{route("eliminar_permiso",  ['id' => $permiso->id])}}"
                            class="d-inline form-eliminar" method="POST">
                            @csrf @method("delete")
                            <button type="submit" class="btn-accion-tabla eliminar tooltipsC"
                                title="Eliminar este registro"><i class="fa fa-times-circle text-danger"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection