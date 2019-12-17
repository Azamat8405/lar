@extends('base.inner')

@section('body')
	<header>
		<h2>{{$page_title}}</h2>
		<p></p>
	
	</header>

	<section class="wrapper style5" style="@if( isset($fon_bg)) {{$fon_bg}} }@else "" @endif">
		<div class="inner">

			<h3>{{$page_title}}</h3>

			@section('inner_body')

			@show

		</div>
	</section>
@endsection