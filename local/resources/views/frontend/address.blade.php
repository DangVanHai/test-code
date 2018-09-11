@extends('frontend.master')
@section('title','Chi Tiết Sản Phẩm')
@section('main')
@section('header')
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css"/>
<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
@stop

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Về Chúng Tôi</h3>
				<ul class="breadcrumb-tree">
					<li><a href="{{asset('/')}}">Home</a></li>
					<li class="active">Liên Hệ</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-6 col-xs-6">
				<p>BKsensor công ty thương mại chuyên cung cấp các thiết bị công nghệ cao.</p>
				<ul class="footer-links">
					<li><a href="{{asset('lienhe')}}"><i class="fa fa-map-marker"></i>49 ThuyLinh HaNoi</a></li>
					<li><a href="{{asset('lienhe')}}" onClick="alert('phone : 091-87-68-74')"><i class="fa fa-phone"></i>+8491-87-68-74</a></li>
					<li><a href="{{asset('lienhe')}}" ><i class="fa fa-envelope-o"></i>bksensors@email.com</a></li>
				</ul>
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="card-body text-secondary"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.3663468709162!2d105.89346669075968!3d20.973973972035807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ae93fa4c18fb%3A0x1145958c261df9b7!2zNDkgVGjDunkgTMSpbmgsIEzEqW5oIE5hbSwgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1530876295996" width="1135" height="250" frameborder="0" style="border:1" allowfullscreen></iframe></div>
			</div>

		</div>
	</div>
	<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->


@section('script')

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

@stop
@stop