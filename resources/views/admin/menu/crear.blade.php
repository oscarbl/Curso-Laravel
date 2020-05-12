@extends("theme.$theme.layout")
@section('titulo')
Sistemas de Menus

@endsection
@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript">
    >
</script>
@endsection

@section('contenido')
@include('includes.form-error')
@include('includes.mensaje')
<div class="card card-outline card-danger">
    <div class="card-header with-border">
        <h3 class="card-title">Crear Menús</h3>
        <div class="card-tools">
            <a href="{{route('menu')}}" class="btn btn-outline-info btn-sm">
                <i class="fa fa-fw fa-reply-all"></i> Volver al listado
            </a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <!-- form start -->
        <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal form--label-right"
            method="POST" autocomplete="off">
            @csrf
            @include('admin.menu.form')
            <!-- /.card-body -->
            <div class="card-footer">
                @include('includes.boton-form-crear')
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection