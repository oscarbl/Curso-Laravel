<div class="card-body">
    <div class="form-group row">
        <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
        <div class="col-lg-9">
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}"
                placeholder="Nombre">
        </div>
    </div>
    <div class="form-group row">
        <label for="url" class="col-lg-3 col-form-label requerido">URL</label>
        <div class="col-lg-9">
            <input type="text" name="url" id="url" class="form-control" required value="{{old('url')}}"
                placeholder="url">
        </div>
    </div>
    <div class="form-group row">
        <label for="icono" class="col-lg-3 col-form-label">Icono</label>
        <div class="col-lg-9">
            <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono')}}"
                placeholder="icono">
        </div>
    </div>
</div>