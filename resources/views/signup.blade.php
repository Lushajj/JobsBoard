@extends('layouts.header-footer')
@section('css')
    <link rel="stylesheet" type="text/css" href="css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
@endsection
@section('body')
    @include('header-bottom')
    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            <div class="container">
                <div class="row">
                    @include('layouts.errors')
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul id="tabOne" class="nav register-tabs">
                                <li class="active"><a href="#contentOne-1" data-toggle="tab">Kişisel Hesap <br> <span>İş arıyorum</span></a>
                                </li>
                                <li><a href="#contentOne-2" data-toggle="tab">Kurumsal Hesap <br> <span>Çalışma arkadaşları arıyoruz</span></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    <div class="row">
                                        <form action="{{ route('signup') }}" method="post">
                                            {{ csrf_field() }}
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="username" placeholder="Kullanıcı Adı *">
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="email" name="email" placeholder="E Posta *">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="password" name="password" placeholder="Şifre *">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" name="password_confirmation" placeholder="Şifre(Tekrar) *">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="phone" placeholder="Telefon">
                                            </div>
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                <button class="btn btn-primary login_btn" type="submit"> Kayıt Ol </button>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="login_message">
                                        <p>Kayıtlımısınız ? <a href="{{ route('login') }}"> Giriş Yapın </a> </p>
                                    </div>
                                </div>

                                <div class="tab-pane fade register_left_form" id="contentOne-2">
                                    <div class="row clearfix">
                                        <form action="{{ route('company-register') }}" method="post">
                                            {{ csrf_field() }}
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="company_name" value="" placeholder="Şirket Adı *">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" name="email" value="" placeholder="Email*">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="password" name="password" value="" placeholder="Şifre*">
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="password" name="password_confirmation" value="" placeholder="Şifre(Tekrar)*">
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                <input type="text" name="phone" value="" placeholder="Telefon">
                                            </div>
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                <button href="#" class="btn btn-primary login_btn" type="submit"> Kayıt Ol </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="login_message">
                                        <p>Kayıtlımısınız ? <a href="{{ route('login') }}"> Giriş Yapın </a> </p>
                                    </div>

                                </div>

                            </div>
                            <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp register wrapper end -->
@endsection
@section('js')

    <script src="js/custom_II.js"></script>
@endsection
