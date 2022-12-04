<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

  </head>
  <body class="bg-warning-70">
  <div class="d-flex align-items-stretch">
			<nav id="sidebar" class="img" style="background-image: url(images/bg_1.jpg);">
				<div class="p-4">
				  <img src="{{ asset('images/logo_bca2.png') }}" width="120" height="110" class="me-2">
		  		<h6><a class="logo">PT Bank Central Asia</a></h6>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="/Home/Index"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="/Admin"><span class="fa fa-user mr-3"></span> Admin</a>
	          </li>
            <li>
              <a href="/Karyawan/Index"><span class="fa fa-user mr-3"></span> Karyawan</a>
	          </li>
            <li>
              <a href="/Jabatan"><span class="fa fa-user mr-3"></span> Jabatan</a>
	          </li>
	          <li>
              <a href="/Gaji"><span class="fa fa-money mr-3"></span> Gaji</a>
	          </li>
	          <li>
              <a href="/Laporan"><span class="fa fa-print mr-3"></span> Laporan</a>
	          </li>
	        </ul>	       

	      </div>
    	</nav>


        <!-- Page Content  -->
      <!-- <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Home</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div> -->
      <div class="container">
        <div id="content" class="p-4 p-md-5 pt-5">
          @yield('container')
        </div>
      </div>

		</div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>