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
					<li><a href="{{asset($_prods_det->category->cate_name)}}">{{$_prods_det->category->cate_name}}</a></li>
					<li class="active">{{$_prods_det->prod_name}}</li>
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
			<!-- Product main img -->
			<div class="col-md-5 col-md-push-2">
				<div id="product-main-img">
					<div class="product-preview">
						<img src="{{asset('public/images/products/'.$_prods_det->prod_img)}}" alt="{{$_prods_det->prod_img}}">
					</div>
					@for($i=1;$i<=3;$i++)
					<div class="product-preview">
						<img src="{{asset('public/images/products/images/'.$_prods_det->prod_code.'/'.$i.'-'.$_prods_det->prod_img)}}" alt="{{$i.'-'.$_prods_det->prod_img}}">
					</div>
					@endfor
				</div>
			</div>
			<!-- /Product main img -->

			<!-- Product thumb imgs -->
			<div class="col-md-2  col-md-pull-5">
				<div id="product-imgs">
					<div class="product-preview">
						<img src="{{asset('public/images/products/'.$_prods_det->prod_img)}}" alt="{{$_prods_det->prod_img}}">
					</div>
					@for($i=1;$i<=3;$i++)
					<div class="product-preview">
						<img src="{{asset('public/images/products/images/'.$_prods_det->prod_code.'/'.$i.'-'.$_prods_det->prod_img)}}" alt="{{$i.'-'.$_prods_det->prod_img}}">
					</div>
					@endfor
				</div>
			</div>
			<!-- /Product thumb imgs -->

			<!-- Product details -->
			<div class="col-md-5">
				<div class="product-details">
					<h2 class="product-name">{{$_prods_det->prod_name}}</h2>
					<div>
						<div class="product-rating">
							@for($i=1;$i<=5;$i++)
							@if($i<=$_prods_det->prod_rate)
							<i class="fa fa-star"></i>
							@else
							<i class="fa fa-star-o"></i>
							@endif
							@endfor
						</div>
					</div>
					<div>
						<a class="review-link" href="{{asset('lienhe')}}"><h3 class="product-price"><strong>Giá :</strong>Liên Hệ</h3></a>
						@if($_prods_det->prod_qtyR >0)
						<span class="product-available">Còn Hàng</span>
						@else
						<span class="product-available">Hết Hàng</span>
						@endif
					</div>
					<p>Vui lòng <a href="{{asset('lienhe')}}">Liên hệ</a> để biết được giá hoặc chọn thêm vào báo giá sau đó vào mục báo giá ấn gửi để nhận được báo giá chi tiết qua Email.</p>
					<div class="product-options">
						<label>
							Nhà cung Cấp
							<select class="input-select">
								<option value="0">{{$_prods_det->prod_partner_name}}</option>
							</select>
						</label>
						<label>
							mã Sản Phẩm
							<select class="input-select">
								<option value="0">{{$_prods_det->prod_code}}</option>
							</select>
						</label>
					</div>
					<div class="add-to-cart">
						<form action="{{asset('/checkout/add/'.$_prods_det->prod_id)}}">
							<div class="qty-label">
								Qty
								<div class="input-number">
									<input type="number" value="1" id="qty" name="qty" min="1">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
							<button type="submit" class="add-to-cart-btn" ><i class="fa fa-shopping-cart"></i> Thêm Báo Giá</button>
						</form>
					</div>
					<ul class="product-links">
						<li>Danh Mục:</li>
						<li><a href="{{asset('/'.$_prods_det->category->cate_id.'/'.$_prods_det->category->cate_name.'.html')}}">{{$_prods_det->category->cate_name}}</a></li>
					</ul>

					<ul class="product-links">
						<li>Share:</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- /Product details -->

			<!-- Product tab -->
			<div class="col-md-12">
				<div id="product-tab">
					<!-- product tab nav -->
					<ul class="tab-nav">
						<li class="active"><a data-toggle="tab" href="#tab1">Mô tả</a></li>
						<li><a data-toggle="tab" href="#tab2">Chi Tiết</a></li>
						<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
					</ul>
					<!-- /product tab nav -->

					<!-- product tab content -->
					<div class="tab-content">
						<!-- tab1  -->
						<div id="tab1" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-12">
									<p>{!!$_prods_det->prod_detail!!}</p>
								</div>
							</div>
						</div>
						<!-- /tab1  -->

						<!-- tab2  -->
						<div id="tab2" class="tab-pane fade in">
							<div class="row">
								<div class="col-md-12">
									<div class="group-input"><label>Mã Sản Phẩm : 
									</label>
									<p>{{$_prods_det->prod_code}}</p></div>
									<div><label>Màu Sắc : 
									</label>
									<p>Liên hệ</p></div>
								</div>
							</div>
						</div>
						<!-- /tab2  -->

						<!-- tab3  -->
						<div id="tab3" class="tab-pane fade in">
							<div class="row">
								<!-- Rating -->
								<div class="col-md-3">
									<div id="rating">
										<div class="rating-avg">
											<span>4.5</span>
											<div class="rating-stars">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<ul class="rating">
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 80%;"></div>
												</div>
												<span class="sum">3</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 60%;"></div>
												</div>
												<span class="sum">2</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Rating -->

								<!-- Reviews -->
								<!-- <div class="col-md-6">
									<div id="reviews">
										<ul class="reviews">
											<li>
												<div class="review-heading">
													<h5 class="name">John</h5>
													<p class="date">27 DEC 2018, 8:0 PM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
												</div>
											</li>
											<li>
												<div class="review-heading">
													<h5 class="name">John</h5>
													<p class="date">27 DEC 2018, 8:0 PM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
												</div>
											</li>
											<li>
												<div class="review-heading">
													<h5 class="name">John</h5>
													<p class="date">27 DEC 2018, 8:0 PM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
												</div>
											</li>
										</ul>
										<ul class="reviews-pagination">
											<li class="active">1</li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div> -->
								<!-- /Reviews -->

								<!-- Review Form -->
								<!-- <div class="col-md-3">
									<div id="review-form">
										<form class="review-form" id="myForm">
											<input class="input" type="text" name="username" id="username" placeholder="Your Name">
											<input class="input" type="email" name="email" id="email" placeholder="Your Email">
											<textarea class="input" name="comment" id="comment" placeholder="Your Review"></textarea>
											<div class="input-rating">
												<span>Your Rating: </span>
												<div class="stars">
													<input id="star5" name="rating" class="rating" value="5" type="radio"><label for="star5"></label>
													<input id="star4" name="rating" class="rating" value="4" type="radio"><label for="star4"></label>
													<input id="star3" name="rating" class="rating" value="3" type="radio"><label for="star3"></label>
													<input id="star2" name="rating" class="rating" value="2" type="radio"><label for="star2"></label>
													<input id="star1" name="rating" class="rating" value="1" type="radio"><label for="star1"></label>
												</div>
											</div>
											<button class="primary-btn" id="ajaxSubmit">Bình Luận</button>
										</form>
									</div>
								</div> -->
								<h3>Bình luận</h3>
								<div class="fb-comments" data-href="http://bksensor.com" data-width="850" data-numposts="3" data-colorscheme="light" data-mobile="Auto-detected"></div>
								<!-- /Review Form -->
							</div>
						</div>
						<!-- /tab3  -->
					</div>
					<!-- /product tab content  -->
				</div>
			</div>
			<!-- /product tab -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">Sản Phẩm Liên Quan</h3>
				</div>
			</div>
			@foreach($_prods_relate as $prods_relate)
			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<a href="{{asset('chitietsanpham/'.$prods_relate->prod_id.'/'.$prods_relate->prod_slug.'.html')}}">
						<div class="product-img">
							<img src="../images/products/{{$prods_relate->prod_img}}" alt="{{$prods_relate->prod_img}}">
							<div class="product-label">
								<!-- <span class="sale">-30%</span> -->
								<span class="new">NEW</span>
							</div>
						</div>
					</a>
					<div class="product-body">
						<p class="product-category">{{$prods_relate->cate_name}}</p>
						<h3 class="product-name"><a href="{{asset('chitietsanpham/'.$prods_relate->prod_id.'/'.$prods_relate->prod_slug.'.html')}}">{{$prods_relate->prod_name}}</a></h3>
						<h4  class="product-price">Giá  <del class="product-old-price">Liên Hệ</del></h4>
						<div class="product-rating">
							@for($i=1;$i<=5;$i++)
							@if($i<=$prods_relate->prod_rate)
							<i class="fa fa-star"></i>
							@else
							<i class="fa fa-star-o"></i>
							@endif
							@endfor
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view" onclick="window.location.href='{{asset('chitietsanpham/'.$prods_relate->prod_id.'/'.$prods_relate->prod_slug.'.html')}}'"><i class="fa fa-eye"></i><span class="tooltipp">Xem Chi Tiết</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn" onclick="window.location.href='{{asset('qoute/'.$prods_relate->prod_id.'/'.$prods_relate->prod_slug.'.html')}}'"><i class="fa fa-shopping-cart"></i> Thêm Vào báo Giá</button>
					</div>
				</div>
			</div>
			<!-- /product -->
			@endforeach
			

			<div class="clearfix visible-sm visible-xs"></div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /Section -->

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
