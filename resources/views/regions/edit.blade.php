@extends('admin.main')

@section('content')


  <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Edit regions Page</a>
            <span>/</span>
            <span>Dashboard</span>
        
        

          

        </div>

      </div>
      <!-- Heading -->


      


  

      @if (Session::has('region_update'))


      <em class="alert-success"> {{Session('region_update')}} </em> 

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
     
  


{{Form::model($regions, array('route' => array('regions.update', $regions->id),  'method'=>'PUT' ))}}
{{ Form::text('name', '' , array('class'=>'form-control')) }}
{{ Form::submit(('update region'),array('class'=>'btn btn-primary bg-primary')) }}
{{ Form::close() }}
@endsection