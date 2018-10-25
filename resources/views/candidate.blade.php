@extends('layouts.header-footer')
@section('css')
    <link rel="stylesheet" type="text/css" href="css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
@endsection
@section('body')
    @include('header-bottom')
    <!-- jp listing sidebar Wrapper Start -->
    <div class="jp_listing_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Jobs by Category</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <p>
                                                    <input type="checkbox" id="c1" name="cb">
                                                    <label for="c1">Graphic Designer <span>(214)</span></label>

                                                    <p>
                                                        <input type="checkbox" id="c2" name="cb">
                                                        <label for="c2">Engineering Jobs <span>(514)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c3" name="cb">
                                                        <label for="c3">Mainframe Jobs <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c4" name="cb">
                                                        <label for="c4">Legal Jobs <span>(457)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c5" name="cb">
                                                        <label for="c5">IT Jobs <span>(1254)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c6" name="cb">
                                                        <label for="c6">R&D Jobs <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c7" name="cb">
                                                        <label for="c7">Government Jobs <span>(350)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c8" name="cb">
                                                        <label for="c8">PSU Jobs <span>(221)</span></label>
                                                    </p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Jobs by Location</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <p>
                                                    <input type="checkbox" id="c9" name="cb">
                                                    <label for="c9">Jobs in Delhi  <span>(214)</span></label>

                                                    <p>
                                                        <input type="checkbox" id="c10" name="cb">
                                                        <label for="c10">Jobs in Mumbai <span>(514)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c11" name="cb">
                                                        <label for="c11">Jobs in Chennai <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c12" name="cb">
                                                        <label for="c12">Jobs in Gurgaon <span>(457)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c13" name="cb">
                                                        <label for="c13">Jobs in Noida  <span>(1254)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c14" name="cb">
                                                        <label for="c14">Jobs in Kolkata <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c15" name="cb">
                                                        <label for="c15">Jobs in Hyderabad <span>(350)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c16" name="cb">
                                                        <label for="c16">Jobs in Pune <span>(221)</span></label>
                                                    </p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_add_resume_wrapper jp_job_location_wrapper">
                                <div class="jp_add_resume_img_overlay"></div>
                                <div class="jp_add_resume_cont">
                                    <img src="images/content/resume_logo.png" alt="logo" />
                                    <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 jp_cl_right_bar">
                    <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
									<img src="images/content/resume_img1.jpg" alt="resume_img" />
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>Akshay Handge</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">UI Designer</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="#">View Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
									<img src="images/content/resume_img2.jpg" alt="resume_img" />
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>Ajay Suryavanshi</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">UI Designer</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="#">View Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
									<img src="images/content/resume_img3.jpg" alt="resume_img" />
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>Merry Foster</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">UI Designer</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="#">View Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
									<img src="images/content/resume_img4.jpg" alt="resume_img" />
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>Dashrath Singh</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">UI Designer</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="#">View Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
									<img src="images/content/resume_img5.jpg" alt="resume_img" />
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>Farhan Shaikh</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">UI Designer</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="#">View Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
									<img src="images/content/resume_img1.jpg" alt="resume_img" />
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>Akshay Handge</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">UI Designer</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="#">View Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
									<img src="images/content/resume_img2.jpg" alt="resume_img" />
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>Ajay Suryavanshi</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">UI Designer</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="#">View Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper">
								<div class="jp_recent_resume_img_wrapper">
									<img src="images/content/resume_img3.jpg" alt="resume_img" />
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>Merry Foster</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">UI Designer</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="#">View Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="jp_adp_choose_resume_bottom_btn_post jp_adp_choose_resume_bottom_btn_post2">
								<ul>
									<li><a href="#">View More</a></li>
								</ul>
							</div>
						</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Jobs by Category</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <p>
                                                    <input type="checkbox" id="c101" name="cb">
                                                    <label for="c101">Graphic Designer <span>(214)</span></label>

                                                    <p>
                                                        <input type="checkbox" id="c102" name="cb">
                                                        <label for="c102">Engineering Jobs <span>(514)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c103" name="cb">
                                                        <label for="c103">Mainframe Jobs <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c104" name="cb">
                                                        <label for="c104">Legal Jobs <span>(457)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c105" name="cb">
                                                        <label for="c105">IT Jobs <span>(1254)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c106" name="cb">
                                                        <label for="c106">R&D Jobs <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c107" name="cb">
                                                        <label for="c107">Government Jobs <span>(350)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c108" name="cb">
                                                        <label for="c108">PSU Jobs <span>(221)</span></label>
                                                    </p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Jobs by Location</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <p>
                                                    <input type="checkbox" id="c109" name="cb">
                                                    <label for="c109">Jobs in Delhi  <span>(214)</span></label>

                                                    <p>
                                                        <input type="checkbox" id="c110" name="cb">
                                                        <label for="c110">Jobs in Mumbai <span>(514)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c111" name="cb">
                                                        <label for="c111">Jobs in Chennai <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c112" name="cb">
                                                        <label for="c112">Jobs in Gurgaon <span>(457)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c113" name="cb">
                                                        <label for="c113">Jobs in Noida  <span>(1254)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c114" name="cb">
                                                        <label for="c114">Jobs in Kolkata <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c115" name="cb">
                                                        <label for="c115">Jobs in Hyderabad <span>(350)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c116" name="cb">
                                                        <label for="c116">Jobs in Pune <span>(221)</span></label>
                                                    </p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_add_resume_wrapper jp_job_location_wrapper">
                                <div class="jp_add_resume_img_overlay"></div>
                                <div class="jp_add_resume_cont">
                                    <img src="images/content/resume_logo.png" alt="logo" />
                                    <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs">
                            <div class="pager_wrapper gc_blog_pagination">
                                <ul class="pagination">
                                    <li><a href="#">Priv.</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp listing sidebar Wrapper End -->
@endsection
@section('js')

    <script src="js/custom_II.js"></script>
@endsection
