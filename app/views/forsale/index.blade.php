@extends('layouts.master')

@section('content')

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

@stop