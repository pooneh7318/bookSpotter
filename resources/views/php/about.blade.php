@extends('base')
@section('content')
			
<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<ol class="breadcrumb">
						<li>
							<a href="../index.html">صفحه اصلی</a>
						</li>
						<li class="active">
							<a href="about.html">
								درباره ما
							</a>
						</li>
					</ol>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="row">
					<div class="title-page">
						<h2>درباره ما</h2>
						<div class="btp"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="two">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="about">
						<h3 dir="RTL" style="text-align: justify;">
							<span style="color:#a52a2a;"><strong>راه</strong> <strong>حل</strong> <strong>های</strong> <strong>نوین خرید</strong></span>
						</h3>
						<p dir="RTL" style="text-align: justify;">
						</p>
						<p dir="RTL" style="text-align: justify;">
							&nbsp;</p>
							<h2 dir="RTL" style="text-align: justify;">
								<span style="color:#a52a2a;"> کتاب یاب بهترین سایت خرید اینترنتی کتاب</span></h2>
								<p dir="RTL" style="text-align: justify;">
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
<!------------------------------------------------------------------------------------------>

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/toggle.js"></script>
<script type="text/javascript" src="../assets/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.hoverIntent.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.cyber.js"></script>
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
<script type="text/javascript" src="../assets/js/popModal.js"></script>
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
<script type="text/javascript" src="../assets/js/dkslider.js"></script>
<script type="text/javascript" src="../assets/js/dkscroller.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
@stop



