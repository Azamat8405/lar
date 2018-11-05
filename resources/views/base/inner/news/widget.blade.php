<header class="major">
	<h2>Accumsan mus tortor nunc aliquet</h2>
	<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
	fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
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