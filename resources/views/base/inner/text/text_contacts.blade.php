@extends('base.inner.body')

@section('inner_body')

	<div class="row">
		<div class="col-6 col-12-medium">
			<ul class="alt">
				<li>Телефон: +78672610702</li>
				<li>Администрация: +78672610722</li>
				<li>Email: vldacsport@gmail.com</li>
				<li>
					<ul class="icons">
						<li><a href="http://instagram.com/vldacsport" target="_blank" class="icon fa-instagram"><span class="label">@vldacsport</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-6 col-12-medium">
			<ul class="alt">
				<li><a href="http://minsport.gov.ru" target="_blank">Министерство спорта РФ</a></li>
				<li><a href="http://minsport.alania.gov.ru" target="_blank">Министерство спорта Республики РСО-Алании</a></li>
				<li><a href="http://vladikavkaz-osetia.ru" target="_blank">АМС города Владикавказ</a></li>
				<li><a href="http://tennis-russia.ru" target="_blank">Федерация тенниса РФ</a></li>
				<li><a href="http://www.rfs.ru" target="_blank">РФС</a></li>
				<li><a href="http://wrestrus.ru" target="_blank">Федерация борьбы РФ</a></li>
			</ul>
		</div>
	</div>

	{!!$text->text!!}
@endsection