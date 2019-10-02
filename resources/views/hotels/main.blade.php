@extends('admin.main')

@section('content')

    <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <span>Create Hotels Page</span>
            <span>/</span>
            <span>Dashboard</span>
        
         <p style="margin:40px;"> <a href="regions/create" class=" btn ">Create New Region</a> </p>
		    
           @if(count($regions)>0)

           @foreach($regions as $region)

           <table >
            <tr>
             
            <td class="btn " > {{$region->name}}</td>
             <td class="btn " ><a href="{{url('regions/'.$region->id.'/edit')}}"> Edit</a></td>
            
              {{ Form::open(array('url'=>'regions/'.$region->id, 'method'=>'DELETE')) }}
              {{csrf_field()}}
              {{method_field('DELETE')}}

               <td> <button class="btn btn-danger btn-md">Delete</button></td>


            {{form::close()}}

           </tr>
         </table>

           @endforeach

           @endif

           <br> <br>

          <p style="margin:40px;"> <a class="btn" href="{{url('hotels/create')}}"> Create Hotel</a></p>

            @if(count($hotels)>0)

           @foreach($hotels as $hotel)

           <table >
            <tr>
             
            <td class="btn " > {{$hotel->name}}</td>
             <td class="btn " ><a href="{{url('hotels/'.$hotel->id.'/edit')}}"> Edit</a></td>
             {{ Form::open(array('url'=>'hotels/'.$hotel->id, 'method'=>'DELETE')) }}
              {{csrf_field()}}
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