<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Administrator</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  
  {{Html::style("css/bootstrap.min.css")  }}
  <!-- Material Design Bootstrap -->

    {{Html::style("css/mdb.min.css")  }}
  <!-- Your custom styles (optional) -->

    {{Html::style("css/style.min.css")  }}
 <!--  -->
</head>

<body class="grey lighten-3">

  
  <header>


    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img src="img/brand.png" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action  waves-effect">
          Home
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          About us</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
         Our Tours</a>
        <a href="/hotels" class="list-group-item list-group-item-action waves-effect">
          Hotels</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
 
  @yield('content');
  
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

   
  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->

      {{Html::script("js/jquery-3.4.1.min.js")  }}
  <!-- Bootstrap tooltips -->
 
   {{Html::script("js/popper.min.js")  }}
  <!-- Bootstrap core JavaScript -->
 
     {{Html::script("js/bootstrap.min.js")  }}
  <!-- MDB core JavaScript -->

  {{Html::script("js/mdb.min.js")  }}
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  


</body>

</html>
