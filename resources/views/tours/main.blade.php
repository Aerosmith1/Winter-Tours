@extends('admin.main')

@section('content')

    <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <span>Tours Page</span>
            <span>/</span>
            <span>Dashboard</span>
        
         <p style="margin:40px;"> <a href="tours/create" class=" btn ">Create New Tour</a> </p>


         @if(count($tours)>0)

           @foreach($tours as $tour)

           <table >
            <tr>
             
            <td class="btn " > {{$tour->name}}</td>
             <td class="btn " ><a href="{{url('tours/'.$tour->id.'/edit')}}"> Edit</a></td>
             {{ Form::open(array('url'=>'tours/'.$tour->id, 'method'=>'DELETE')) }}
              {{csrf_field()}}
              {{method_field('DELETE')}}

               <td> <button class="btn btn-danger btn-md">Delete</button></td>


            {{form::close()}}

           </tr>
         </table>

           @endforeach

           @endif


           <br> <br>

        </div>

      </div>
      <!-- Heading -->

@endsection