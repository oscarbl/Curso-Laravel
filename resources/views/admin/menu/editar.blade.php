@extends("theme.$theme.layout")
@section('titulo')
Sistemas de Menus

@endsection
@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}"></script>
@endsection

@section('contenido')
@include('includes.form-error')
@include('includes.mensaje')
<div class="card card-outline card-danger">
    <div class="card-header with-border">
        <h3 class="card-title">Editar Menu</h3>
        <a href="{{route('menu')}}" class="btn btn-danger btn-sm pull-right">Listado</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <!-- form start -->
        <form action="{{route('actualizar_menu',['id'=>$data->id])}}" id="form-general" class="form-horizontal"
            method="POST" autocomplete="off">
            @csrf @method("put")
            @include('admin.menu.form')
            <!-- /.card-body -->
            <div class="card-footer">
                @include('includes.boton-form-editar')
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection