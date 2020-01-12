<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Creditex - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-info">
      <a href="{{ url('/') }}" class="navbar-brand">CREDITEX</a>
      <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ url('/cuentas/create') }}" class="btn btn-warning btn-md">Agregar Cuenta</a>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
