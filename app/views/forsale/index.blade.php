@extends('layouts.master')

@section('content')

	<style type="text/css">
		.forSaleItemforSaleItemImageContainer {
			position:relative;
			height:150px;
			width:150px;
		}
		.forSaleItemImage {
			position:absolute;
			top:0;
			bottom:0;
			left:0;
			right:0;
			margin:auto;
			max-height:150px;
			max-width:150px;
		}
	</style>

<div class="container">

	<div class="row-fluid">

		
		<div class="page-header">
			<h1>Til Sölu</h1>
			<p>Eitthvað dót sem ég þarf ekki lengur.</p>
			<p>Hafið samband ef það er áhugi á einhverju hérna.</p>
			<p>GSM: 690-8096</p>
			<p>E-mail: oskarom@gmail.com</p>
		</div>	

		<div class="offset1" id="forSaleContainer" >
			@foreach($forsaleitems as $forsaleitem)
				<div id="{{ $forsaleitem->id }}" class="forSaleItem media">
					<div class="forSaleItemforSaleItemImageContainer pull-left">
						<img class="forSaleItemImage" src={{ $forsaleitem->img }}>
					</div>
					<div class="forSaleItemDetails media-body">					
						<h4 class="media-heading">{{ $forsaleitem->title }}</h4>
						<p>{{ $forsaleitem->description }}</p>						
						<p><?php echo (number_format($forsaleitem->price, 0, ',', '.') . ' kr'); ?>
					</div>
				</div>
				<hr>			
			@endforeach
		</div>

	</div>
</div>
<!--
	<table>
		<tbody>	
			@foreach($forsaleitems as $forsaleitem)			
				<tr>
					<td><div class="forSaleItemforSaleItemImageContainer"><img class="forSaleItemImage" src={{ $forsaleitem->img }}></div></td>
					<td>
						<ul>
							<li><h2>{{ $forsaleitem->title }}</h2></li>
							<li><p>{{ $forsaleitem->description }}</p></li>
							<li><p>{{ $forsaleitem->price }}</p></li>
						</ul>
					</td>
				</tr>						 	
			@endforeach
		</tbody>
	</table>	
-->
@stop