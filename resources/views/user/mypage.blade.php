@extends('layouts.master')

@section('title', 'Főoldal')

@section('stylesheet')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <!-- @include('layouts._messages') -->
            <!-- van: 5cb85c; nincs: ce8483 -->
            <div class="title m-b-md" style="color: {{ $color }}">
                {{ $status }}
            </div>
                <p style="color: {{ $color }}">utolsó: {{ $diff }}</p>
                <p>
                    <a href="{{ route('hookah.history') }}" >
                        Pipa history
                    </a>
                </p>
                <p>
                    <a href="{{ route('hookah.new') }}" >
                        Új pipa hozzáadása
                    </a>
                </p>
                <p>
                    <a href="{{ route('user.logout') }}">
                        Logout
                    </a>
                </p>
        </div>
    </div>
@endsection
