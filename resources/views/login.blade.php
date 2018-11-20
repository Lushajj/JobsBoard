@extends('layouts.header-footer')
@section('css')
    <link rel="stylesheet" type="text/css" href="css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
@endsection
@section('body')
    @include('header-bottom')
	  <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Login</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

	<!-- jp login wrapper start -->
	<div class="login_section">
		<!-- login_form_wrapper -->
		<div class="login_form_wrapper">

            @include('layouts.alert')
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- login_wrapper -->
						<h1>Giriş Yap</h1>
						<form class="login_wrapper" method="post" action="{{ route('login-control') }}">
                            {{ csrf_field() }}
                            @include('layouts.errors')
							<div class="formsix-pos">
								<div class="form-group i-email">
									<input type="text" class="form-control" required="" id="email2" placeholder="E mail*" name="name">
								</div>
							</div>
							<div class="formsix-e">
								<div class="form-group i-password">
									<input type="password" class="form-control" required="" id="password2" placeholder="Password *" name="password">
								</div>
							</div>
							<div class="login_remember_box">
								<label class="control control--checkbox">Beni Hatırla
									<input type="checkbox">
									<span class="control__indicator"></span>
								</label>
								<a href="#" class="forget_password">
									Şifremi Unuttum
								</a>
							</div>
							<div class="login_btn_wrapper">
								<button type="submit" class="btn btn-primary login_btn"> Giriş Yap </button>
							</div>
							<div class="login_message">
								<p>Üye değilmisin  <a href="#"> Kayıt Ol </a> </p>
							</div>
						</form>
						<!-- /.login_wrapper-->
					</div>
				</div>
			</div>
		</div>
		<!-- /.login_form_wrapper-->
	</div>
	<!-- jp login wrapper end -->
@endsection
@section('js')

    <script src="js/custom_II.js"></script>
@endsection
