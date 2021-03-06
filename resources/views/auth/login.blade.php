@extends('layouts.app')

@section('title')
{{__('Massquad - Kirjaudu sisään')}}
@endsection

@section('content')
  	<!-- CONTENT -->
    <form role="form" method="POST" action="{{ route('login')}}">

    {!! csrf_field() !!}
    <div class="content-container">
      <div class="height-vp-min-90 bg-img-1">
        <div class="container d-flex align-items-center h-100">
          <div class="bg-white shadow p-5 w-md-75 mx-auto my-5">
            <h1 class="text-center">Kirjaudu sisään</h1>
            <p class="text-center my-4">
              <span>{{__('Anna sähköpostisi alla olevaan kenttään, niin lähetämme sinulle kertakäyttöisen salasanan.')}}</span>
            </p>
            <div class="alert alert-danger w-100" role="alert" id="no-user" hidden>
                Sähköpostia ei löyty käyttäjäkannastamme. <a href="{{route('register')}}">Oletko jo rekisteröitynyt?</a>
            </div>
            <div class="my-4">
              {{__('Sähköposti')}}<br />
              <input class="w-100" type="email" name="email" placeholder="{{ __('Sähköposti') }}" autofocus=""/>
              @if($errors->has('email'))
                  <div class="alert alert-danger w-100" role="alert" id="faulty-email" hidden>
                      Virheellinen sähköpostiosoite.
                  </div>
              @endif
            </div>
            <div class="my-4">
              <button class="btn btn-primary w-100" type="submit" name="sendtouser" id="sendtouser">Lähetä salasana</button>
            </div>
            <div class="my-4 text-center">
                <a href="{{route('register')}}">Etkö ole vielä rekisteröitynyt? Tee se tästä!</a>
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
