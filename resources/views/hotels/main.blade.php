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
        
         <p style="margin:40px;"> <a href="regions/create" class="btn-primary">Create New Region</a> </p>
		    
           @if(count($regions)>0)

           @foreach($regions as $region)

           <table >
            <tr>
             
            <td class="btn " ><a href="#"> {{$region->name}}</a></td>
             <td class="btn " ><a href="{{url('regions/'.$region->id.'/edit')}}"> Edit</a></td>

              {{Form::model($region, array('route' => array('regions.update', $region->id),  'method'=>'PUT' ))}}
              {{method_field('DELETE')}}

               <td> <button class="btn btn-danger btn-md">Delete</button></td>


            {{form::close()}}

           </tr>
         </table>

           @endforeach

           @endif
          

        </div>

      </div>
      <!-- Heading -->

@endsection