@extends('layouts.empleadoMenu')
@section('content')

<html>
<body>
    <!-- Todos los evento -->
    <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active">Actualizar </li>
          </ul>
        </div>
      </div>


      <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Proveedores</h4>
                  <nav class="float-right">
                    <form class="form-inline" action="{{route('proveedor.scopeName')}}" method="POST">
                    @csrf
                      <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Nombre Proveedor" aria-label="Search">
                      <button type="submit" class="btn btn-outline-success btn-sm">Buscar</button>
                      </form>
                  </nav>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> NOMBRE </th>
                          <th> DIRECCION </th>
                          <th> CORREO </th>
                          <th> TELEFONO </th>
                          <th> MARCA </th>
                          <th>  </th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($proveedores as $miproveedor)  
                      <tr>
                          <td> {{$miproveedor->id}}</td>
                          <td> {{$miproveedor->nombre}}</td>
                          <td> {{$miproveedor->direccion}} </td>
                          <td> {{$miproveedor->correo}}</td>
                          <td> {{$miproveedor->telefono}}</td>
                          <td> {{$miproveedor->marca}}</td>
                          <td>
                              <a class="btn btn-outline-primary"
                                  href="{{route('proveedor.edit',$miproveedor->id)}}" 
                                  type="button">Actualizar
                              </a>
                          </td>
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

  </body>
</html>

@endsection