<!DOCTYPE html>
<html lang="es" dir="{{str_replace('-', '-', app()->getLocale()) }}">
  <head>
     <title>@yeild('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  </head>
  <body>

      @section('sidebar')
      <nav class="navbar is-white">
      <div class="container">
          <div class="navbar-brand">
              <a class="navbar-item brand-text " href="/sCool">
                  <span class="title is-4 has-text-info">
                    School
                  </span>
              </a>
              <div class="navbar-burger burger" data-target="navMenu">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
          </div>
          <div id="navMenu" class="navbar-menu">
              <div class="navbar-start">
                  <a class="navbar-item has-text-grey-dark" href="/sCool/src/studentController/activeList.php">
                      View active students
                  </a>
                  <a class="navbar-item has-text-grey-dark" href="/sCool/src/subjectController/subjectList.php">
                      View all classes
                  </a>
                  <a class="navbar-item has-text-grey-dark" href="/sCool/src/studentController/inactiveList.php">
                      View inactive students
                  </a>
              </div>

          </div>
      </div>
  </nav><br><br>



       @show





    @yield('content')


<br><br><br><br><br>
  <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Bulma</strong>
  </div>
</footer
</body>
</html>
