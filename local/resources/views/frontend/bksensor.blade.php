@extends('frontend.master')
@section('title','Hi friend')
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
<link rel="stylesheet" href="../backend/assets/css/bootstrap-rating.css">


<!-- Custom stlylesheet -->

@stop

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/news.png" alt="BKsensor new">
					</div>
					<div class="shop-body">
						<h3>Bảng Tin<br>Công Nghệ SmartHome</h3>
						<a href="#" class="cta-btn">Đi Tới <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/project.png" alt=" project smart home">
					</div>
					<div class="shop-body">
						<h3>Dự Án<br> Của BKsensor</h3>
						<a href="#" class="cta-btn">Đi Tới <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/collect.png" alt="sensor Smart home">
					</div>
					<div class="shop-body">
						<h3>Smart Home<br>Bộ sưu tập</h3>
						<a href="#" class="cta-btn">Đi Tới <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION Product new-->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Sản Phẩm Mới</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav" id="myTab">
							@foreach($_cate_new as $key => $cate_new)
							<li @if($key == 0) class="active" @endif><a data-toggle="tab" href="#N{{$key}}">{{$cate_new->cate_name}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						@foreach($_cate_new as $key=> $cate_new)
						<div id="N{{$key}}" class="tab-pane @if($key == 0) active @endif">
							<div class="products-slick" data-nav="#slick-nav-5{{$key}}">
								@foreach($_prods_new as $prods_new)
								@if($cate_new->cate_id == $prods_new->prod_cate)
								<!-- product -->
								<div class="product">
									<a href="{{asset('chitietsanpham/'.$prods_new->prod_id.'/'.$prods_new->prod_slug.'.html')}}">
										<div class="product-img">
											<img src="../images/products/{{$prods_new->prod_img}}" alt="{{$prods_new->prod_img}}">
											<div class="product-label">
												<!-- <span class="sale">-30%</span> -->
												<span class="new">NEW</span>
											</div>
										</div>
									</a>
									<div class="product-body">
										<p class="product-category">{{$cate_new->cate_name}}</p>
										<h3 class="product-name"><a href="{{asset('chitietsanpham/'.$prods_new->prod_id.'/'.$prods_new->prod_slug.'.html')}}">{{$prods_new->prod_name}}</a></h3>
										<h4  class="product-price">Giá  <del class="product-old-price">Liên Hệ</del></h4>
										<div class="product-rating">
											@for($i=1;$i<=5;$i++)
											@if($i<=$prods_new->prod_rate)
											<i class="fa fa-star"></i>
											@else
											<i class="fa fa-star-o"></i>
											@endif
											@endfor
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view" onclick="window.location.href='{{asset('chitietsanpham/'.$prods_new->prod_id.'/'.$prods_new->prod_slug.'.html')}}'"><i class="fa fa-eye"></i><span class="tooltipp">Xem Chi Tiết</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn" onclick="window.location.href='{{asset('checkout/add/'.$prods_new->prod_id.'?qty=1')}}'"><i class="fa fa-shopping-cart"></i> Thêm Vào báo Giá</button>
									</div>
								</div>
								<!-- /product -->
								@endif
								@endforeach
							</div>
							<div id="slick-nav-5{{$key}}" class="products-slick-nav"></div>
						</div>
						@endforeach
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="#">Xem Ngay</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION   -->

<!-- SECTION Best sell-->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Sản Tốt Nhất</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav" id="myTab2">
							@foreach($_cate_best as $key => $cate_best)
							<li @if($key == 0) class="active" @endif><a data-toggle="tab" href="#B{{$key}}">{{$cate_best}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						@foreach($_cate_best as $key => $cate_best)
						<div id="B{{$key}}" class="tab-pane @if($key == 0) active @endif">
							<div class="products-slick" data-nav="#slick-nav-7{{$key}}">
								@foreach($_prod_best as $prod_best)
								@if($cate_best == $prod_best->cate_name)
								<!-- product -->
								<div class="product">
									<a href="{{asset('chitietsanpham/'.$prod_best->prod_id.'/'.$prod_best->prod_slug.'.html')}}">
										<div class="product-img">
											<img src="../images/products/{{$prod_best->prod_img}}" alt="{{$prod_best->prod_img}}">
											<div class="product-label">
												<!-- <span class="sale">-30%</span> -->
												<span class="new">BEST</span>
											</div>
										</div>
									</a>
									<div class="product-body">
										<p class="product-category">{{$cate_best}}</p>
										<h3 class="product-name"><a href="{{asset('chitietsanpham/'.$prod_best->prod_id.'/'.$prod_best->prod_slug.'.html')}}">{{$prod_best->prod_name}}</a></h3>
										<h4  class="product-price">Giá  <del class="product-old-price">Liên Hệ</del></h4>
										<div class="product-rating">
											@for($i=1;$i<=5;$i++)
											@if($i<=$prod_best->prod_rate)
											<i class="fa fa-star"></i>
											@else
											<i class="fa fa-star-o"></i>
											@endif
											@endfor
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view" onclick="window.location.href='{{asset('chitietsanpham/'.$prod_best->prod_id.'/'.$prod_best->prod_slug.'.html')}}'"><i class="fa fa-eye"></i><span class="tooltipp">Xem Chi Tiết</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn" onclick="window.location.href='{{asset('checkout/add/'.$prod_best->prod_id.'?qty=1')}}'"><i class="fa fa-shopping-cart"></i> Thêm Vào báo Giá</button>
									</div>
								</div>
								<!-- /product -->
								@endif
								@endforeach
							</div>
							<div id="slick-nav-7{{$key}}" class="products-slick-nav"></div>
						</div>
						@endforeach
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top Random</h4>
					<div class="section-nav">
						<div id="slick-nav-random_66" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-random_66">
					@for($i=3;$i<$count_random;$i+=3)
					<div>
						@foreach($_prod_random as $key=> $prods_random)
						<!-- product widget -->
						@if($i-3 <= $key && $key < $i)
						<div class="product-widget">
							<a href="{{asset('chitietsanpham/'.$prods_random->prod_id.'/'.$prods_random->prod_slug.'.html')}}">
								<div class="product-img">
									<img src="../images/products/{{$prods_random->prod_img}}" alt="{{$prods_random->prod_img}}">
								</div>
							</a>
							<div class="product-body">
								<p class="product-category">{{$prods_random->cate_name}}</p>
								<h3 class="product-name"><a href="{{asset('chitietsanpham/'.$prods_random->prod_id.'/'.$prods_random->prod_slug.'.html')}}">{{$prods_random->prod_name}}</a></h3>
								<h4  class="product-price">Giá  <del class="product-old-price">Liên Hệ</del></h4>
							</div>
						</div>
						@endif
						<!-- /product widget -->
						@endforeach
					</div>
					@endfor
				</div>
			</div>

			<div class="col-md-4 col-xs-6" >
				<div class="section-title">
					<h4 class="title">Top New</h4>
					<div class="section-nav">
						<div id="slick-nav-topNew4" class="products-slick-nav"></div>
					</div>
				</div>
				<div class="products-widget-slick" data-nav="#slick-nav-topNew4">
					@for($i=3;$i<$count_Newrandom;$i+=3)
					<div>
						@foreach($_top_new as $key=> $top_new)
						<!-- product widget -->
						@if($i-3 <= $key && $key < $i)
						<div class="product-widget">
							<a href="{{asset('chitietsanpham/'.$top_new->prod_id.'/'.$top_new->prod_slug.'.html')}}">
								<div class="product-img">
									<img src="../images/products/{{$top_new->prod_img}}" alt="{{$top_new->prod_img}}">
								</div>
							</a>
							<div class="product-body">
								<p class="product-category">{{$top_new->cate_name}}</p>
								<h3 class="product-name"><a href="{{asset('chitietsanpham/'.$top_new->prod_id.'/'.$top_new->prod_slug.'.html')}}">{{$top_new->prod_name}}</a></h3>
								<h4  class="product-price">Giá  <del class="product-old-price">Liên Hệ</del></h4>
							</div>
						</div>
						@endif
						<!-- /product widget -->
						@endforeach
					</div>
					@endfor
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6" >
				<div class="section-title">
					<h4 class="title">Top Proriect</h4>
					<div class="section-nav">
						<div id="slick-nav-random_666" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-random_666">
					@for($i=3;$i<$count_random;$i+=3)
					<div>
						@foreach($_prod_random as $key=> $prods_random)
						<!-- product widget -->
						@if($i-3 <= $key && $key < $i)
						<div class="product-widget">
							<a href="{{asset('chitietsanpham/'.$prods_random->prod_id.'/'.$prods_random->prod_slug.'.html')}}">
								<div class="product-img">
									<img src="../images/products/{{$prods_random->prod_img}}" alt="{{$prods_random->prod_img}}">
								</div>
							</a>
							<div class="product-body">
								<p class="product-category">{{$prods_random->cate_name}}</p>
								<h3 class="product-name"><a href="{{asset('chitietsanpham/'.$prods_random->prod_id.'/'.$prods_random->prod_slug.'.html')}}">{{$prods_random->prod_name}}</a></h3>
								<h4  class="product-price">Giá  <del class="product-old-price">Liên Hệ</del></h4>
							</div>
						</div>
						@endif
						<!-- /product widget -->
						@endforeach
					</div>
					@endfor
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

@section('script')

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script src="../backend/assets/js/vendor/bootstrap-rating.min.js"></script>
<script type="text/javascript">
	$(function () {
		$('#myTab a:first').tab('show');
		$('#myTab a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		});
		$('#myTab2 a:first').tab('show');
		$('#myTab2 a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		});
	});

</script>
@stop
@stop