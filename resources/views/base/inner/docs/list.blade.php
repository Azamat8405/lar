@extends('base.inner.body')

@section('inner_body')
	@if (count($docs_list) > 0)
		<section>
			<div class="box alt">

				@foreach ($docs_list as $docs)

					@if(isset($docs['categ']))
						<h4>{{$docs['categ']->title}}</h4>
					@endif

					@foreach($docs['list'] as $doc)
						<a target="_blank" href="{{ $doc->url }}">{{ $doc->title }}</a><br>
					@endforeach
					<br>
				@endforeach
			</div>
		</section>
	@endif
@endsection