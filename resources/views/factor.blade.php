@extends('base')
@section('content')
<script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form class="form-horizontal">
					<?php $num=0;?>
					@foreach($basket as $key=>$item) 
					<br>
					<div class="row">
						<div class="col-md-5">
							<img src="{{ $item['img_url'] }}" width="80" height="80" alt="" title="" />
						</div>
					
						<div class="col-md-7">
						<span><b>{{ $item['name'] }}</b></span>
						<br>
						<span>تعداد:</span><span>{{ $item['num'] }}</span>
							<br>
						<span>قیمت:</span><span>{{ $item['price'] }}</span> 
							<br>
						<span>تخفیف:</span><span>{{ $item['discount'] }}</span>

						</div>
					</div>
					<hr style=" border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
					<?php $num = $num + $item['num'];?>
					@endforeach
	

					

<div class="row">

						<div class="col-md-8">
							تعداد کل:{{ $num }} 
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


		<!-- Modal 
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">با تشکر از خرید شما :)</h4>
		      </div>
		      <div class="modal-body">
		        آیا میخواهید خرید را نهایی کنید؟
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">خیر</button>
		        <button type="button" class="btn btn-primary"><a href="bank.html">بله</a></button>
		      </div>
		    </div>
		  </div>
		</div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">

	<!-- Button trigger modal -->
	<form action="" method="POST" role="form" >
		<input value="خرید" type="submit" />
	</form>
	</form>
	</div>
	</div>
	</div>

</section>
@stop