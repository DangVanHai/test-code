<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{{csrf_token()}}" />
	<meta property="fb:app_id" content="246639242789055" />
	<meta property="fb:admins" content="100003536296397">
	<base href="{{asset('public/frontend')}}/">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	@yield('header')
	<link type="text/css" rel="stylesheet" href="css/style.css"/>


	<title>GN | @yield('title')</title>

	<!-- Google font -->

</head>
<!-- comment facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=246639242789055&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- /comment facebook -->
<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="{{asset('lienhe')}}"><i class="fa fa-map-marker"></i>49 ThuyLinh HaNoi</a></li>
					<li><a href="tel:+84918-876-874"><i class="fa fa-phone"></i>+84918-876-874</a></li>
					<li><a href="mailto:bksensors@gmail.com?Subject=Hello%20BKsensor" target="_top"><i class="fa fa-envelope-o"></i>bksensors@gmail.com</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="{{asset('lienhe')}}"><i class="fa fa-map-marker"></i> Liên Hệ</a></li>
					@if(Auth::check())
					<li>
						<div class="user-area dropdown float-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<p ><i class="fa fa-user-o"></i>Hi, {{Auth::user()->username}}</p>
							</a>
							<div class="user-menu dropdown-menu" style="background:#1E1F29;">
								@if(Auth::user()->level!=3)
								<a  href="{{asset('admin')}}">Manager</a><br>
								@endif
								<a  href="{{asset('taikhoan')}}">My Profile</a><br>
								<a  href="{{asset('taikhoan/dangxuat')}}"></i>Logout</a>
							</div>
						</div>
					</li>
					@else
					<li><a href="{{asset('taikhoan')}}"><i class="fa fa-user-o"></i> Tài Khoản</a></li>
					@endif
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="{{asset('/')}}" class="logo">
								<img src="./img/logo-gianguyenme.png" alt="logo-gianguyenme">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form method="get" rule="search" action="{{asset('search')}}">
								<select name="cate" class="input-select">
									<option value="0">Tất cả</option>
									@foreach($cate_parents as $cate_parent)
									<option value="{{$cate_parent->cate_id}}">{{$cate_parent->cate_name}}</option>
									@endforeach
								</select>
								<input class="input" placeholder="Search here" name="search"  value="">
								<button type="submit" class="search-btn">Kìm Kiếm</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Báo Giá</span>
									<div class="qty">{{Cart::count()}}</div>
								</a>
								<div class="cart-dropdown">
									@if(Cart::count()>0)
									<div class="cart-list">
										@foreach(Cart::content() as $slide)
										<div class="product-widget">
											<div class="product-img">
												<img src="../images/products/{{$slide->options->image}}" alt="{{$slide->options->image}}">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="
													{{asset('chitietsanpham/'.$slide->id.'/'.$slide->options->slug.'.html')}}"><span class="qty">{{$slide->qty}} x </span>{{$slide->name}}</a></h3>
												</div>
												<button onclick="Deletecart('{{$slide->rowId}}')" class="delete"><i class="fa fa-close"></i></button>
											</div>
											@endforeach
										</div>
										<div class="cart-summary">
											<small>{{Cart::count()}} Item(s) selected</small>
											<h5>Tổng Giá: Yêu cầu báo giá để biết</h5>
										</div>
										<div class="cart-btns">
											<a href="{{asset('lienhe')}}">Liên Hệ</a>
											<a href="{{asset('checkout')}}">Xem Báo Giá <i class="fa fa-arrow-circle-right"></i></a>
										</div>
										@else
										<p> bạn chưa thêm sản phẩm nào</p>
										@endif
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav" class="menu">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						@foreach($cate_parents as $cate_parent)
						<li><a href="{{asset('/'.$cate_parent->cate_id.'/'.$cate_parent->cate_name.'.html')}}">{{$cate_parent->cate_name}}</a>
							@if($cate_parent->cate_main =="parents")
							<ul>
								@foreach($cate_childrens as $cate_children)
								@if($cate_children->cate_level == $cate_parent->cate_id)
								<li><a href="{{asset('/'.$cate_children->cate_id.'/'.$cate_children->cate_name.'.html')}}">{{$cate_children->cate_name}}</a></li>
								@endif
								@endforeach
							</ul>
							@endif
						</li>
						@endforeach
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
		@yield('main')
		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Đăng ký để nhận <strong>BẢN TIN</strong></p>
							<div class="alert alert-success" id="success" style="display:none"></div>
							<div class="alert alert-danger" id="errors" style="display:none"></div>
							<form id="myForm">
								<input class="input" type="email" id="sub" required="" placeholder="Nhập Email Của Bạn">
								<button type="submit" id="ajaxSubmit" class="newsletter-btn"><i class="fa fa-envelope"></i> ĐĂNG KÝ</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>BKsensor công ty thương mại chuyên cung cấp các thiết bị công nghệ cao.</p>
								<ul class="footer-links">
									<li><a href="{{asset('lienhe')}}"><i class="fa fa-map-marker"></i>49 ThuyLinh HaNoi</a></li>
									<li><a href="tel:+84918-876-874"><i class="fa fa-phone"></i>+84918-876-874</a></li>
									<li><a href="mailto:bksensors@gmail.com?Subject=Hello%20BKsensor" target="_top"><i class="fa fa-envelope-o"></i>bksensors@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Danh Mục</h3>
								<ul class="footer-links">
									@foreach($cate_parents as $cate_parent)
									<li><a href="{{asset('/'.$cate_parent->cate_id.'/'.$cate_parent->cate_name.'.html')}}">{{$cate_parent->cate_name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Thông Tin</h3>
								<ul class="footer-links">
									<li><a href="{{asset('lienhe')}}">Chúng Tôi</a></li>
									<li><a href="{{asset('lienhe')}}">Liên Hệ</a></li>
									<li><a href="{{asset('baohanh-dieukhoan')}}">Bảo Hành</a></li>
									<li><a href="{{asset('baohanh-dieukhoan')}}">Điều Khoản Và Điều Kiện</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Dịch Vụ</h3>
								<ul class="footer-links">
									<li><a href="{{asset('taikhoan')}}">Tài Khoản Của bạn</a></li>
									<li><a href="{{asset('checkout')}}">Xem Báo Giá</a></li>
									<li><a href="{{asset('new.bksensor.com')}}">Bảng Tin</a></li>
									<li><a href="{{asset('lienhe')}}">Trợ Giúp</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://new.bksensor.com" target="_blank">BKsensor</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->

		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript">

			$('.menu > ul').superfish({ 
				delay:       100,                           
				animation:   {opacity:'show', height:'show'}, 
				speed:       'fast',
				arrowClass: false,
				autoArrows:  true
			});
		</script>
		@section('script')
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('#ajaxSubmit').click(function(e){
					e.preventDefault();
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
						}
					});
					var post = $('#sub').val();
					if(post==''){
						alert('Làm ơn hãy điền địa chỉ mail của bạn');
						$('#sub').focus();
					}
					else{
						$.ajax({
							type: 'POST',
							url: '{{asset("sub")}}',
							data: {post},
							success: function(result){
								console.log(result);

								if (result.error == true) {
									jQuery.each(result.message, function(key, value){
										jQuery('#success').hide();
										jQuery('#errors').show();
										jQuery('#errors').append(value);
									});
								}else{
									jQuery('#errors').hide();
									jQuery('#success').show();
									jQuery('#success').html(result.success);
								}

							}

						});					
					}
				});
			});
		</script>
		<script type="text/javascript">
			function Deletecart(rowId){
				$.get(
					"{{asset('checkout/delete/')}}"+"/"+rowId,
					function(){
						location.reload();
					}
					);
			}
		</script>
		@yield('script')

	</body>
	</html>
