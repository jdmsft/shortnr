@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
<link rel='stylesheet' href='/css/effects.css' />
@endsection

@section('content')
<div class='well logo-well'>
    <img class='logo-img' src='/img/logo.png' />
</div>

<div class='about-contents'>
    @if ($role == "admin")
    <dl>
        <p>Build Information</p>
        <dt>Shortnr Version: {{env('SHORTNR_VERSION')}}</dt>
        <dt>Polr Version: {{env('POLR_VERSION')}}</dt>
        <dt>Release date: {{env('POLR_RELDATE')}}</dt>
        <dt>App Install: {{env('APP_NAME')}} on {{env('APP_ADDRESS')}} on {{env('POLR_GENERATED_AT')}}<dt>
    </dl>
    <p>You are seeing the information above because you are logged in as an administrator. You can edit the contents of this page by editing <code>resources/views/about.blade.php</code></p>
    @endif

    <p>{{env('APP_NAME')}} is a fork of <a href='https://github.com/Cydrobolt/polr'>Polr 2</a>, an open source, minimalist link shortening platform.
        <br />Polr is licensed under the GNU GPL License.
    </p>
</div>

@endsection
