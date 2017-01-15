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

														<img src="assets/img/2.jpg" width="870" height="330" alt="متفاوت باشید و متفاوت بمانید " title="متفاوت باشید و متفاوت بمانید " />

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
													<a  href="pages/book103.html" title="شازده کوچولو" class="slideItem">
														<img class="incredible" src="assets/img/books/Shazde Kuchulu.jpg" width="607" height="300" alt="شازده کوچولو" title="شازده کوچولو" />
												</a>
												<a  href="pages/book100.html" title="قلندران پيژامه پوش" class="slideItem">
													<img class="incredible" src="assets/img/books/ghalandaran.jpg" width="607" height="300" alt="قلندران پيژامه پوش" title="قلندران پيژامه پوش" />
											</a>

											<a  href="pages/book101.html" title="ناز و نياز " class="slideItem">
												<img class="incredible" src="assets/img/books/naz-o-niaz.jpg" width="607" height="300" alt="ناز و نياز " title="ناز و نياز " />
										</a>

										<a  href="pages/book102.html" title="امپراتور کوتوله ی سرزمین لی لی پوت " class="slideItem">
											<img class="incredible" src="assets/img/books/lilipoot.jpg" width="607" height="300" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
									</a>


								</div>

								<div class="ff">
									<ul class="tabs">
										<li><a href="pages/book103.html" class="tabItem"><span>شازده کوچولو</span></a></li>
										<li><a href="pages/book100.html" class="tabItem"><span>قلندران پيژامه پوش</span></a></li>
										<li><a href="pages/book101.html" class="tabItem"><span>ناز و نياز </span></a></li>
										<li><a href="pages/book102.html" class="tabItem"><span>امپراتور کوتوله ی سرزمین لی لی پوت </span></a></li>
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

									<li>
										<div class="wall">
											<a href="pages/book102.html">
												<img src="assets/img/books/ghalandaran.jpg" width="80" height="80" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
											</a>
										</div>
										<div class="text">
											<h3>
												<a href="pages/book102.html">امپراتور کوتوله ی سرزمین لی لی پوت </a>
											</h3>
											<div class="row">
											<div class="col-md-5">
											<span class="price"><s>6,000 تومان</s></span>
											</div>
											</div>
											<span class="discount"><b>5,000 تومان</b></span>
											<span class="existent wew1">موجود</span>
										</div>
									</li>

									<li>
										<div class="wall">
											<a href="book103.html">
												<img src="assets/img/books/Shazde Kuchulu.jpg" width="80" height="80" alt="شازده کوچولو" title="شازده کوچولو" />
											</a>
										</div>
										<div class="text">
											<h3>
												<a href="book103.html">شازده کوچولو</a>
											</h3>
											<div class="row">
											<div class="col-md-6">
											<span class="price"><s>10،000 تومان</s></span>
											</div>
											</div>
											<span class="discount"><b>7,000 تومان</b></span>
											<span class="existent wew1">موجود</span>
										</div>
									</li>

									<li>
										<div class="wall">
											<a href="pages/book101.html">
												<img src="assets/img/books/naz-o-niaz.jpg" width="80" height="80" alt="ناز و نياز " title="ناز و نياز " />
											</a>
										</div>
										<div class="text">
											<h3>
												<a href="pages/book101.html">ناز و نياز </a>
											</h3>
											<br><br><br>
											<div class="row">
											<div class="col-md-6">
											<span class="price">15،000 تومان</span>
											</div>
											<div class="col-md-6">
											<span class="existent wew1">موجود</span>
											</div>
											</div>
											<span class="discount"></span>
											
										</div>
									</li>
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
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book102.html">
													<img src="assets/img/books/lilipoot.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book102.html">امپراتور کوتوله ی سرزمین لی لی پوت </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
							
												</ul>
												<div class="price"><span><s>6,000</s></span> تومان &nbsp <span class="discount" style="color:black"><b>5,000 تومان</b></span> </div>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/p506.html">
													<img src="assets/img/books/Shazde Kuchulu.jpg" width="131" height="131" alt="شازده کوچولو" title="شازده کوچولو" />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book103.html">شازده کوچولو</a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span><s>10,000</s></span> تومان &nbsp <span class="discount" style="color:black"><b>7,000 تومان</b></span> </div>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book101.html">
													<img src="assets/img/books/naz-o-niaz.jpg" width="131" height="131" alt="ناز و نياز " title="ناز و نياز " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book101.html">ناز و نياز </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>15،000</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book100.html">
													<img src="assets/img/books/ghalandaran.jpg" width="131" height="131" alt=" قلندران پيژامه پوش " title=" قلندران پيژامه پوش " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book100.html"> قلندران پيژامه پوش </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>3,500</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book102.html">
													<img src="assets/img/books/lilipoot.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book102.html">امپراتور کوتوله ی سرزمین لی لی پوت </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
							
												</ul>
												<div class="price"><span><s>6,000</s></span> تومان &nbsp <span class="discount" style="color:black"><b>5,000 تومان</b></span> </div>
											</div>
										</div>
									</div>

									

									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book101.html">
													<img src="assets/img/books/naz-o-niaz.jpg" width="131" height="131" alt="ناز و نياز " title="ناز و نياز " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book101.html">ناز و نياز </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>15،000</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book100.html">
													<img src="assets/img/books/ghalandaran.jpg" width="131" height="131" alt=" قلندران پيژامه پوش " title=" قلندران پيژامه پوش " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book100.html"> قلندران پيژامه پوش </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>3,500</span> تومان</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="box">
							<div class="title bo3">
								<h2>محبوب ترین محصولات</h2>
							</div>
							<div class="slider-product">
								<div id="owl-demo3">
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book102.html">
													<img src="assets/img/books/lilipoot.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book102.html">امپراتور کوتوله ی سرزمین لی لی پوت </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
							
												</ul>
												<div class="price"><span><s>6,000</s></span> تومان &nbsp <span class="discount" style="color:black"><b>5,000 تومان</b></span> </div>
											</div>
										</div>
									</div>

									

									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book101.html">
													<img src="assets/img/books/naz-o-niaz.jpg" width="131" height="131" alt="ناز و نياز " title="ناز و نياز " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book101.html">ناز و نياز </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>15،000</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book100.html">
													<img src="assets/img/books/ghalandaran.jpg" width="131" height="131" alt=" قلندران پيژامه پوش " title=" قلندران پيژامه پوش " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book100.html"> قلندران پيژامه پوش </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>3,500</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book102.html">
													<img src="assets/img/books/lilipoot.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book102.html">امپراتور کوتوله ی سرزمین لی لی پوت </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
							
												</ul>
												<div class="price"><span><s>6,000</s></span> تومان &nbsp <span class="discount" style="color:black"><b>5,000 تومان</b></span> </div>
											</div>
										</div>
									</div>

							

									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book101.html">
													<img src="assets/img/books/naz-o-niaz.jpg" width="131" height="131" alt="ناز و نياز " title="ناز و نياز " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book101.html">ناز و نياز </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>15،000</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book100.html">
													<img src="assets/img/books/ghalandaran.jpg" width="131" height="131" alt=" قلندران پيژامه پوش " title=" قلندران پيژامه پوش " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book100.html"> قلندران پيژامه پوش </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>3,500</span> تومان</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="box lb">
							<div class="title bo4">
								<h2>پیشنهاد ما</h2>
							</div>
							<div class="slider-product">
								<div id="owl-demo4">
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book102.html">
													<img src="assets/img/books/lilipoot.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book102.html">امپراتور کوتوله ی سرزمین لی لی پوت </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
							
												</ul>
												<div class="price"><span><s>6,000</s></span> تومان &nbsp <span class="discount" style="color:black"><b>5,000 تومان</b></span> </div>
											</div>
										</div>
									</div>

									
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book101.html">
													<img src="assets/img/books/naz-o-niaz.jpg" width="131" height="131" alt="ناز و نياز " title="ناز و نياز " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book101.html">ناز و نياز </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>15،000</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book100.html">
													<img src="assets/img/books/ghalandaran.jpg" width="131" height="131" alt=" قلندران پيژامه پوش " title=" قلندران پيژامه پوش " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book100.html"> قلندران پيژامه پوش </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>3,500</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book102.html">
													<img src="assets/img/books/lilipoot.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book102.html">امپراتور کوتوله ی سرزمین لی لی پوت </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
							
												</ul>
												<div class="price"><span><s>6,000</s></span> تومان &nbsp <span class="discount" style="color:black"><b>5,000 تومان</b></span> </div>
											</div>
										</div>
									</div>

									

									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book101.html">
													<img src="assets/img/books/naz-o-niaz.jpg" width="131" height="131" alt="ناز و نياز " title="ناز و نياز " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book101.html">ناز و نياز </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>15،000</span> تومان</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product">
											<div class="wall">
												<a href="pages/book100.html">
													<img src="assets/img/books/ghalandaran.jpg" width="131" height="131" alt=" قلندران پيژامه پوش " title=" قلندران پيژامه پوش " />
												</a>
											</div>
											<div class="info">
												<h3>
													<a href="pages/book100.html"> قلندران پيژامه پوش </a>
												</h3>
												<ul>
													<li class="wew1">موجود</li>
													
												</ul>
												<div class="price"><span>3,500</span> تومان</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>

		</div>
	</div>
</section>
@stop