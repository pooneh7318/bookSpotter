@extends('base')
@section('content')
<script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form class="form-horizontal">
					<div class="row">
						<div class="col-md-8">
							کد سفارش شما: 1234567890
						</div>
						<div class="col-md-4">
							وضعیت سفارش: در حال بررسی
						</div>
					</div>
					<hr style=" border: 0;
    height: 2px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
					<br>
					<div class="row">
						<div class="col-md-8">
							<img src="../assets/img/books/ghalandaran.jpg" width="80" height="80" alt="" title="" />
						</div>
						<div class="col-md-4">
							تعداد: 1
							<br>
							قیمت  10000 تومان
							<br>
							تخفیف 2,000 تومان

						</div>
					</div>
					<hr style=" border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
					
					<div class="row">
						<div class="col-md-8">
							<img src="../assets/img/books/naz-o-niaz.jpg" width="80" height="80" alt="" title="" />
						</div>
						<div class="col-md-4">
							<br>
							تعداد: 3
							<br>
							قیمت  21000 تومان
							<br>
							تخفیف 3,000 تومان

						</div>
					</div>
					<hr style=" border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">

					<div class="row">

						<div class="col-md-8">
							تعداد کل: 4
							<br>
							قیمت  31000 تومان
							<br><br>
							<span style= "color:red" "font-weight:900">
							مجموع تخفیف ها: 5000 تومان
							</span>
							<br><br>
							<span style= "color:green" "font-weight:bold">
							قیمت نهایی: 26000 تومان
							</span>
							<br>

						</div>
					</div>
	</form>
			</div>

		</div>
	</div>
</section>
@stop