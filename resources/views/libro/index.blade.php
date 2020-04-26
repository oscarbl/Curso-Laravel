@extends("theme.$theme.layout")
@section('titulo')
Libros
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/libro/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="card card-primary">
    @include('includes.mensaje')
    <div class="card-header with-border">
        <h3 class="card-title">Libros</h3>
        <a href="{{route('crear_libro')}}" class="btn btn-success btn-sm pull-right">
            <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-bordered table-hover" id="tabla-data">
            <thead>
                <tr>
                    <th>Título</th>
                    <th class="width70"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td>{{$data->titulo}}</td>
                    <td>
                        <a href="{{route('editar_libro', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC"
                            title="Editar este registro">
                            <i class="fa fa-fw fa-pencil"></i>
                        </a>
                        <form action="{{route('eliminar_libro', ['id' => $data->id])}}" class="d-inline form-eliminar"
                            method="POST">
                            @csrf @method("delete")
                            <button type="submit" class="btn-accion-tabla eliminar tooltipsC"
                                title="Eliminar este registro">
                                <i class="fa fa-fw fa-trash text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection