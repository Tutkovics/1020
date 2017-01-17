@if ( Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
        <br>
    </div>
@endif

@if ( Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('danger') }}
        <br>
    </div>
@endif

@if ( count( $errors) > 0 )
    <div class="alert alert-danger" style="text-align:left" role="alert">
        <strong>Emiatt vagy hülye:</strong>
        <ul style="list-style-type:none;">
        @foreach( $errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif