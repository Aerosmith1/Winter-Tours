@extends('admin.main')

@section('content')


  <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <span>Edit tours Page</span>
            <span>/</span>
            <span>Dashboard</span>
        
        

          

        </div>

      </div>
      <!-- Heading -->


      


  

      @if (Session::has('tour_update'))


      <em class="alert-success"> {{Session('tour_update')}} </em> 

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
     
  

{{Form::model($tour, array('route' => array('tours.update', $tour->id),  'method'=>'PUT', 'files'=>'true' ))}}

{{Form::label('name','Name:')}}
{{ Form::text('name', '' , array('class'=>'form-control')) }}


{{Form::label('image','Image')}}
{{ Form::file('image', null , array('class'=>'form-control ')) }}<br>

{{Form::label('short_desc','Short Desc:')}}
{{ Form::text('short_desc', '' , array('class'=>'form-control')) }}

{{Form::label('description','Description:')}}
{{ Form::textarea('description', '' , array('class'=>'form-control')) }}


{{ Form::submit('update tour',array('class'=>'btn btn-primary bg-primary')) }}
{{ Form::close() }} 


@endsection