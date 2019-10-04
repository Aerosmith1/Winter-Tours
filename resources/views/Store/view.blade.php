@extends('layouts.main')


@section('content')



<p>{{$tours->name}}</p>
<img src="{{url('img/tour/'.$tours->image)}}">
<p>{{$tours->description}}</p>
@endsection