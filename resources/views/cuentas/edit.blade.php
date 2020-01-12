@extends('layouts.app')
@section('title', 'Actualizar Cuenta')

@section('content')
  <div class="conatainer">
      <form class=class="form-group" action="/cuentas/{{$cuenta->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="">Nombre de Cuenta</label>
          <input type="text" name="Nombre" value="{{$cuenta->name}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Descripcion de Cuenta</label>
          <input type="text" name="Descripcion" value="{{$cuenta->descripcion}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Interes</label>
          <input type="text" name="Interes" value="{{$cuenta->interes}}" class="form-control">
        </div>
      <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
    </div>
@endsection
