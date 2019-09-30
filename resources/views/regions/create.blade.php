@extends('admin.main')

@section('content')


  <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Create regions Page</a>
            <span>/</span>
            <span>Dashboard</span>
        
		    

          

        </div>

      </div>
      <!-- Heading -->


      


  

      @if (Session::has('region_create'))


      <em class="alert-success"> {{Session('region_create')}} </em> 

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
     
  


{{ Form::open(array('url'=> 'regions')) }}
{{ Form::text('name', '' , array('class'=>'form-control')) }}
{{ Form::submit(('create region'),array('class'=>'btn btn-primary bg-primary')) }}
{{ Form::close() }}

@endsection