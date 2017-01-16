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
				<a href="#">

						صفحه جزئیات محصول

				</a>
			</li>






					







	</ol>

</div>
			</div>

		</div>
	</div>

	<div class="container" id="menu-fixed">
		<div class="box">
			<ul class="detail-menu">
				<li><a href="#sc-one" title="">مشخصات کلی</a></li>
				<li><a href="#sc-three" title="">توضیحات</a></li>
				<li><a href="#sc-four" title="">مشخصات کتاب</a></li>
				<li><a href="#sc-five" title="">نظرات کاربران</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="sc-one">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
                <div class="box">

                    <div class="pd">
                        <h3>{{ $book->title }}
						<small><?php
                                $body = $book->description;
                                if(strlen($body)>40)
                                echo substr($body, 0, strpos($body, ' ', 40));
                                else
                                    echo $body;
                                ?></small>
						</h3>
                        <div class="border-four"></div>

                        <div class="col-xs-12 col-sm-6">
							<img class="main-image" src="{{ URL::asset($book->image) }}" width="350" height="350" alt="قلندران پيژامه پوش" title="قلندران پيژامه پوش" />
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="info">
                                <div class="cod">کد محصول : <span class="product_info1_right_code">100010011100204</span></div>



                                <ul class="one">
                                    <li>
                                        <strong>وضعیت : </strong>

                                        <span>موجود</span>

                                    </li>


                                    <li>
                                        <div class="fr">
                                            <span class="fr num-t">تعداد : </span>
                                            <div class="order-num shop-num clearfix">
                                                <a class="down" href="#"></a>
                                                <span>
                                                    <input type="text" name="number" id="number" value="1" readonly="readonly" class="show-num" />
                                                </span>
                                                <a class="up" href="#"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="showgarantires"></li>
                                </ul>
                                <ul class="two hideprice">
                                    <input type="hidden" id="getprice" name="getprice" value="487">
                                            <li>قیمت برای شما : <span class="" id="">3,500 تومان</span></li>
                                </ul>
                                <div class="add-shop">
                                    <a class="add-favorites poklick" data-toggle="modal" data-target=".bs-example-modal-sm" href="javascript:void(0);">
                                    <script>
                                    $(document).ready(function() {
                                        $(document.body).on('click', ".poklick", function() {
                                            if($("input[name='login']").length == 0){
                                               $("#formloginlink").append('<input type="hidden" name="login" value="ok"/>');
                                            }
                                        });
                                    });
                                    </script>
                                    <span style="display: none;"></span>
                                    <i></i>
                                    </a>
                                    <a class="add-cart" title="">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="udp">
                                <div class="ru-list">
                                    <ul>
                                        <li>امتیاز کاربران به این محصول :
                                           <span id="score" attr_id="506" rate_kind="1" module="product" data-score="3"></span>
                                        </li>
                                        <li><span>۰</span>نظر ارسال شده</li>
                                    </ul>
                                </div>
                                <div class="lu-list">
                                    <ul>
                                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#myModalsf">معرفی به دوستان</a></li>
                                        <li>
                                            <div class="btn-group">
                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">اشتراک گذاری</button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="io j1"></i>فیس بوک</a></li>
                                                    <li><a href="https://plus.google.com/" target="_blank"><i class="io j2"></i>گوگل پلاس</a></li>
                                                    <li><a href="http://twitter.com/" target="_blank"><i class="io j3"></i>تویتر</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sc-four">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="td mp30">
                        <h2>مشخصات کتاب</h2>
                    </div>
                    <div class="technical">
                        <div class="col-xs-12">
                            <ul class="mp30">
                                <li>
                                    <strong>
                                        نویسنده :
                                    </strong>
                                    <span>
                                        سيدعلي ميرفتاح
                                    </span>
                                </li>
                                <li>
                                    <strong>
                                        موضوع :
                                    </strong>
                                    <span>

                                        طنز

                                    </span>
                                </li>

                                <li>
                                    <strong>
                                        تاریخ چاپ :
                                    </strong>
                                    <span>

                                        1387

                                    </span>
                                </li>
                                <li>
                                    <strong>
                                        قطع :
                                    </strong>
                                    <span>

                                      رقعی

                                    </span>
                                </li>
                                <li>
                                    <strong>
                                      شماره شابک :
                                    </strong>
                                    <span>

                                        ۷- ۳۶۵- ۳۶۹- ۹۶۴- ۹۷۸

                                    </span>
                                </li>
																<li>
                                    <strong>
                                    قیمت :
                                    </strong>
                                    <span>

                                      3,500 تومان

                                    </span>
                                </li>
                            </ul>
                        </div>




                        <div class="col-xs-12">








                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sc-three">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="td mp30">
                        <h2>توضیحات</h2>
												<span>

													متن پشت جلد: دارم با صدای بلند فکر می کنم. فکر فکر فکر... دارم فکر می کنم انگار مهم است که پشت آن روبان طلایی زیبا و کاغذی  که نور روی آن بازتاب خیره کننده ای دارد.


												</span>
                    </div>
                    <div class="texer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sc-five">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
                <div class="box">
                    <div class="td">
                        <h2>نظرات کاربران</h2>
                    </div>
                    <div class="comments">
                        <div id="loading"></div>
                    </div>

                    <div class="user-review">
                        <div class="tth">
                            <h3 class="o2">نظر خود را بنویسید</h3>
                            <div class="bh3"></div>
                        </div>
                        <form class="ajax" ajax_method="post" action="http://shayanys.com/ajax.html?comments" noscroll="yes">
                            <input type="hidden" name="itemid" id="itemid" value="506" />
                            <input type="hidden" name="cat" id="cat" value="product" />

                            <div class="half-size">
                                <div class="col-xs-12 mp10">
                                    <label>اسم :</label>
                                    <input type="text" placeholder="" name="title" id="title" error="لطفا نام و نام خانوادگی را وارد کنید"  />
                                </div>
                                <div class="col-xs-12 mp10">
                                    <label>ایمیل :</label>
                                    <input type="type" placeholder="" name="email" id="email" error="لطفا ایمیل را وارد کنید" check="email" check_error="لطفا ایمیل را صحیح وارد کنید"  />
                                </div>
                                
                            </div>
                            <div class="col-xs-12">
                                <label class="sw">نظر شما :</label>
                                <textarea name="note" id="note" error="لطفا پیام را وارد کنید"></textarea>
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" value="ارسال">
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
var price = '3500';
 $(function() {
        $(".add-cart").unbind("click").click(function() {
			console.log("lets add");
            var num = $("#number").val();
            var name = $(".pd h3 small").text();
            var img_url = $("img.main-image").attr("src");
            var book_id = $(".product_info1_right_code").text();
            addToBasket({
                id: '{{ $book->id }}',
                pid: book_id,
                num: num,
                img_url: img_url,
                name: "{{ $book->title }}",
                price: "{{ $book->price }}",
				discount: "{{ $book->discount }}"
            },true);
            return false;
        });
    });
</script>
@stop