@extends('layouts.app')

@section('content')

<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <b>DETALLE PROVEEDORES</b>
        <a href="{{route ('proveedores.index')}}" class="btn btn-primary">
            <i class="fa fa-arrow-left">Volver</a></i>
    </div>
        <div class="card-body">
            <p><b>Razon Social</b>{{$proveedor->razonSocial}}</p>
            <p><b>Nombre Completo</b>{{$proveedor->nombreCompleto}}</p>
            <p><b>Direccion</b>{{$proveedor->direccion}}</p>
            <p><b>Telefono</b>{{$proveedor->telefono}}</p>
            <p><b>Correo</b>{{$proveedor->correo}}</p>
            <p><b>RFC</b>{{$proveedor->rfc}}</p>

        </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="{{route('proveedores.edit', $proveedor->idProveedor)}}">
                    <i class="fa fa-edit"></i>
                    Editar
                </a>
            </div>
</div>

@endsection