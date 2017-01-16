@extends('base')

@section('content')

				<section id="one">
					<div class="container">
						<div class="row">

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="row">
									<div class="wr">
										<div class="slider-one">
											<div id="owl-demo-slider" class="owl-carousel owl-theme">

												<div class="item">
													<a href="#">

														<img src="{{ URL::asset('img/2.jpg') }}" width="870" height="330" alt="متفاوت باشید و متفاوت بمانید " title="متفاوت باشید و متفاوت بمانید " />

													</a>
												</div>

												<div class="item">
													<a href="#">

														<img src="assets/img/1.jpg" width="870" height="330" alt="" title="" />

													</a>
												</div>

												<div class="item">
													<a href="#">

														<img src="assets/img/3.jpg" width="870" height="330" alt="" title="" />

													</a>
												</div>



											</div>
										</div>



										<div id="content" class="neg">
											<article id="amazingoffer" class="dkbox mrg-bottom">
												<div class="slides center">
												 @foreach ($books['rand1'] as $book)
                                            <a style="display: none;" href="{{ asset('/book')."/".$book->id}}" title="{{$book->title}}" class="slideItem">
                                                <img class="incredible" src="{{ URL::asset($book->image) }}" width="607" height="300" alt="لنوو زد 5170 گرافیک 4 گیگابایت" title="لنوو زد 5170 گرافیک 4 گیگابایت" />
                                            </a>
                                        @endforeach


								</div>

								<div class="ff">
									<ul class="tabs">
										 @foreach ($books['rand2'] as $book)
                                                <li>
                                                    <a href="{{ asset('/book')."/".$book->id}}" class="tabItem">
                                                        <span>{{$book->title}}</span>
                                                    </a>
                                                </li>
                                            @endforeach
									</ul>
								</div>
							</article>
						</div>


					</div>
				</div>
			</div>

</div>
</div>
</section>

<section id="two">
	<div class="container">
		<div class="row">


			<div class="col-xs-12 col-sm-4 col-lg-3">
				<div class="row">
					<div class="wr">
						<div class="box">
							<div class="title bo1">
								<h2>پرفروش ترین محصولات</h2>
							</div>
							<div class="list">
								<ul>

									@foreach ($books['rand3'] as $book)
                                        <li>
                                            <div class="wall">
                                                <a href="{{ asset('/book')."/".$book->id}}">
                                                    <img src="{{ URL::asset($book->image) }}" width="80" height="80" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
                                                </a>
                                            </div>
                                            <div class="text">
                                                <h3>
                                                    <a href="{{ asset('/book')."/".$book->id}}">&nbsp; {{$product->title}} </a>
                                                </h3>
                                                <span class="price"><span>{{$book->price}}</span> تومان</span>
                                                <span class="rating score-callback" data-score="0"></span>
                                                <span class="existent wew1">{{ ($book->available)? 'موجود' : 'تمام شده' }}</span>
                                            </div>
                                        </li>
                                        @endforeach
								</ul>
							</div>
						</div>
						<div class="box">
							<div class="title bo4">
								<h2>پیگیری سفارش</h2>
							</div>
							<div class="boxpam">
								<p>برای رهگیری سفارش ، لطفا کد رهگیری 10 رقمی سفارش خود را وارد کنید</p>
								<form action="pages/orderTracking.html" >
									<div>
										<input type="text" name="track" maxlength="10" minlength="10"/>
										<input value="پیگیری" type="submit" />
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 col-lg-9">
				<div class="row">
					<div class="wl">
						<div class="box">
							<div class="title bo2">
								<h2>جدیدترین محصولات</h2>
							</div>
							<div class="slider-product">
								<div id="owl-demo2">
									  @foreach ($books['latest'] as $book)
                                            <div class="item">
                                                <div class="product">
                                                    <div class="wall">
                                                        <a href="{{ asset('/book')."/".$book->id}}">
                                                            <img src="{{ URL::asset($book->image) }}" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h3>
                                                            <a href="{{ asset('/book')."/".$book->id}}"> {{ $book->title }} </a>
                                                        </h3>
                                                        <ul>
                                                            <li class="wew1">{{ ($book->available)? 'موجود' : 'تمام شده' }}</li>
                                                            <li>
                                                                <span class="rating score-callback" data-score="4"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="price"><span>{{ $book->price }}</span> تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
								</div>
							</div>
						</div>



						<div class="box">
							<div class="title bo3">
								<h2>محبوب ترین محصولات</h2>
							</div>
							<div class="slider-product">
								<div id="owl-demo3">
									   @foreach ($books['rand1'] as $book)
                                            <div class="item">
                                                <div class="product">
                                                    <div class="wall">
                                                        <a href="{{ asset('/book')."/".$book->id}}">
                                                            <img src="{{ URL::asset($book->image) }}" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h3>
                                                            <a href="{{ asset('/book')."/".$book->id]}}"> {{ $book->id }} </a>
                                                        </h3>
                                                        <ul>
                                                            <li class="wew1">{{ ($book->available)? 'موجود' : 'تمام شده' }}</li>
                                                            <li>
                                                                <span class="rating score-callback" data-score="4"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="price"><span>{{ $book->price }}</span> تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
								</div>
							</div>
						</div>



						<div class="box lb">
							<div class="title bo4">
								<h2>پیشنهاد ما</h2>
							</div>
							<div class="slider-product">
								<div id="owl-demo4">
									 @foreach ($books['rand2'] as $book)
                                            <div class="item">
                                                <div class="product">
                                                    <div class="wall">
                                                        <a href="{{ asset('/book')."/".$book->id}}">
                                                            <img src="{{ URL::asset($book->image) }}" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h3>
                                                            <a href="{{ asset('/book')."/".$book->id}}"> {{ $book->title }} </a>
                                                        </h3>
                                                        <ul>
                                                            <li class="wew1">{{ ($book->available)? 'موجود' : 'تمام شده' }}</li>
                                                            <li>
                                                                <span class="rating score-callback" data-score="4"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="price"><span>{{ $book->price }}</span> تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>

		</div>
	</div>
</section>

@endsection
