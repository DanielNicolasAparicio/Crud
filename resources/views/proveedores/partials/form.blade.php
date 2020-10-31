@csrf


<div class="row">
<div class="col-12">

<div class="form-group">
    <label for="">Razon Social</label>
    <input type="text" class="form-control" name="razonSocial" value="{{ (isset($proveedor))?$proveedor->razonSocial:old('razonSocial')}}">
</div>
</div>
<div class="form-group">
    <label for="">Nombre Completo</label>
    <input type="text" class="form-control" name="nombreCompleto" value="{{ (isset($proveedor))?$proveedor->nombreCompleto:old('nombreCompleto')}}">
</div>
<div class="form-group">
    <label for="">Dirección</label>
    <input type="text" class="form-control" name="direccion" value="{{ (isset($proveedor))?$proveedor->direccion:old('direccion')}}">
</div>
<div class="form-group">
    <label for="">Telefono</label>
    <input type="text" class="form-control" name="telefono" value="{{ (isset($proveedor))?$proveedor->telefono:old('telefono')}}">
</div>
<div class="form-group">
    <label for="">Correo</label>
    <input type="mail" class="form-control" name="correo" value="{{ (isset($proveedor))?$proveedor->correo:old('correo')}}">
</div>
<div class="form-group">
    <label for="">RFC</label>
    <input type="text" class="form-control" name="rfc" value="{{ (isset($proveedor))?$proveedor->rfc:old('rfc')}}">
</div>
</div>
