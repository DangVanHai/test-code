@extends('frontend.master')
@section('title','Điều khoản và Điều Kiện')
@section('main')
@section('header')
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

@stop

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-tree">
					<li><a href="{{asset('/')}}">Home</a></li>
					<li class="active">
						Bảo Hành & Điều Khoản
					</li>
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
			<!-- STORE -->
			<div id="store" class="col-md-12">
				<div>
					<b>• Thời gian giao hàng ( Delivery time ):</b> Giao hàng trong vòng 4-5 tuần kể từ khi nhận được xác nhận đặt hàng và tiền tạm ứng ( The goods will be delivered in Hanoi within 4-5 weeks after receipt of your order ).<br><br>
					<b>• Thời gian bảo hành ( Guarante ):</b> Bảo hành 1 năm đối với các lỗi của nhà sản xuất kể từ ngày giao hàng ( Within one year for the faults due to the manufacturer ).<br><br>
					<b>• Điều khoản thanh toán ( Payment term ):</b> Thanh toán 100% trước khi giao hàng ( 100% before the date of delivery ).<br><br>
					<b>•Hiệu lực báo giá ( Validity ):</b> Báo giá có giá trị trong vòng 30 ngày ( Quotation valids to 30 day for the amount quoted ).<br><br><br>

					Cám ơn Quý khách đã quan tâm đến Sản phẩm của Công ty chúng Tôi!
				</div>
			</div>
			<!-- /STORE -->
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