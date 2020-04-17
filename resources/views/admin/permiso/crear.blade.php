@extends("theme.$theme.layout")
@section('titulo')
Crear Permisos
@endsection

@section('contenido')
<div class="card card-danger">
    <div class="card-header with-border">
        <h3 class="card-title">Crear Permisos</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <!-- form start -->
        <form class="form-horizontal">
            @include('admin.permiso.form')
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Sign in</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection