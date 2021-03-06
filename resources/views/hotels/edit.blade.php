@extends('admin.main')

@section('content')


  <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Edit Hotels Page</a>
            <span>/</span>
            <span>Dashboard</span>
        
		    

          

        </div>

      </div>
      <!-- Heading -->


      


  

      @if (Session::has('hotel_update'))


      <em class="alert-success"> {{Session('hotel_update')}} </em> 

        @endif

      @if(count($errors)>0)

       <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
     
{{Form::model($hotels, array('route' => array('hotels.update', $hotels->id),  'method'=>'PUT', 'files'=>'true' ))}}

{{Form::label('name','Name:')}}
{{ Form::text('name', '' , array('class'=>'form-control')) }}


{{Form::label('region_id','Region:')}}
{{ Form::select('region_id', $regions , array('class'=>'form-control ')) }}<br>


{{Form::label('image','Image')}}
{{ Form::file('image', null , array('class'=>'form-control ')) }}<br>


{{Form::label('description','Description:')}}
{{ Form::textarea('description', '' , array('class'=>'form-control')) }}


{{ Form::submit('update hotel',array('class'=>'btn btn-primary bg-primary')) }}
{{ Form::close() }} 

@endsection