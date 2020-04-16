@extends("theme.$theme.layout")
@section('titulo')
Sistemas de Menus
@endsection

@section('contenido')
<div class="card card-danger">
    <div class="card-header with-border">
        <h3 class="card-title">Crear Menu</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <!-- form start -->
        <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
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