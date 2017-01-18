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
            <div class="">
                <h1>Felhasználók</h1>
            </div>
            <div class="row">
                    <ul class="list-group">
                    @foreach($users as $user)
                        <a href="{{ route('admin.user-data', [$user->id]) }}">
                            <li class="list-group-item">{{ $user->name }}
                            @if ($user->permission < 1)
                                <a href="{{ route('admin.user-admin', [$user->id]) }}" >
                                    <button type="button" class="btn btn-sm btn-primary pull-right center-block delete-user-btn">Admin</button>
                                </a>
                                <a href="{{ route('admin.user-delete', [$user->id]) }}" >
                                    <button type="button" class="btn btn-sm btn-danger pull-right center-block delete-user-btn">Töröl</button>
                                </a>
                                @else
                                <a>
                                    <button type="button" class="btn btn-sm btn-success pull-right center-block delete-user-btn">Admin</button>
                                </a>
                            @endif
                            </li>
                        </a>
                    @endforeach
                    </ul>
            </div>
        </div>
    </div>
@endsection