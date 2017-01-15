@extends('base')

@section('content')
<script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
<section id="one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<ol class="breadcrumb">
						<li>
							<a href="index.html">صفحه اصلی</a>
						</li>
						<li class="active">
							<a href="register.html">
								ثبت نام
							</a>
						</li>
					</ol>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="row">
					<div class="title-page">
						<h2>ثبت نام</h2>
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
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-sm-offset-2 col-md-offset-3 col-lg-offset-4">
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">نام</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">آدرس ایمیل</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">رمز عبور</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-12 control-label">تکرار رمز عبور</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
						<div class="col-xs-12 mp20" style="text-align:center;">
								<center>
									<div class="g-recaptcha" data-sitekey="6Lc1hRATAAAAADTEWZLed_CT36zRn9isavywY4nz"></div>
								</center>
							</div>
							<div class="col-xs-12">
								<label>
									<input type="checkbox" name="nl" id="nl" value="1" /> عضویت در خبرنامه فروشگاه
								</label>
						</div>
                        <div class="form-group">
							
                            <div class="col-md-12 col-md-offset-4">
								<br>
                                <button style="padding:inherit; font-size:18px;" type="submit" class="btn btn-primary">
                                    ایجاد حساب کاربری
                                </button>
                            </div>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
