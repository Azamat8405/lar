@extends('base.inner.body')

@section('inner_body')
	@if (count($coach_list) > 0)
		<section>
			<div class="box alt">
				<div class="row gtr-50 gtr-uniform">
					<div class="col-6">
						<span class="image fit"><img src="/images/coaches/{{$url}}_coaches.jpg" alt=""></span>
					</div>
					<div class="col-6">
						<span class="image fit"><img src="/images/coaches/{{$url}}_coaches2.jpg" alt=""></span>
					</div>

					@foreach ($coach_list as $coach)
						<div class="col-4">
							<span class="image fit">
								<img src="/images/{{ $coach->img }}" alt="{{ $coach->name }}">
							</span>
							<h5>{{ $coach->name }}</h5>
						</div>
					@endforeach
				</div>
			</div>
		</section>
	@endif
@endsection