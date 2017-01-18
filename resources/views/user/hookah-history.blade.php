@extends('layouts.master')

@section('title', 'Ex pipáink')

@section('stylesheet')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet">
@endsection


@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            @include('layouts._messages')
            <div class="">
                <h1>Sad history</h1>
                <p>worse than my browser history</p>
            </div>
            <div class="row">
                    <ul class="list-group">
                        <li class="list-group-item" style="text-align: center;">
                            <section  style="text-assign:left;dissectionlay: inline">
                                Elmult 24 órában: {{ $today }} db
                            </section>
                            <section style="text-assign:right;issectionlay: inline">
                                Összesen: {{ $hookahs->count() }} db
                            </section>
                        </li>
                    @foreach($hookahs as $hookah)
                        <li class="list-group-item">
                            <div class="row">
                                <section  style="float:left;padding: 5px;">
                                    {{ $hookah->flavor }}
                                </section>
                                <section style="float:right;padding:5px;">
                                    {{ $hookah->created_at->diffForHumans() }}
                                </section>
                            </div>
                        </li>
                    @endforeach
                    </ul>
            </div>
        </div>
    </div>
@endsection