<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<META NAME="Author" CONTENT="elmira-pooneh-sima">
		<META NAME="creator" CONTENT="elmira-pooneh-sima">
			<meta name="description" content="فروشگاه اینترنتی کتاب">
			<meta name="application-name" content="کتاب یاب">
			<meta name="theme-color" content="#ffffff">

			<meta name="keywords" content="فروشگاه ، کتاب">

			<title>کتاب یاب</title>
			<script>
			var site_place = 'user';
			var site_dir = "rtl";
			var site_lang = "fa";
			var site_url = "localhost/";
			var template_dir = "../assets/";
			</script>

			<!-- start template css -->
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cyber.css') }}" />
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" />
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}" />
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.carousel.css') }}" />
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.theme.css') }}" />
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/popModal.css') }}"/>
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lightbox.css') }}"/>
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />
			<link rel="stylesheet" type="text/css" href="{{ URL::asset('js/plugin/raty/jquery.raty.css') }}" />

			<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>

			<!-- start our js -->
			<script type="text/javascript" src="{{ URL::asset('js/lang/fa.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/sonic.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/main2.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/lib2.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/basket2.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/scriptoffer.js') }}"></script>
			<!-- end our js -->

			<script src="{{ URL::asset('js/plugin/raty/jquery.raty.js') }}"></script>
			<script src="{{ URL::asset('js/plugin/raty/javascripts/labs.js') }}" type="text/javascript"></script>
			<script src="{{ URL::asset('js/app.js') }}"></script>
			<script>
    var site_url = "{{ asset('/') }}";
    getBasket();
