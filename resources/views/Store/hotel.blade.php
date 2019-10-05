@extends('layouts.main')


@section('content')

<nav class="navbar navbar-expand-md navbar-info  sticky-top ">



	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="/" class="nav-link "><button class="btn bg-primary  btn-lg btn-block">Home</button></a>
		</li>

		<li class="nav-item">
			<a href="/about" class="nav-link "><button class="btn bg-primary btn-lg btn-block">About us</button></a>
		</li>

		<li class="nav-item">
			<a href="/ourtour" class="nav-link "><button class="btn bg-primary btn-lg btn-block" >Our Tours</button></a>
		</li>

		<li class="nav-item dropdown">

			<a href="#" class="nav-link " data-toggle="dropdown"  ><button class="btn bg-primary dropdown-toggle btn-lg">Hotels</button></a>

			<ul class="dropdown-menu bg-primary" aria-labelledby="dropdown_target">


@foreach($regions as $region)

			

			
				<li class="dropright" id="nested" ><a href="#"  class="dropdown-item bg-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{!!
				$region->name !!}</a>
                  


			

					<ul class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuLink">
						@foreach(\App\Hotel::where('region_id', '=', $region->id)->get() as $hotel)
    					<a class="dropdown-item bg-primary " href="{{url('/hotel/'.$hotel->id)}}">{{$hotel->name}}</a>

    						@endforeach
			</ul>
@endforeach

		</li>

	</ul>


</nav>

</header>

<main class="font-weight-lighter font-weight-bold  " style="opacity:0.8; background-color:#7895E8; padding:20px; margin-bottom:20px;">



<p>{{$the_hotel->name}}</p>
<img src="{{url('img/hotel/'.$the_hotel->image)}}">
<p>{{$the_hotel->description}}</p>

</main>

@endsection
