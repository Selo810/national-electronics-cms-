
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>National Electronics</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="/client/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/client/css/styles.css" rel="stylesheet" type="text/css" media="all" />

<link href="client/css/lightbox.css" rel="stylesheet" type="text/css" media="all" />

<!--slider-->
<script src="client/js/modernizr.js"></script>
 <!-- jQuery -->
 
<script type="text/javascript" src="client/js/jquery.js"></script>
<script src="client/js/jquery.min.js"></script>
<script src="client/js/jquery.lightbox.js"></script>
<script src="client/js/jquery-slider.js"></script>
<script>window.jQuery || document.write('<script src="client/js/libs/jquery-1.7.min.js">\x3C/script>')</script>
<!-- FlexSlider -->
<script src="client/js/jquery.flexslider.js"></script><!--slider-->
<script src="client/js/modernizr.js"></script>
 <!-- jQuery -->

<script src="client/js/jquery.flexslider.js"></script>

<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>
@yield('formStyle')



</head>

<body>
	
<div class="wrap"> 
	<div class="header">
		<div class="logo">
				<a href="index.html"><img src="/images/logo-header.png" alt=""  title="logo"/></a>
		</div>
		
		<div class="nav-right">
			<ul class="nav">
				<li class="active"><a href="https://cms-with-auth-seanskiver.c9users.io">Home</a></li>
				<li><a href="https://cms-with-auth-seanskiver.c9users.io/client/about">About</a></li>
				<li><a href="service.html">Service</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<p>Toll Free: 800.835.7186</p>
		</div>
		<div class="clear"></div>
	</div>
<div class="menu-bg">
	<ul class="menu">

		<li><a href="https://cms-with-auth-seanskiver.c9users.io">Home</a></li>
		@foreach ($categories as $cat)
			<li><a href="">{{ $cat->category_name }}</a>
				<ul>
					@foreach($cat->brands as $brand) 
						<li><a href="/brand/{{ $brand->brand_name }}">{{ $brand->brand_name }}</a></li>
					@endforeach
				</ul>
			</li>
		@endforeach
		
	</ul> 

	<div class="clear"></div>
	
</div>

               @yield('content')
               
               
               
               @yield('form')
   
<div class="footer">
	<div class="section group">
		<div class="col_1_of_4 span_1_of_4">
			<h2>New York</h2>
			<ul class="nav1">
				<p>1201 Broadway, Suite 806</p>
				<p>New York, NY 10001</p>
				<p>Local: 646.366.8003</p>
				<p>Fax: 646.366.8005</p>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Long Island</h2>
			<ul class="nav1">
				<p>500 Smith Street, Farmingdale,</p>
				<p>New York 11735</p>
				<p>Toll-free: 800.835.7186</>
				<p>Local: 631.683.8000 | Fax: 631.769.4000</p>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Follow Us</h2>
			<ul class="nav">
				<li><a href=""><img src="images/facebook.png" title="facebook" alt=""/></a></li>
				<li><a href=""><img src="images/twitter.png" title="twitter" alt=""/></a></li>
				<li><a href=""><img src="images/rss.png" title="rss" alt=""/></a></li>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			
			<ul class="nav">
				<p><a href="https://cms-with-auth-seanskiver.c9users.io">Home</a></p>
				<p><a href="https://cms-with-auth-seanskiver.c9users.io/client/about">About</a></p>
				<p><a href="https://cms-with-auth-seanskiver.c9users.io/client/">Contact</a></p>
				<p><a href="https://cms-with-auth-seanskiver.c9users.io/client/register">New Customer Form</a></p>
			</ul>
		</div>
	</div>
</div>
<div class="footer1">
		<p class="w3-link">© Copy Right 2016 &nbsp; <a href="#"></a></p>
	</div>
</div>

</body>
</html>