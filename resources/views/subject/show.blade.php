<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
  </head>
  <body>
    <br><br><br><br><br>
    <div class="columns">

    <div class="column"></div>

    <div class="column">
    <input type="submit" value="{{ $subject->name }}" class="button is-primary is-medium is-fullwidth is-rounded">
        <br>
        <table class="table is-striped is-narrow is-hoverable is-fullwidth">

          <tr>
            <th>codigo</th><td>{{ $subject->codigo }}</td>
          </tr>
          <tr>
            <th>Activo</th><td>{{ $subject->is_active }}</td>
          </tr>


        </table>
        <br>
        <form action="{{ route('subject.destroy', $subject->id)}}" method="post">
          @csrf
          @method('DELETE')
          <div class="has-text-centered">
          <a href="{{ route('subject.index') }}" class="button is-link is-normal is-info is-rounded has-text-centered">Volver</a>
          <a href="{{ route('subject.edit', $subject->id) }}" class="button is-success is-normal is-info is-rounded has-text-centered">Editar</a>
          <input type="submit" value="Eliminar" class="button is-danger is-normal is-info is-rounded has-text-centered">
        </div>
        </form>
    </div>

    <div class="column"></div>

    </div>
  </body>
</html>
