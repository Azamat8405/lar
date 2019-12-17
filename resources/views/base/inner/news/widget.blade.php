<header class="major">
	<h2>Новости академии</h2>
</header>
<ul class="features">
	@foreach($news as $item)
		<li class="icon">
			<a href="{{route('full_news', $item->url)}}">
				<h3>{{$item->title}}</h3>
				<div>{{$item->created_at}}</div>
				{!!$item->anons!!}
			</a>
		</li>
	@endforeach
</ul>