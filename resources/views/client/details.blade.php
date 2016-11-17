<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('layouts.main', ['categories' => App\Category::get()])

@section('content')

<div class="content">
	<div class="section group">
		<div class="cont span_2_of_3" >
			<div class="single">
		      <h2><a href="/brand/{{ $product->brand->brand_name }}"> Back to {{ $product->brand->brand_name }} Products</a></h2>
		      <div class="row">
		      	<div class="col-md-6 col-lg-6">
					<a href="images/pic4.jpg"><img style="max-width: 400px;s" src="{{ $product->product_image }}"></a> 
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="para">
						<h4>{{ $product->product_name }}</h4>
					   	<div class="text-h1 top">
							<h2>{{ $product->brand->products->count() - 1 }} other <?php $plural = ($product->brand->products->count() == 1) ? "Product" : "Products"; echo $plural; ?>  in the same Brand</h2>
					  	</div>
				   	</div>					
				</div>

		      	
		      </div>

			   <div class="clear"></div>	
		   </div>
		   <div class="clear"></div>

	    <div class="div2">
        <div id="mcts1">
        	<img src="images/pic4.jpg" />
            <img src="images/pic5.jpg" />
            <img src="images/pic6.jpg" />
            <img src="images/pic7.jpg" />
            <img src="images/pic8.jpg" />
            <img src="images/pic5.jpg" />
        </div>
   		</div>
	</div>
	<div class="rsidebar span_1_of_3">
		<div class="clear"></div>
		<div class="sidebar">
	      <h2>Catogories</h2>
	      <ul class="nav1">
			   <li><a href="">Lorem ipsum dolor sit amet,Lorem Ipsum is simply dummy</a></li>
			   <li><a href="">Aliquam tincidunt mauris eu risus,Lorem Ipsum is simply</a></li>
			   <li><a href="">Vestibulum auctor dapibus neque,Lorem Ipsum is simply</a></li>
			   <li><a href="">Lorem ipsum dolor sit amet,,Lorem Ipsum is simply dummy</a></li>
			   <li><a href="">Aliquam tincidunt mauris eu risus,Lorem Ipsum is simply</a></li>
			   <li><a href="">Vestibulum auctor dapibus neque,Lorem Ipsum is simply</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="sidebar">
			<h2>Top Sellers</h2>
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					<img src="images/pic4.jpg" alt=""/>
				</div>
				<div class="text list_2_of_1">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore</p>
				 </div>
			</div>
	      <div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					  <img src="images/pic5.jpg" alt=""/>
				</div>
				<div class="text list_2_of_1">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore</p>
				 </div>
		   </div>
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					  <img src="images/pic6.jpg" alt=""/>
				</div>
				 <div class="text list_2_of_1">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore</p>
				 </div>
			  </div>
			</div>
		</div>
   </div>	
</div>


@endsection