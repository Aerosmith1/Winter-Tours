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
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nlla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.;hhhhhhh</p>

<img src="img/brand.png "height="600px" class="figure-img">

</main>

@endsection
