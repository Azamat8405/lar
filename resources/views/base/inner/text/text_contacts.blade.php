@extends('base.inner.body')

@section('inner_body')

	<div class="row">
		<div>
			<strong>Учредитель:</strong> Комитет молодежной политики физкультуры и спорта АМС г. Владикавказ
			Республика Северная Осетия - Алания, г. Владикавказ, пл. Штыба. д. 2
		</div>
		<div class="contact_persons">
			<div>
				<strong>Директор:</strong><br>Бекузарова Диана Казбековна
			</div>
			<div>
				<strong>Заместитель директора по УСР:</strong><br>Хамицаева Альбина Ахсарбековна
			</div>
			<div>
				<strong>Заместитель директора по АХР:</strong><br>Кибизов Батраз Аланович
			</div>
		</div>
		<div class="col-6 col-12-medium">
			<ul class="alt">
				<li>Телефон: +7 8672 61 07 02</li>
				<li>Администрация: +7 8672 61 07 22</li>
				<li>Email: vldacsport@gmail.com</li>
				<li>РСО - Алания, г. Владикавказ, ул. Цоколаева, д. 21</li>
				<li>
					<ul class="icons">
						<li>Instagram <a href="http://instagram.com/vldacsport" target="_blank" class="icon fa-instagram"><span class="label">@vldacsport</span></a></li>
					</ul>
				</li>
			</ul>


			<h4>Отделение тенниса "Асгард"</h4>
			<ul class="alt">
				<li>Телефон: +7 8672 61 07 02</li>
				<li>Республика Северная Осетия - Алания, г. Владикавказ, ул. Цоколаева, д. 21</li>
			</ul>

			<h4>Отделение футбола "Барс"</h4>
			<ul class="alt">
				<li>Телефон: +7 8672 700 599</li>
				<li>Республика Северная Осетия - Алания, г. Владикавказ, ул. Глинки, д.1</li>
			</ul>


			<h4>Отделение спортивной борьбы "Академия борьбы"</h4>
			<ul class="alt">
				<li>Телефон: +7 8672 707 955</li>
				<li>Республика Северная Осетия - Алания, г. Владикавказ, пр. Коста, д. 20 В</li>
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
			{!!$text->text!!}
		</div>
	</div>
	
@endsection