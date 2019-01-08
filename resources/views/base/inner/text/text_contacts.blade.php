@extends('base.inner.body')

@section('inner_body')

	<div class="row">
		<div class="col-6 col-12-medium">
			<ul class="alt">
				<li>Телефон: +78672610702</li>
				<li>Администрация: +78672610722</li>
				<li>Email: vldacsport@gmail.com</li>
				<li>Адрес: г.Владикавказ ул.Цоколаева 21</li>
				<li>
					<ul class="icons">
						<li>Instagram <a href="http://instagram.com/vldacsport" target="_blank" class="icon fa-instagram"><span class="label">@vldacsport</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-6 col-12-medium">
			<ul class="alt">
				<li>
					<img src="/images/min_sport_logo.jpg" class="contact_logo">
					<a href="http://minsport.gov.ru" target="_blank">Министерство спорта РФ</a></li>
				<li>
					<img src="/images/min_sport_rso_logo.png" class="contact_logo">
					<a href="http://minsport.alania.gov.ru" target="_blank">Министерство спорта Республики РСО-Алании</a></li>
				<li>
					<img src="/images/vl_logo.png" class="contact_logo">
					<a href="http://vladikavkaz-osetia.ru" target="_blank">АМС города Владикавказ</a></li>
				<li>
					<img src="/images/ftr_logo.png" class="contact_logo">
					<a href="http://tennis-russia.ru" target="_blank">Федерация тенниса РФ</a></li>
				<li>
					<img src="/images/logo-header.png" class="contact_logo">
					<a href="http://www.rfs.ru" target="_blank">РФС</a></li>
				<li>
					<img src="/images/fbrf_logo.png" class="contact_logo">
					<a href="http://wrestrus.ru" target="_blank">Федерация борьбы РФ</a></li>
			</ul>
		</div>
	</div>

	{!!$text->text!!}
@endsection