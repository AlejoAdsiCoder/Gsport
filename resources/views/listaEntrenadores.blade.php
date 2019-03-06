@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card">
  <div class="card-header">
  <i class="fas fa-user"></i>Lista de entrenadores
  <button type="button" class="btn btn-success btn-lg">Nuevo Entrenador</button>
  </div>
  <div class="card-body">
    <div class="side col-md-8">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">E-mail</th>
                <th scope="col">Deporte</th>
                <th scope="col">Barrio</th>
                <th scope="col">Dirección</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>3456523</td>
                <td>Alejandro</td>
                <td>P cardona</td>
                <td>25/10/93</td>
                <td>apatino@misena.co</td>
                
                <td>Ciclismo</td>
                <td>San Jorge</td>
                <td>cll 46 #65-23</td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>3456523</td>
                <td>Alejandro</td>
                <td>P cardona</td>
                <td>25/10/93</td>
                <td>apatino@misena.co</td>
                <td>Ciclismo</td>
                <td>San Jorge</td>
                <td>cll 46 #65-23</td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>3456523</td>
                <td>Alejandro</td>
                <td>P cardona</td>
                <td>25/10/93</td>
                <td>apatino@misena.co</td>
                <td>Ciclismo</td>
                <td>San Jorge</td>
                <td>cll 46 #65-23</td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                <td><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></td>
              </tr>
            </tbody>
          </table>
    </div>
  </div>
</div>

    
</div>
@endsection