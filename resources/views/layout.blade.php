<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--

Template 2092 Shelf

http://www.tooplate.com/view/2092-shelf

-->
    <title>SHELF - Your Online Bookstore @yield('tittle')</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">                                  <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        
        <div class="container">
            <header class="tm-site-header">
                <h1 class="tm-site-name">Shelf</h1>
                <p class="tm-site-description">Your Online Bookstore</p>
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" @yield('statusHome')><a class="nav-link active" href="/home">Home</a></li>
                            <li class="nav-item" @yield('statusCatalogs')><a class="nav-link" href="/Catalogs">Catalogs</a></li>
                            <li class="nav-item" @yield('statusTeam')><a class="nav-link" href="/Team">Our Team</a></li>
                            <li class="nav-item" @yield('statusContact')><a class="nav-link" href="/Contact">Contact Us</a></li>
                    </ul>

                    </div>
                </div>
                </nav>
                
            </header>
            
            @yield('content')
            
            <footer>
                Copyright &copy; <span class="tm-current-year">2018</span> Shelf Company 
                
                - Designed by Tooplate
            </footer>    
        </div>
        
        <!-- load JS files -->
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
        <script>     
       
            $(document).ready(function(){
                
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });

        </script>             

</body>
</html>