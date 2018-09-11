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
					<li class="active">Tài Khoản</li>
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
			<div class="col-md-12 col-xs-12">
				@include('backend.errors.errors')
			</div>
			@if(!Auth::check())
			<div class="col-md-6 col-xs-6">
				<div class="card">
					<div class="section-title">
						<h3 class="title" style="color:red;">ĐĂNG NHẬP</h3>
					</div>
					<div class="card-body card-block">
						<form action="{{asset('taikhoan')}}" method="post" class="">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
									<input type="email" id="email" required="" name="email" placeholder="Email" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
									<input type="password" id="password" required="" name="password" placeholder="Password" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="form-check">
									<div class="checkbox">
										<label for="checkbox1" class="form-check-label ">
											<input type="checkbox" id="checkbox1" name="check" value="Remember Me" class="form-check-input">Bạn có muốn nhớ mật khẩu & tài khoản luôn không ?
										</label>
									</div>
								</div>
							</div>
							<div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Đăng Nhập</button></div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-6">
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title" style="color:red;">ĐĂNG KÝ</h3>
					</div>
					<div class="card-body card-block">
						<form action="{{asset('taikhoan/dangky')}}" method="post" class="">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input type="text" id="username" required="" name="username" placeholder="Username" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
									<input type="email" id="email" required="" name="email" placeholder="Email" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
									<input type="text" id="text" required="" name="phone" placeholder="phone" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
									<input type="password" id="password" required="" name="password" placeholder="Password" class="form-control">
								</div>
							</div>
							<div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Đăng Ký</button></div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
			</div>
			@else
			<div class="col-md-6 col-xs-6">
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title" style="color:red;">THÔNG TIN TÀI KHOẢN</h3>
					</div>
					<div class="card-body card-block">
						<form action="{{asset('taikhoan/dangky')}}" method="post" class="">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input type="text" id="username" disabled="" value="{{Auth::user()->username}}" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
									<input type="email" id="email"  disabled=""  value="{{Auth::user()->email}}" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
									<input type="text"  disabled=""  value="{{Auth::user()->phone}}" class="form-control">
								</div>
							</div>
							{{csrf_field()}}
						</form>
					</div>
				</div>
			</div>
			@endif
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