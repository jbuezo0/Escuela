<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body><br><br><br>

<div class="columns">

  <div class="column"></div>
  <div class="column">

  <table class="table  is-striped is-narrow is-hoverable is-fullwidth">
      <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th></th>
      </tr>

  @foreach($subject_years as $sy) <!--la primero "student" es la variable que se creo en el controlador index. -->

  <tr>
    <td>{{ $sy->subject->name }}</td>
    <td>{{ $sy->teacher->fullname }}</td>
    <td><a href="" class="button is-dark">Detalle</a></td>
  </tr>

  @endforeach
  </table>
</div>

    <div class="column"></div>

  </div>
  </body>
</html>
