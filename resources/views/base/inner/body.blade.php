@extends('base.inner')

@section('body')
	<header>
		<h2>Generic Page</h2>
		<p>Aliquam ut ex ut interdum donec amet imperdiet eleifend</p>
	</header>
	<section class="wrapper style5">
		<div class="inner">

			<h3>{{$page_title}}</h3>

			@section('inner_body')

			@show

		</div>
	</section>
@endsection