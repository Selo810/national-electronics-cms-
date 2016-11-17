
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <title>National Electronics</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        
        <style type="text/css">
            #nav-mobile a {
                color: blue;
            }
            
            #nav a {
                color: white;
            }
        </style>
    </head>
    
    <body>
    <nav class="blue-grey darken-4" role="navigation">
        <div class="nav-wrapper container">
            <a href="http://web-2-project-1-selo810.c9users.io/opportunities" class="brand-logo white-text" id="logo-container" terget="_blank">Admin Panel</a>
            <ul class="right hide-on-med-and-down" id="nav">
                <li><a href="https://cms-with-auth-seanskiver.c9users.io/admin/">Home</a></li>
                <li><a href="https://cms-with-auth-seanskiver.c9users.io/admin/categories">Categories</a></li>
                <li><a href="https://cms-with-auth-seanskiver.c9users.io/admin/brands">Brands</a></li>
                <li><a href="https://cms-with-auth-seanskiver.c9users.io/admin/products">Products</a></li>
                
                <li><a href="{{ url('/logout') }}">Logout</a></li>
                
            </ul>
            <ul class="side-nav black-text" id="nav-mobile">
                <li><a href="https://cms-with-auth-seanskiver.c9users.io/admin/">Home</a></li>
                <li><a href="https://cms-with-auth-seanskiver.c9users.io/admin/categories">Categories</a></li>
                <li><a href="https://cms-with-auth-seanskiver.c9users.io/admin/brands">Brands</a></li>
                <li><a href="https://cms-with-auth-seanskiver.c9users.io/admin/products">Products</a></li>
                
                
            </ul>
            
            <a href="#" data-activates="nav-mobile" class="button-collapse pink-text">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
        
        <div class="container">  
        @yield('content')
        </div>
       
       <footer class="page-footer grey lighten-4">
          <div class="footer-copyright">
            <div class="container center black-text">
            © 2016 Copyright Text
            </div>
          </div>
        </footer>
        
       <!--Script-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>