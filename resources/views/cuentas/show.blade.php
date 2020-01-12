@extends('layouts.app')
@section('title', 'Destalles de la Cuenta')

@section('content')
  <div class="col-sm">
    <div class="card text-center">
      <div class="card text-white bg-success mb-3">
        <div class="card-body">
          <h1 class="card-title">Detalles de la Cuentas</h1>
          <a href="/transacciones/create" class="btn btn-warning btn-md">Agregar Transaccion</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <h1 class="card-title">Nombre de la cuenta: {{$cuenta->name}}</h1>
    <h5 class="card-title">Descripcion de la cuenta: {{$cuenta->descripcion}}</h5>
    <h5 class="card-title">Interes de la cuenta: {{$cuenta->interes}}%</h5>
    <h5 class="card-title">Identificador de la cuenta: {{$cuenta->id}}</h5>
  </div>
  <div class="container text-center">
    <div class="page">
      <div class="table-responsive">
        <h3>Comprobantes</h3>
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th>Cantidad</th>
              <th>Descripcion</th>
              <th>Fecha</th>
              <th>Interes</th>
              <th>Balance</th>
              <th>Quitar</th>
            </tr>
          </thead>
          <body>
            <?php
            $total=0;
             ?>
            @foreach ($transacciones as $transaccion)
              @if ($transaccion->cuenta_id == $cuenta->id)
                @if ($transaccion->Cantidad > 0)
                  <tr>
                  <td>{{$transaccion->Cantidad}}</td>
                  <td>{{$transaccion->descripcion}}</td>
                  <td>{{$transaccion->created_at}}</td>
                  <td>${{number_format(($cuenta->interes / 100) * $transaccion->Cantidad)}}</td>
                  <td>${{number_format((($cuenta->interes / 100) * $transaccion->Cantidad)+ $transaccion->Cantidad,2)}}</td>
                  <td><a href="{{route('transaccion-delete', $transaccion->id)}}" class="btn btn-danger">Eliminar</td>
                  </tr>
                  <?php
                    $total +=(($cuenta->interes / 100) * $transaccion->Cantidad)+ $transaccion->Cantidad
                   ?>
                @else
                  <tr>
                  <td>{{$transaccion->Cantidad}}</td>
                  <td>{{$transaccion->descripcion}}</td>
                  <td>{{$transaccion->created_at}}</td>
                  <td>$0.00</td>
                  <td>${{number_format($transaccion->Cantidad,2)}}</td>
                  <td><a href="{{route('transaccion-delete', $transaccion->id)}}" class="btn btn-danger">Eliminar</td>
                  </tr>
                  <?php
                    $total +=$transaccion->Cantidad
                   ?>
                @endif
              @endif
            @endforeach
          </body>
        </table><hr>
          <h3>
            <span class="label label-success">
               Total:$ {{number_format($total,2)}}
            </span>
          </h3>
      </div>
    </div>
  </div>
@endsection
