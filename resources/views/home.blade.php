@extends('layouts.main')

@section('content')
	<h1>Your items</h1>
		@foreach ($items as $item)
			
			{{ $item->name }}<br/>
			
		@endforeach
@stop