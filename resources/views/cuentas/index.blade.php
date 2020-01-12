@extends('layouts.app')
@section('title', 'Cuentas')

@section('content')
  <div class="col-sm">
    <div class="card text-center">
      <div class="card text-white bg-success mb-3">
        <div class="card-body">
          <h1 class="card-title">Listado de Cuentas</h1>
        </div>
      </div>
    </div>
  </div>
  @foreach ($cuentas as $cuenta)
      <div class="col-sm">
        <div class="card text-center">
          <div class="card text-white bg-dark mb-3">
            <div class="card-body">
              <h5 class="card-title">{{$cuenta->name}}</h5>
              <a href="/cuentas/{{$cuenta->id}}" class="btn btn-primary">Detalles</a>
              <a href="{{route('cuenta-delete', $cuenta->id)}}" class="btn btn-danger">Eliminar</a>
              <a href="{{route('cuenta-edit', $cuenta->id)}}" class="btn btn-warning">Actualizar</a>
            </div>
          </div>
        </div>
      </div>
  @endforeach
@endsection
