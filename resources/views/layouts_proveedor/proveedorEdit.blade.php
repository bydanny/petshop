@extends('layouts.empleadoMenu')
@section('content')
<div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('empleado.index')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Actualizar / Proveedor  </li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Actualizar Proveedor  </h1>
          </header>
        <form action="/proveedor/{{$proveedores->id}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
          <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Datos del Proveedor</h4>
                </div>

                <div class="card-body">
                  <!--- Nombre Proveedor-->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nombre: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre" value="{{$proveedores->nombre}}" required>
                        <input type="hidden" name="_method" value="PUT">     
                        @error('nombre')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <!--- Direccion Proveedor-->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Direccion: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="direccion" value="{{$proveedores->direccion}}" required>
                        @error('direccion')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <!--- Correo Proveedor  -->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Correo: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="correo" value="{{$proveedores->correo}}" required>
                        @error('correo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                   <!--- Telefono Proveedor -->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Telefono:</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" name="telefono" value="{{$proveedores->telefono}}" required>
                        @error('telefono')
                                    <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                      </div>
                    </div>
                    <!--- Marca Proveedor-->
                     <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Marca: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="marca" value="{{$proveedores->marca}}" required>
                        @error('marca')
                                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <a class="btn btn-outline-danger" href="{{route('empleado.index')}}" role="button">Cancelar</a>
                        <button type="submit" class="btn btn-outline-success">Actualizar Proveedor</button>
                      </div>
                    </div>
                 </div>
              </div>
            </div>
        </form>
    </div>
      </div>
  </body>
</html>
@endsection


      