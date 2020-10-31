@extends('layouts.app')

@section('content')

<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <b>FORMULARIO PROVEEDORES</b>
        <a href="{{route ('proveedores.index')}}" class="btn btn-primary">
            <i class="fa fa-arrow-left">Volver</a></i>
    </div>
        <div class="card-body">
            <form action="{{ route('proveedores.update', $proveedor->idProveedor)}}" method="POST" enctype="multipart/form-data" id="create">
            @method('PUT') 
            {{$proveedor->idProveedor}}
            @include('proveedores.partials.form')
            </form>
        </div>
            <div class="card-footer">
            <button class="btn btn-primary" form="create">
                    <i class="fa fa-save"></i>
                    
                    Guardar cambios
                </button>

                <button class="btn btn-danger" form="delete_{{$proveedor->idProveedor}}" onclick="return confirm('¿Está seguro de eliminar el registro?')">
                    <i class="fa fa-trash"></i>
                    Eliminar
                </button>
                
                <form action="{{route('proveedores.destroy', $proveedor->idProveedor)}}" id="delete_{{$proveedor->idProveedor}}" method="POST" enctype="multipart/form-data" hidden>
                    @csrf
                    @method('DELETE')
                </form>
            </div>
</div>

@endsection


