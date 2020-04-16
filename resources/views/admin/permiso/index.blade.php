@extends("theme.$theme.layout")

@section('contenido')
<div class="card card-primary">
    <div class="card-header with-border">
        <h3 class="card-title">Permisos</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th style="width: 40px">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permisos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->slug}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection