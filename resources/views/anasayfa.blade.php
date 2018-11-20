@extends('layouts.header-footer')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection
@section('body')

    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="{{ route('anasayfa') }}"><img src="img/logo.png" alt="Logo" title="Job Pro" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                <div class="gc_right_menu">
                                    <ul>
                                        <li id="search_button">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#23c0e9"/></g></svg>
                                        </li>
                                        <li>
                                            <div id="search_open" class="gc_search_box">
                                                <input type="text" placeholder="Search here">
                                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="float_left">
                                    <li class="has-mega gc_main_navigation"><a href="{{ route('anasayfa') }}" class="gc_main_navigation">Anasayfa</a>
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="{{ route('jobs-list') }}" class="gc_main_navigation"> İş Arama</a>
                                    </li>
                                    <li class="parent gc_main_navigation"><a href="{{ route('candidate-list') }}" class="gc_main_navigation">Eleman Arama</a>
                                    </li>
                                    <li class="gc_main_navigation parent"><a href="#" class="gc_main_navigation">İletişim</a></li>
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="index.html"><img src="img/logo.png" alt="Logo" title="Grace Church"></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="#0">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#ffffff"/></g></g></svg>
													</a>
                                                <nav class="cd-dropdown">
                                                    <h2><a href="#">Job<span>Pro</span></a></h2>
                                                    <a href="#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                        <li>
                                                            <form class="cd-search">
                                                                <input type="search" placeholder="Search...">
                                                            </form>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Home</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li>
                                                                    <a href="index.html">Home1</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="index_II.html">Home2</a>
                                                                </li>
																<li>
                                                                    <a href="index_map.html">Home3</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->


                                                        <li class="has-children">
                                                            <a href="#">Job</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li>
                                                                    <a href="listing_left.html">Listing-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="listing_right.html">Listing-Right</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="listing_single.html">Listing-Single</a>
                                                                </li>
                                                                <!-- .has-children -->


                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">candidates</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
																<li><a href="company_listing.html">Company-Listing</a></li>
																<li><a href="company_listing_single.html">Company-Single</a></li>
																<li><a href="candidate_listing.html">candidate-Listing</a></li>
																<li><a href="candidate_profile.html">candidate-Profile</a></li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
														<li class="has-children">
                                                            <a href="#">Pages</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li><a href="about.html">About-Us</a></li>
																<li><a href="404 error.html">404</a></li>
																<li><a href="add_postin.html">Add-Posting</a></li>
																<li><a href="login.html">Login</a></li>
																<li><a href="register.html">Register</a></li>
																<li><a href="pricing.html">Pricing</a></li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#">Blog</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li>
                                                                    <a href="blog_left.html">Blog-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="blog_right.html">Blog-Right</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="blog_single_left.html">Blog-Single-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="blog_single_right.html">Blog-Single-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="contact.html">Contact</a>
                                                        </li>
														<li>
                                                            <a href="register.html">Sign Up</a>
                                                        </li>
														<li>
                                                            <a href="login.html">Login</a>
                                                        </li>

                                                    </ul>
                                                    <!-- .cd-dropdown-content -->



                                                </nav>
                                                <!-- .cd-dropdown -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .cd-dropdown-wrapper -->
                            </header>
                        </div>
                    </div>
                    <!-- mobile menu area end -->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                        <div class="jp_navi_right_btn_wrapper">
                            @guest
                                <ul>
                                    <li><a href="{{ route('signup') }}"><i class="fa fa-user"></i>&nbsp; Kayıt Ol</a></li>
                                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp; Giriş Yap</a></li>
                                </ul>
                            @endguest
                            @auth
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>&nbsp; {{ $auth_name->name }}</a></li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-user"></i>&nbsp; Çıkış Yap</a></li>
                                </ul>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1><span>3,000+</span> İş Arama</h1>
                                <p>Kariyerine güzel bir başlangıç yapmak için doğru yerdesin !</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_header_form_wrapper">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <select class="form-control" multiple="multiple" id="keywords">
                                  <option>Frontend</option>
                                  <option>Backend</option>
                                  <option>Graphic Desinger</option>
                                </select>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <select class="form-control" multiple="multiple" id="city">
                                  <option>İstanbul</option>
                                  <option>İzmir</option>
                                  <option>Ankara</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="jp_form_btn_wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-search"></i> Ara</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_banner_main_jobs_wrapper">
                            <div class="jp_banner_main_jobs">
                                <ul>
                                    <li><i class="fa fa-tags"></i> Trending Keywords :</li>
                                    <li><a href="#">ui designer,</a></li>
                                    <li><a href="#">developer,</a></li>
                                    <li><a href="#">senior</a></li>
                                    <li><a href="#">it company,</a></li>
                                    <li><a href="#">design,</a></li>
                                    <li><a href="#">call center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jp_banner_jobs_categories_wrapper">
            <div class="container">
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-code"></i>
                        <h3><a href="#">Developer</a></h3>
                        <p>(240 jobs)</p>
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-laptop"></i>
                        <h3><a href="#">Technology</a></h3>
                        <p>(504 jobs)</p>
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-bar-chart"></i>
                        <h3><a href="#">Accounting</a></h3>
                        <p>(2250 jobs)</p>
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_res">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-medkit"></i>
                        <h3><a href="#">Medical</a></h3>
                        <p>(202 jobs)</p>
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-university"></i>
                        <h3><a href="#">Government</a></h3>
                        <p>(1457 jobs)</p>
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-th-large"></i>
                        <h3><a href="#">All Jobs</a></h3>
                        <p>(2000+ jobs)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->
    <!-- jp tittle slider Wrapper Start -->
    <div class="jp_tittle_slider_main_wrapper" style="float:left; width:100%; margin-top:30px;">
        <div class="container">
            <div class="jp_tittle_name_wrapper">
                <div class="jp_tittle_name">
                    <h3>Tranding</h3>
                    <h4>Jobs</h4>
                </div>
            </div>
            <div class="jp_tittle_slider_wrapper">
                <div class="jp_tittle_slider_content_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/webtures-logo.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/webtures-logo.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/mediaclick.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/webtures-logo.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/mediaclick.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/webtures-logo.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/mediaclick.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/webtures-logo.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="img/webtures-logo.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp tittle slider Wrapper End -->
    <!-- jp first sidebar Wrapper Start -->
    <div class="jp_first_sidebar_main_wrapper" style="margin-bottom:50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cc_featured_product_main_wrapper">
                                <div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper">
                                    <h2>Recent Jobs</h2>
                                </div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Featured</a></li>
                                    <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">Remotely</a></li>
                                    <li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab">Part Time</a></li>
                                    <li role="presentation"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Full Time </a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="best">
                                    <div class="ss_featured_products">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item" data-hash="zero">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-hash="one">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-hash="two">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="video_nav_img_wrapper">
                                        <div class="video_nav_img">
                                            <ul>
                                                <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                                <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                                <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="hot">
                                    <div class="ss_featured_products">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item" data-hash="zero">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-hash="one">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-hash="two">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video_nav_img_wrapper">
                                        <div class="video_nav_img">
                                            <ul>
                                                <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                                <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                                <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="trand">
                                    <div class="ss_featured_products">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item" data-hash="zero">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-hash="one">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item" data-hash="two">
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/mediaclick.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="img/webtures-logo.png" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                    <p>Webstrot Technology Pvt. Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#">Part Time</a></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video_nav_img_wrapper">
                                        <div class="video_nav_img">
                                            <ul>
                                                <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                                <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                                <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="jp_first_right_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_spotlight_main_wrapper">
                                    <div class="spotlight_header_wrapper">
                                        <h4>Job Spotlight</h4>
                                    </div>
                                    <div class="jp_spotlight_slider_wrapper">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="jp_spotlight_slider_img_Wrapper">
                                                    <img src="images/content/spotlight_img.jpg" alt="spotlight_img" />
                                                </div>
                                                <div class="jp_spotlight_slider_cont_Wrapper">
                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                    <p>Webstrot Technology Ltd.</p>
                                                    <ul>
                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>
                                                </div>
                                                <div class="jp_spotlight_slider_btn_wrapper">
                                                    <div class="jp_spotlight_slider_btn">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="jp_spotlight_slider_img_Wrapper">
                                                    <img src="images/content/spotlight_img.jpg" alt="spotlight_img" />
                                                </div>
                                                <div class="jp_spotlight_slider_cont_Wrapper">
                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                    <p>Webstrot Technology Ltd.</p>
                                                    <ul>
                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>
                                                </div>
                                                <div class="jp_spotlight_slider_btn_wrapper">
                                                    <div class="jp_spotlight_slider_btn">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="jp_spotlight_slider_img_Wrapper">
                                                    <img src="images/content/spotlight_img.jpg" alt="spotlight_img" />
                                                </div>
                                                <div class="jp_spotlight_slider_cont_Wrapper">
                                                    <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                    <p>Webstrot Technology Ltd.</p>
                                                    <ul>
                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                    </ul>
                                                </div>
                                                <div class="jp_spotlight_slider_btn_wrapper">
                                                    <div class="jp_spotlight_slider_btn">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_rightside_job_categories_wrapper">
                                    <div class="jp_rightside_job_categories_heading">
                                        <h4>Jobs by Category</h4>
                                    </div>
                                    <div class="jp_rightside_job_categories_content">
                                        <ul>
                                            <li><i class="fa fa-caret-right"></i> <a href="#">Graphic Designer <span>(214)</span></a></li>
                                            <li><i class="fa fa-caret-right"></i> <a href="#">Engineering Jobs <span>(514)</span></a></li>
                                            <li><i class="fa fa-caret-right"></i> <a href="#">Mainframe Jobs <span>(554)</span></a></li>
                                            <li><i class="fa fa-caret-right"></i> <a href="#">Legal Jobs <span>(457)</span></a></li>
                                            <li><i class="fa fa-caret-right"></i> <a href="#">IT Jobs <span>(1254)</span></a></li>
                                            <li><i class="fa fa-caret-right"></i> <a href="#">R&D Jobs <span>(554)</span></a></li>
                                            <li><i class="fa fa-caret-right"></i> <a href="#">Government Jobs <span>(350)</span></a></li>
                                            <li><i class="fa fa-caret-right"></i> <a href="#">PSU Jobs <span>(221)</span></a></li>
                                            <li><i class="fa fa-plus-circle"></i> <a href="#">View All Categories</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp first sidebar Wrapper End -->

    @endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection
