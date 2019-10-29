@extends('layout')
@section('title', 'Page Title')
@section('sidebar')
    @parent
    @endsection

    <div class="columns">
      <div class="column"></div>


    <div class="column">
        @section('content')
        <br>
      <h1 class="subtitle is-2 has-text-centered">Registrar nuevo Curso</h1>
    <form method="post" action="{{ route('subject.store') }}">

        {{ csrf_field() }}
        <div class="field">
          <div class="control">
            <input type="text" name="codigo"  class="input is-primary is-large has-text-centered is-rounded" required placeholder="Codigo"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <input type="text" name="name" class="input is-primary is-large has-text-centered is-rounded"  required placeholder="Nombre"><br>
          </div>
        </div>


        <div class="field is-rounde">
          <div class="control is-rounde">
            <div class="select is-large is-rounded is-fullwidth">
              <select name="is_active"  >
                <option value="1" >Activo</option>
                <option value="0">Inactivo</option>
              </select>
            </div>
          </div>
        </div>

        <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded"  required>
    </form>
  </div>

  <div class="column"></div>

  </div>

    @endsection
