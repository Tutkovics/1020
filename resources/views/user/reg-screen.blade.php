@extends('layouts.master')

@section('title', 'Regisztráció')

@section('stylesheet')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
@endsection


@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Regisztráció
            </div>

            @include('layouts._messages')

            <div>
                {!! Form::open(['url' => '/user/save']) !!}

                    {{ Form::label('nick', 'Nick:') }}
                    {{ Form::text('nick', null, array('class' => 'form-control input-text')) }} <br>

                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, array('class' => 'form-control input-text')) }} <br>

                    {{ Form::label('passwd', 'Jelszó:') }}
                    {{ Form::password('passwd', array('class' => 'form-control input-pass')) }} <br>

                    {{ Form::checkbox('checkbox', 'check') }} A <a href="/felhasznalasi-feltetelek">felhasználási feltételeket</a> elfogadom. <br>

                    {{ Form::submit('Regisztálok', array('class' => 'btn btn-success reg-btn')) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection