@extends('layouts.master')

@section('content')
	<h1>DEV</h1>
	<h1>For Sale</h1>
	@foreach($forsaleitems as $forsaleitem)
	 	<div><img src={{ $forsaleitem->img }}></div>
		<div>{{ $forsaleitem->title }}</div>
		<div>{{ $forsaleitem->description }}</div>
		<div>{{ $forsaleitem->price }}</div>
	@endforeach
@stop