</script>
			</head>

			<body>
			<header>
			  <div class="container">
				<div class="row">
				  <div class="top">
					<div class="one">

					  <div class="modal fade" id="login_success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <h4 class="modal-title" id="myModalLabel">پروفایل کاربری</h4>
							</div>
							<div class="modal-body">
							  شما با موفقیت وارد شدید
							  
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="modal fade" id="logout_success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <h4 class="modal-title" id="myModalLabel">پروفایل کاربری</h4>
							</div>
							<div class="modal-body">
							  شما با موفقیت خارج شدید
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
							</div>
						  </div>
						</div>
					  </div>

					  <ul>
						@if(Auth::check())
                            <li id="userOrLogOut"><a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           
                                        <i></i>خروج</a></li>
										
                            <li id="registerOrProfile"><a href="<?php  ?>pages/profile.php"><i></i>{{ Auth::user()->name }}</a></li>
                        @else
                            <li><a href="{{ URL::to('login') }}"><i></i>ورود اعضا</a></li>
                            <li id="registerOrProfile"><a href="{{ URL::to('register') }}"><i></i>عضویت</a></li>
                        @endif

						<li><a id="popModal_ex1" class="pm">سبد خرید<span class="shop_num">0</span></a></li>
						<li>
						  <a id="toggle"><span></span></a>
						  <div id="menu">
							<ul>
							  <li>

								<a href="index.html" >صفحه اصلی</a>
							  </li>
							  <li>
								<a href="about.html" >تماس با ما</a>
							  </li>
							  <li>
								<a href="about.html" >درباره ما</a>
							  </li>
							</ul>
						  </div>
						</li>
					  </ul>
					</div>
					<div style="display:none">
					  <div id="content">
						<ul class="list-cart">
						</ul>
						<div class="bottom">
						  <div class="fine">جمع کل خرید شما :<span class='amount' >۰</span><span>تومان</span>
						  </div>
						  <div class="ok">
							<a title="تسویه حساب" href="factor.html">تسویه حساب</a>
						  </div>
						</div>
					  </div>
					</div>
					<div class="two">
					  <div class="logo">
						<h1><a href="index.html">کتاب یاب</a></h1>
					  </div>
					  <div class="search">
						<form class="" id="formsearch" >
						  <input type="text" placeholder="جستجو در کالاها ..." class="search_inp search_inp1" name="search" autocomplete="off" />
						  <a style="float: left;
			width: 7%;
			border:none;
			background:#d00000 url(../img/ico/5.png);
			background-position: center;
			border-radius: 3px 0 0 3px;
			text-indent:-9999px;
			background-repeat: no-repeat;
			height: 30px;" href="subjectsPage.html" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
						</form>
						<div id="ajax_result25"></div>
					  </div>
					  <script>
					  function logout() {
                            $.ajax({
                                url: '{{ asset('/logout') }}',
                                type: "get",
                                success: function (data) {
                                    html1 = '<a class="user-login" data-toggle="modal" data-target=".bs-example-modal-sm"><i></i>ورود اعضا</a>';
                                    $("#userOrLogOut").html(html1);
                                    html2 = '<a href="{{ asset('/register') }}"><i></i>عضویت</a>';
                                    $("#registerOrProfile").html(html2);
                                    $("#logout_success").modal('toggle');
                                }
                            });
                        }
                        function login(target) {
                            if($("#email").val() == 'negar@email.com'
                                    && $("#password").val() == '123') {
                                login_show();
                                $(target).closest('.modal').modal('toggle');
                                $("#login_success").modal('toggle');
                            }
                        }
                        function login_show() {
                            html1 = '<a class="user-login" onclick="logout();"><i></i>خروج</a>';
                            $("#userOrLogOut").html(html1);
                            html2 = '<a href="<?php  ?>pages/profile.php"><i></i>نگار بیاتی</a>';
                            $("#registerOrProfile").html(html2);
                        }
                    </script>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <div class="modal-title"><h4><i></i>ورود اعضاء</h4></div>
					</div>
					<form id="formloginlink">
					  <div class="modal-body">
						<div class="col-xs-12">
						  <label>نام کاربری ( ایمیل ) :</label>
						  <input type="text" name="email" id="email" error="لطفا ایمیل را وارد کنید" check="email" check_error="لطفا ایمیل را صحیح وارد کنید" />
						</div>
						<div class="col-xs-12">
						  <label>رمز عبور :</label>
						  <input type="password" name="password" id="password" error="لطفا رمزعبور را وارد کنید" check="password" check_error="لطفا رمزعبور را صحیح وارد کنید" />
						</div>
					  </div>
					  <div class="col-xs-12">
						<label>مرا بخاطر بسپار</label>
						<input type="checkbox" name="remember" id="remember" value="true" style="float: right; margin-right: 16px; margin-left: 10px;"/>
					  </div>
					  <div class="modal-footer">
						<div class="col-xs-12">
						  <a onclick="login(this);" class="btn btn-danger" >ورود</a>
						</div>
						<div class="col-xs-12">
						  <a href="forgotpass.html">رمز عبور خود را فراموش کرده اید ؟</a>
						</div>
					  </div>
					</form>
				  </div>
				</div>
			  </div>
			  <div class="bottom">
				<div class="container">
				  <div class="row">
					<nav class="navbar navbar-default">
					  <div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
					  </div>
					  <div class="collapse navbar-collapse js-navbar-collapse">
						<ul class="nav navbar-nav" style="width:100%;">
						  <li class="dropdown mega-dropdown first-menu">
							<a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">موضوعات<span class="dp"></span></a>
							<div class="dropdown-menu mega-dropdown-menu row">
							  <ul>
								<li class="col-xs-12 col-sm-4">
								  <ul>
									<br>
									<li><a href="subjectsPage.html"  >ادبی و هنری</a></li>
									<li><a href="subjectsPage.html"  >رمان</a></li>
									<li><a href="subjectsPage.html"  >فنی و مهندسی</a></li>
									<li><a href="subjectsPage.html"  >سیاسی و اجتماعی</a></li>
									<li><a href="subjectsPage.html"  >کمک آموزشی</a></li>
								  </ul>
								</li>
								<li class="col-xs-12 col-sm-4">
								  <ul>
									<br>
									<li><a href="subjectsPage.html"  >کودک</a></li>
									<li><a href="subjectsPage.html"  >زبانهای خارجی</a></li>
									<li><a href="subjectsPage.html"  >معارف</a></li>
									<li><a href="subjectsPage.html"  >پزشکی</a></li>
									<li><a href="subjectsPage.html"  >پیراپزشکی</a></li>
								  </ul>
								</li>
							  </ul>
							</div>
						  </li>
						  <li>
							<a href="about.html">درباره ما</a>
						  </li>
						  <li>
							<a href="#">راهنمای خرید</a>
						  </li>
						  <li>
							<a href="about.html">تماس با ما</a>
						  </li>
						  <li style="float:left;">
							<a class="btn-danger searchPro" style="color:white;" href="searchPro.html">جستجوی پیشرفته محصولات</a>
						  </li>
						</ul>
					  </div>
					</nav>
				  </div>
				</div>
			  </div>
			</header>
			@yield('content')
			<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
		<footer>
	<div class="menu-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-2 col-lg-3">
					<h4>با ما آشنا شوید</h4>
					<ul class="mf">
						<li>
							<a href="about.html">ارتباط با ما</a>
						</li>
						<li>
							<a href="about.html">درباره کتاب یاب</a>
						</li>
						<li>
							<a href="">فرصت های شغلی</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-2 col-lg-3">
					<h4> راهنمایی نیاز دارید؟</h4>
					<ul class="mf">
						<li>
							<a href="">راهنمای خرید</a>
						</li>
						<li>
							<a href="">بازگرداندن کالا</a>
						</li>
						<li>
							<a href="">قوانین و مقررات</a>
						</li>
						<li>
							<a href="">پرسش های متداول</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-2 col-lg-3">
					<h4>حساب کاربری</h4>
					<ul class="mf">
						<li>
							<a href="register.html">ایجاد حساب کاربری جدید</a>
						</li>

						<li>
							<a href="../index.html">ورود به سایت</a>
						</li>

						<li>
							<a href="factor.html">سبد خرید</a>
						</li>


					</ul>
				</div>



				<div class="col-xs-12 col-sm-3 col-md-4 col-lg-3">
					<h3>عضويت در خبرنامه</h3>
					<form class="newsletter" action="" noscroll="yes">
						<label>لطفا ايميل خود را وارد کنيد :</label>
						<input type="email" placeholder="example@mail.com" name="email" id="email" error="لطفا ایمیل خود را وارد کنید" check="email" check_error="ایمیل معتبر نمی باشد" />
						<input type="submit" value="ثبت" />
					</form>

					<h1>
						<a href="index.html">کتاب یاب</a>
					</h1>

					<ul class="sn">
						<li>ما را دنبال کنيد</li>
						<li><a href="https://twitter.com/" target="_blank">تويتر</a></li>
						<li><a href="https://plus.google.com/" target="_blank">گوگل پلاس</a></li>
						<li><a href="https://www.facebook.com/" target="_blank">فيس بوک</a></li>
					</ul>

				</div>
			</div>
		</div>
	</div>

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="pull-right">

				</div>
				<div class="pull-left">
					<strong>Pooneh Moghimi, Elmira Rakhshayi, Sima Bagheri</strong> - Copyright 2016 - All rights reserved
				</div>
			</div>
		</div>
	</div>

