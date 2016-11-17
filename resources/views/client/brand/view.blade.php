@extends('layouts.main');

@section('content')

<p></p><p></p>
<div class="text-h">
	<h2 style="font-size:2em;">{{ $brand->brand_name }}</h2>
</div>

<div class="section group">
	@foreach ($products as $prd)
		<div class="col_1_of_5 span_1_of_5" >
			<div class="grid-img" >
					<a href="/product/{{ $prd->id }}"><img style="height: 200px;" src="{{ $prd->product_image }}" alt=""/ ></a> 
			</div>
			<p></p>
			<center><b style="font-weight:bold;text-align:center;font-size:1.1em;">{{ $prd->brand['brand_name'] }}&nbsp;{{ $prd->product_name }}</b></center>
			
			<!--<div class="btn right"><a href="details.html">view</a></div>-->
		</div>
	@endforeach
</div>

@endsection