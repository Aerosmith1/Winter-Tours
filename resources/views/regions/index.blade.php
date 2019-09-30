@extends('admin.main')

@section('content')

<h1>Create Post</h1>

{!! Form::open(array('url'=> 'hotels')) !!}
{!! Form::text('name', '' , array('class'=>'form-control')) !!}
{!! Form::submit ('create region'),array('class'=>'btn btn-primary') !!}
{!! Form::close() !!}

@endsection