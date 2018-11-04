<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <title>@yield('title',"Jobs - Admin")</title>
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="libs/magnific-popup/magnific-popup.css" rel="stylesheet" />
        <link href="libs/ios7-switch/ios7-switch.css" rel="stylesheet" />
        <link href="libs/pace/pace.css" rel="stylesheet" />
        <link href="libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="libs/prettify/github.css" rel="stylesheet" />

                <!-- Extra CSS Libraries Start -->
                <link href="css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="css/style-responsive.css" rel="stylesheet" />
        @yield('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    </head>
    @yield('body')
    <!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="libs/jquery-detectmobile/detect.js"></script>
	<script src="libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="libs/ios7-switch/ios7.switch.js"></script>
	<script src="libs/fastclick/fastclick.js"></script>
	<script src="libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="libs/nifty-modal/js/classie.js"></script>
	<script src="libs/nifty-modal/js/modalEffects.js"></script>
	<script src="libs/sortable/sortable.min.js"></script>
	<script src="libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="libs/bootstrap-select2/select2.min.js"></script>
	<script src="libs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="libs/pace/pace.min.js"></script>
	<script src="libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="libs/prettify/prettify.js"></script>

	<script src="js/init.js"></script>
	<!-- Page Specific JS Libraries -->
	<script src="libs/d3/d3.v3.js"></script>
	<script src="libs/rickshaw/rickshaw.min.js"></script>
	<script src="libs/raphael/raphael-min.js"></script>
	<script src="libs/morrischart/morris.min.js"></script>
	<script src="libs/jquery-knob/jquery.knob.js"></script>
	<script src="libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js"></script>
	<script src="libs/jquery-clock/clock.js"></script>
	<script src="libs/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="libs/jquery-weather/jquery.simpleWeather-2.6.min.js"></script>
	<script src="libs/bootstrap-xeditable/js/bootstrap-editable.min.js"></script>
	<script src="libs/bootstrap-calendar/js/bic_calendar.min.js"></script>
	<script src="js/apps/calculator.js"></script>
	<script src="js/apps/todo.js"></script>
	<script src="js/apps/notes.js"></script>
	<script src="js/pages/index.js"></script>
    @yield('js')
	</body>
</html>
