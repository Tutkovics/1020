@extends('layouts.master')

@section('title', '1020')

@section('stylesheet')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
@endsection

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Jelentkezz be!
                </div>

                @include('layouts._messages')

                <div class="links">
                    <a href="user/login">Belépés</a>
                    <a href="user/registration">Regisztáció</a>
                </div>
            </div>
        </div>
@endsection
