@extends('base.inner.body')

@section('inner_body')

	<div>{{$full_news->created_at}}</div>

	{{$full_news->text}}

	<div class="all_link"><a href="/news/">все новости</a></div>

@endsection