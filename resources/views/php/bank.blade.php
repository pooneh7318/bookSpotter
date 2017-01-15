@extends('base')
@section('content')

<div id="templatemo_container">

	<style type="text/css">
	input{
	margin:13px;
	padding-top:2px;
	padding-left:10px;
	}
	</style>
	
    <div id="templatemo_header"> </div>
    <!-- end of header -->
    
		<form class="text" action="bankReceipt.html">
			<label>نام پذیرنده</label>
			<input type="text" name="pw" maxlength="12" value="فروشگاه کتاب آنلاین" />
		
			<br>
		
			<label>مبلغ قابل پرداخت:</label>
			<input type="text" name="pw" maxlength="12" value="500000" />
		
	<br>
	 <div id="templatemo_khat"></div> 
	
    
	
		
			<label>شماره کارت:</label>
			<input type="text" name="id" maxlength="4" value="" />
			<input type="text" name="id" maxlength="4" value="" />
			<input type="text" name="id" maxlength="4" value="" />
			<input type="text" name="id" maxlength="4" value="" />
		
	<br>
		
			<label>رمزدوم:</label>
			<input type="text" name="pw" maxlength="12" value="" />
		
	<br>
		
			<label>CVV2:</label>
			<input type="text" name="pw" maxlength="4" value="" />
		
	<br>
		
			<label>تاریخ انقضا:</label>
			<input type="text" name="pw" maxlength="2" value="" />
			<input type="text" name="pw" maxlength="2" value="" />
	<br>
	
	<div id="templatemo_khat"> </div> 
   
	
	<div class="wrapper">
		<input type="submit" value="پرداخت" /> 
		<input type="button" onclick="location.href='factor.html'" value="انصراف"/>
	</div>
	</form>


	
    <div id="templatemo_footer">
        Copyright © 2016 <a href="#"><strong>شرکت به پرداخت ملت ارايه دهنده خدمات نوین پرداخت الکترونيک</strong></a> 
	</div> <!-- end of footer -->

</div> <!-- end of container -->
@stop