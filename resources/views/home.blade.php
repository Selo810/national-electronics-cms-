
@extends('layouts.main')
@section('content')

<div class="flexslider">
   	<div class="flex-viewport" style="overflow: hidden; position: relative;">
   		<ul class="slides" style="width: 100%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(-5032px, 0, 0);">
   			<li class="clone" style="width: 100%; float: left; display: block;">
        		<img src="images/slideshow/slide-business.jpg" alt=""/>
    		</li>
       		<li style="width: 100%; float: left; display: block;" class="">
    	    	<img src="images/slideshow/slide-cis.jpg" alt=""/>
    		</li>
    		<li class="" style="width:100%; float: left; display: block;">
    	    	<img src="images/slideshow/slide-htc.jpg" alt=""/>
    		</li>
		</ul>
	</div>
</div>

<div class="text-h">
	<h2>featured products</h2>
</div>
<div class="content">
<div class="section group">
	@foreach ($products as $prd)
		<div class="col_1_of_5 span_1_of_5">
			<div class="grid-img" >
					<a href="/product/{{ $prd->id }}"><img src="{{ $prd->product_image }}" alt=""/ ></a> 
			</div>
			<p></p>
			<center><b class="left">{{ $prd->brand['brand_name'] }}&nbsp;{{ $prd->product_name }}</b></center>
			
			<!--<div class="btn right"><a href="details.html">view</a></div>-->
		</div>
	@endforeach
	
</div>
</div>


<div class="section group">
	<div class="col_1_of_3 span_1_of_3">
		<div class="grid-imgs">
				<img src="images/unlockedPhones.jpg" alt=""/>
		</div>
		<h2>Unlocked Mobile Phones</h2>
		<p>All of our GMS mobile phones are unlocked.</p>
	</div>
	
	<div class="col_1_of_3 span_1_of_3">
		<div class="grid-imgs">
				<img src="images/customer_service.jpg" alt=""/> 
		</div>
		<h2>Customer Service</h2>
		<p>Our customer representatives are here to help you. Call now!!</p>
	</div>
	<div class="col_1_of_3 span_1_of_3">
		<div class="grid-imgs">
			<img src="images/fastDelivery.jpg" alt=""/> 
		</div>
		<h2>Delivery Service</h2>
		<p>Same day delivery to Tri state area and same day shipping.</p>
	</div>
</div>


@endsection
