@extends('base.inner.body')

@section('inner_body')

	@foreach($news_list as $item)
		
		<h4>{{$item->title}}</h4>
		<div>{{$item->created_at}}</div>
		{{$item->text}}, <a href="{{route('full_news', $item->url)}}">Подробнее</a>.</p>
		<hr>

	@endforeach

@endsection