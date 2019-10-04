@extends('layouts.main')


@section('content')

@foreach($tours as $tour)

<p><a href="{{url('ourtour/view/'.$tour->id)}}" >{{$tour->name}}</a></p>
<img src="{{url('img/tour/'.$tour->image)}}">
<p>{{$tour->short_desc}}</p>

@endforeach




@endsection