@extends('layouts.app')

@section('title')
{{__('Massquad - Rekisteröidy')}}
@endsection

@section('content')
  	<!-- CONTENT -->
    <form role="form" method="POST" action="{{ route('register')}}">

    {!! csrf_field() !!}
    <div class="content-container">
      <div class="height-vp-min-90 bg-img-1">
        <div class="container d-flex align-items-center h-100">
          <div class="bg-white shadow p-5 w-md-75 mx-auto my-5">
            <h1 class="text-center">{{__('Rekisteröidy')}}</h1>
            <p class="text-center my-4">
              <span>{{__('Anna sähköpostisi ja muut tiedot alla olevaan lomakkeeseen, niin lähetämme sinulle kertakäyttöisen salasanan.')}}</span>
            </p>
            <div class="my-4">
                {{__('Etunimi')}}<br />
                <input class="w-100" type="firstname" name="firstname" placeholder="{{ __('Etunimi') }}" autofocus=""/>
            </div>
            <div class="my-4">
                {{__('Sukunimi')}}<br />
                <input class="w-100" type="surname" name="surname" placeholder="{{ __('Sukunimi') }}" autofocus=""/>
            </div>
            <div class="my-4">
                {{__('Puhelinnumero')}}<br />
                <input class="w-100" type="phonenum" name="phonenum" placeholder="{{ __('Puhelinnumero') }}" autofocus=""/>
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
          </div>
        </div> <!-- div .container -->
      </div> <!-- div .height-vp-80 bg-img-2 -->
    </div> <!-- div .content-container -->

    <!-- END OF CONTENT -->
  <!-- END OF PAGE CONTENT -->
@endsection
<!-- END OF FILE -->
