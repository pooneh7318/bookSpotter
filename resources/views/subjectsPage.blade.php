@extends('base')
@section('content')
<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form class="form-horizontal">
					@foreach($books as $book) 
					<br>
					<div class="row">
						<div class="col-md-5">
							<img src="{{ URL::asset($book->image) }}" width="80" height="80" alt="" title="" />
						</div>
					
						<div class="col-md-7">
						<span><b>{{ $book->title }}</b></span>
						<br>
						
						<span>قیمت:</span><span>{{ $book->price }}</span> 
							<br>
						<span>تخفیف:</span><span>{{ $book->discount }}</span>
						<span class="existent wew1">{{ ($book->available)? 'موجود' : 'تمام شده' }}</span>

						</div>
					</div>
					<hr style=" border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
					@endforeach
	

		
	</form>
	</div>
	</div>
	</div>

</section>
@stop