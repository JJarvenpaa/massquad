<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Massquad') }}</title>-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Massquad CSS -->
    <link rel="stylesheet" href="{{asset('css/massquad.css')}}">
</head>
<body>

  <!-- NAVIGATION BAR -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">
      <div class="container">

          <!-- Navbar content -->
          <a class="navbar-brand" href="index.html">
              <img src="img/logo/massquad_logo_white.svg" height=50 class="d-inline-block align-center tab" alt="Massquad logo">
              <span class="h3 text-thinner align-middle">Massquad</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-between" id="navbar">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link text-thin" href="index.html">Etusivu</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-thin" href="concept.html">Miten Massquad toimii</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-thin" href="team.html">Tiimi / Yhteystiedot</a>
                  </li>
              </ul>

              <ul class="navbar-nav">
            <li class="nav-item">
                  <a class="nav-link text-thin" href="offers-new-offer-1.html">Kilpailuta koulutus</a>
                </li>
            <li class="nav-item active">
              <a class="nav-link text-thin" href="login.html">Kirjaudu sisään <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          </div> <!-- div .navbar-collapse -->

      </div> <!-- div .container -->
  </nav> <!-- nav .navbar -->

  <!-- END OF NAVIGATION BAR -->
  <!-- Bootstrap JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <!-- END OF SCRIPTS -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
