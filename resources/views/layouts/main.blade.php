<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



 {{Html::style("front/styles/style.css")  }}

<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/d6d099e5e8.js" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<header>
<div class="jumbotron " style="margin-bottom:0px; font-family: 'Open Sans Condensed', sans-serif; font-size:26px; ">

<h1>Winter Tours</h1>
<p>Armenia is magical in winter,
celebrate new year with us.</p>

 </div>
<nav class="navbar navbar-expand-md navbar-info  sticky-top ">



	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="/" class="nav-link "><button class="btn bg-primary  btn-lg btn-block">Home</button></a>
		</li>

		<li class="nav-item">
			<a href="/about" class="nav-link "><button class="btn bg-primary btn-lg btn-block">About us</button></a>
		</li>

		<li class="nav-item">
			<a href="ourtour" class="nav-link "><button class="btn bg-primary btn-lg btn-block" >Our Tours</button></a>
		</li>

		<li class="nav-item dropdown">

			<a href="#" class="nav-link " data-toggle="dropdown"  ><button class="btn bg-primary dropdown-toggle btn-lg">Hotels</button></a>

			<ul class="dropdown-menu bg-primary" aria-labelledby="dropdown_target">

				<li class="dropright" id="nested" ><a href="#"  class="dropdown-item bg-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tsaghkacor</a>

					<ul class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuLink">
    					<a class="dropdown-item bg-primary " href="#">Best Westearn</a>
    					<a class="dropdown-item bg-primary " href="#">Best Westearn</a>
    					<a class="dropdown-item bg-primary " href="#">Best Westearn</a>
  					</ul>


				</li>
				<li class="dropright" id="nested" ><a href="#"  class="dropdown-item bg-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Axveran</a>

					<ul class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuLink2">
    					<a class="dropdown-item bg-primary " href="#">Prk Resort</a>
    					<a class="dropdown-item bg-primary " href="#">Best Westearn</a>
    					<a class="dropdown-item bg-primary " href="#">Best Westearn</a>
  					</ul>


				</li>

			</ul>


		</li>

	</ul>


</nav>



</header>

<main class="font-weight-lighter font-weight-bold  " style="opacity:0.8; background-color:#7895E8; padding:20px; margin-bottom:20px;">
	
@yield('content');

</main>


<footer>
	
<a href="https://www.youtube.com/"><i class="fab fa-youtube btn-primary btn-lg"></i></a>
<a href="https://www.google.com/"><i class="fab fa-google-plus btn-primary btn-lg"></i></a>
<a href="https://www.facebook.com/"><i class="fab fa-facebook-square btn-primary btn-lg"></i></a>






	
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>