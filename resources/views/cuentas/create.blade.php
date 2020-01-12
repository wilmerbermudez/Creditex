@extends('layouts.app')
@section('title', 'Crear Cuenta')

@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="conatainer">
      <form class=class="form-group" action="/cuentas" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Nombre de Cuenta</label>
          <input type="text" name="Nombre" class="form-control" placeholder="Nombre de la Cuenta">
        </div>
        <div class="form-group">
          <label for="">Descripcion de Cuenta</label>
          <input type="text" name="Descripcion" class="form-control" placeholder="Cuenta Usada para">
        </div>
        <div class="form-group">
          <label for="">Interes</label>
          <input type="text" name="Interes" class="form-control" placeholder="Ingrese numero sin el %">
        </div>
      <button type="submit" class="btn btn-primary">Crear</button>
      </form>
    </div>
@endsection
