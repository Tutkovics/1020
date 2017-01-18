@extends('layouts.master')

@section('title', 'Új pipa')

@section('stylesheet')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
@endsection


@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Új pipa
            </div>
            @include('layouts._messages')
            <div>
                {!! Form::open(['url' => 'hookah/new/save']) !!}
                {{ Form::label('flavor', 'Íz:') }}
                {{ Form::text('flavor', null, array('class' => 'form-control input-text', 'autofocus' =>'')) }} <br>
                {{ Form::submit('Ok', array('class' => 'btn btn-success reg-btn')) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection