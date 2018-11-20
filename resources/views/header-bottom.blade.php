<!-- Top Scroll End -->
<!-- Top Header Wrapper Start -->
<div class="jp_top_header_main_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="jp_top_header_left_wrapper">
                    <div class="jp_top_header_left_cont">
                        <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
                        <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="#">Email@example.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="jp_top_header_right_wrapper">
                    @guest
                        <div class="jp_top_header_right_cont">
                            <ul>
                                <li><a href="{{ route('signup') }}"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                            </ul>
                        </div>
                    @endguest
                    <div class="jp_top_header_right__social_cont">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Header Wrapper End -->
<!-- Header Wrapper Start -->
<div class="jp_top_header_img_wrapper">
    <div class="gc_main_menu_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                    <div class="gc_header_wrapper">
                        <div class="gc_logo">
                            <a href="{{ route('anasayfa') }}"><img src="img/images/header/logo2.png" alt="Logo" title="Job Pro" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 full_width">
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
                                            <a href="index.html"><img src="img/images/header/logo2.png" alt="Logo" title="Grace Church"></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="cd-dropdown-wrapper">
                                            <a class="house_toggle" href="#0">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#000000"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#000000"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#000000"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#000000"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#000000"/></g></g></svg>
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
                                                        <a href="#">Listing</a>

                                                        <ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#0">Menu</a></li>
                                                            <li>
                                                                <a href="listing_left.html">listing-Left</a>
                                                            </li>
                                                            <!-- .has-children -->

                                                            <li>
                                                                <a href="listing_right.html">listing-Right</a>
                                                            </li>
                                                            <!-- .has-children -->

                                                            <li>
                                                                <a href="listing_single.html">listing-Single</a>
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
                                                    <!-- .has-children -->
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
                @auth
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="jp_navi_right_btn_wrapper">
                        <ul>
                            <li><a href="add_postin.html"><i class="fa fa-plus-circle"></i>&nbsp; Post a job</a></li>
                        </ul>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div>
<!-- Header Wrapper End -->
