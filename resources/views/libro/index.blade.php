@extends("theme.$theme.layout")
@section('titulo')
Libros
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/libro/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @csrf
        @include('includes.mensaje')
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">Libros</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('crear_libro')}}" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Cantidad</th>
                            <th class="width80"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td><a href="{{route('ver_libro', $data)}}" class="ver-libro">{{$data->titulo}}</a></td>
                            <td>{{$data->cantidad}}</td>
                            <td>
                                <a href="{{route('editar_libro', ['id' => $data->id])}}"
                                    class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{route('eliminar_libro', ['id' => $data->id])}}"
                                    class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC"
                                        title="Eliminar este registro">
                                        <i class="fa fa-times-circle text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-ver-libro" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title">Libro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body"></div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection