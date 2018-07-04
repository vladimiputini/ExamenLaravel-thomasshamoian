

@extends('layouts.master')

@section('content')

    <html>
    <head>
        <title>Look! I'm CRUDding</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">

    {{--<nav class="navbar navbar-inverse">--}}
    {{--<div class="navbar-header">--}}
    {{--<a class="navbar-brand" href="{{ URL::to('/') }}">Nerd Alert</a>--}}
    {{--</div>--}}
    {{--<ul class="nav navbar-nav">--}}
    {{--<li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>--}}
    {{--<li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>--}}
    {{--</ul>--}}
    {{--</nav>--}}

    {{--<h1>Edit {{ $post->titel }}</h1>--}}

    <!-- if there are creation errors, they will show here -->
        {{--{{ HTML::ul($errors->all()) }}--}}

        {{ Form::model($taak, array('route' => array('updatepost', $taak->id), 'method' => 'patch')) }}
        <div class="form-group">
            {{ Form::label('titel', 'titel') }}
            {{ Form::text('titel', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('bericht', 'bericht') }}
            {{ Form::text('bericht', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Edit the Post!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
    </body>
    </html>
@endsection