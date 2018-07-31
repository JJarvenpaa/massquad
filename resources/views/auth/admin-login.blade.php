@extends('layouts/master.blade.php')

@section('title')
{{__('Massquad Ylläpitäjä - Kirjaudu sisään')}}
@endsection

@section('content')
  	<!-- CONTENT -->
    <form role="form" method="POST" action="{{ url('admin.login.submit')}}">

    @{{ csrf_field() }}
    <div class="content-container">
      <div class="height-vp-min-90 bg-img-1">
        <div class="container d-flex align-items-center h-100">
          <div class="bg-white shadow p-5 w-md-75 mx-auto my-5">
            <h1 class="text-center">Kirjaudu sisään</h1>
            <p class="text-center my-4">
              Anna sähköpostisi alla olevaan kenttään, niin lähetämme sinulle kertakäyttöisen salasanan.
            </p>
            <div class="alert alert-danger w-100" role="alert" id="faulty-email" hidden>
                Virheellinen sähköpostiosoite.
            </div>
            <div class="alert alert-danger w-100" role="alert" id="no-user" hidden>
                Sähköpostia ei löyty käyttäjäkannastamme. <a href="#">Oletko jo rekisteröitynyt?</a>
            </div>
            <div class="my-4">
              Sähköposti<br />
              <input class="w-100" type="email" />
            </div>
            <div class="my-4">
              <button class="btn btn-primary w-100" onclick="sendPassword()">Lähetä salasana</button>
            </div>
            <div class="my-4 text-center">
                <a href="#">Etkö ole vielä rekisteröitynyt? Tee se tästä!</a>
            </div>
          </div>
        </div> <!-- div .container -->
      </div> <!-- div .height-vp-80 bg-img-2 -->
    </div> <!-- div .content-container -->

    <!-- END OF CONTENT -->

    <!-- SCRIPTS -->

    <script>

    /*  function sendPassword() {
        window.location.replace("login-password.html");
      }
*/
    </script>

  <!-- END OF PAGE CONTENT -->
@endsection
<!-- END OF FILE -->