</footer>




<!------------------------------------------------------------------------------------------>

<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/toggle.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.slimscroll.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.hoverIntent.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.cyber.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#owl-demo-slider").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		items : 1,
		itemsDesktop : false,
		itemsDesktopSmall : false,
		itemsTablet: false,
		itemsMobile : false,
		autoPlay : true,
		navigationText : [" ", " "]
	});
	$("#owl-demo1").owlCarousel({
		autoPlay : true,
		navigation : false,
		pagination : true,
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet : [768, 1]
	});
	$("#owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
		autoPlay : false,
		navigation : true,
		pagination : false,
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,2]
	});
});
</script>
<script type="text/javascript" src="{{ URL::asset('js/popModal.js') }}"></script>
<script type="text/javascript">
$('#popModal_ex1').click(function(){
	$('#popModal_ex1').popModal({
		html : $('#content'),
		placement : 'bottomLeft',
		showCloseBut : true,
		onDocumentClickClose : true,
		onDocumentClickClosePrevent : '',
		overflowContent : false,
		inline : true,
		beforeLoadingContent : 'Please, waiting...',
		onOkBut : function() {},
		onCancelBut : function() {},
		onLoad : function() {},
		onClose : function() {}
	});
});
</script>
<script type="text/javascript" src="{{ URL::asset('js/dkslider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/dkscroller.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>