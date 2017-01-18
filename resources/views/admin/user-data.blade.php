@extends('layouts.master')

@section('title', 'Felhasználók')

@section('stylesheet')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
@endsection


@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            @include('layouts._messages')
            <div class="page-header">
                <h1>{{ $user->name }}</h1>

            </div>
            <div class="row">
                <p>
                    Emial: {{ $user->email }}
                </p>
                <p>
                    Regisztrált: {{ $user->created_at }}
                </p>
                <p>
                    Jog: {{ $user->permission }}
                </p>
                <a href="{{ url()->previous() }}">
                    <button type="button" style="margin-top:30px;" class="btn btn-sm btn-success center-block center-block">Vissza</button>
                </a>
            </div>
        </div>
    </div>
@endsection