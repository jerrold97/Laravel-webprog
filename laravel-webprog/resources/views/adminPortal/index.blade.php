@extends('adminPortal.masterfile')
@section('headscript')
	<script>
	
	$(function() {

		var d1 = [];
		for (var i = 0; i < 14; i += 0.5) {
			d1.push([i, Math.sin(i)]);
		}

		var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

		// A null signifies separate line segments

		var d3 = [[0, 12], [7, 12], null, [7, 2.5], [12, 2.5]];

		$.plot("#placeholder", [ d1, d2, d3 ]);

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
@stop
@section('content')
	 <div class="col-sm-10 content">
	 	
		<div style="width: 50px; height:30px;"></div>
		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">Daily Chart</div>
				<div class="panel-body">
					<div id="placeholder" class="demo-placeholder"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<ul class="list-group">
				<a href="#" class="list-group-item">Notification<span class="badge">9</span></a>
				<a href="#" class="list-group-item">Messages<span class="badge">22</span></a>
				<a href="#" class="list-group-item">New Clients<span class="badge">3</span></a>
				<a href="#" class="list-group-item">New Suppliers<span class="badge">7</span></a>
				<a href="#" class="list-group-item">Today Sales<span class="badge">9</span></a>
				<a href="#" class="list-group-item">Today Purchases<span class="badge">8</span></a>
			</ul>
		</div>
		
		<div class="col-md-12">
			 <table class="table table-bordered table-striped">
			 	<thead>
			 		<tr class="table-head">
			 			<th>S.no</th>
			 			<th>Product Code</th>
			 			<th>Product Image</th>
			 			<th>Product Description</th>
			 			<th>Product Unit</th>
			 			<th>Product Cost</th>
			 			<th>Product Price</th>
			 			<th>Avl. Qty.</th>
			 			<th>Actions</th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<tr>
			 			<td>1</td>
			 			<td>00018297</td>
			 			<td>^_^</td>
			 			<td>Milo</td>
			 			<td>Qty</td>
			 			<td>800/=</td>
			 			<td>900/=</td>
			 			<td>30</td>
			 			<td>
				 			<div class="dropdown">
				 				<button class="btn btn-danger" data-toggle="dropdown">Action <span class="caret"></span></button>
				 				<ul class="dropdown-menu pull-right">
				 					<li><a href="#">Add Product</a></li>
				 					<li><a href="#">Edit Product</a></li>
				 					<li><a href="#">Delete Product</a></li>
				 					<li><a href="#">Print Product Details</a></li>
				 				</ul>
				 			</div>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td>1</td>
			 			<td>00018297</td>
			 			<td>^_^</td>
			 			<td>Milo</td>
			 			<td>Qty</td>
			 			<td>800/=</td>
			 			<td>900/=</td>
			 			<td>30</td>
			 			<td>
				 			<div class="dropdown">
				 				<button class="btn btn-danger" data-toggle="dropdown">Action <span class="caret"></span></button>
				 				<ul class="dropdown-menu pull-right">
				 					<li><a href="#">Add Product</a></li>
				 					<li><a href="#">Edit Product</a></li>
				 					<li><a href="#">Delete Product</a></li>
				 					<li><a href="#">Print Product Details</a></li>
				 				</ul>
				 			</div>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td>1</td>
			 			<td>00018297</td>
			 			<td>^_^</td>
			 			<td>Milo</td>
			 			<td>Qty</td>
			 			<td>800/=</td>
			 			<td>900/=</td>
			 			<td>30</td>
			 			<td>
				 			<div class="dropdown">
				 				<button class="btn btn-danger" data-toggle="dropdown">Action <span class="caret"></span></button>
				 				<ul class="dropdown-menu pull-right">
				 					<li><a href="#">Add Product</a></li>
				 					<li><a href="#">Edit Product</a></li>
				 					<li><a href="#">Delete Product</a></li>
				 					<li><a href="#">Print Product Details</a></li>
				 				</ul>
				 			</div>
			 			</td>
			 		</tr>
			 	</tbody>
			 </table>
		</div>
@stop
@section('modals')
    
    
@endsection
@section('scripts')


@endsection