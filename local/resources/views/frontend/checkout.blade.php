@extends('frontend.master')
@section('title','Check out')
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
				<h3 class="breadcrumb-header">Yêu Cầu Báo Giá</h3>
				<ul class="breadcrumb-tree">
					<li><a href="{{asset('/')}}">Home</a></li>
					<li class="active">Báo Giá</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->
@include('frontend.errors')
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<form method="post" action="{{asset('checkout/payment/guest')}}">
				
				<div class="col-md-5">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Địa Chỉ Báo Giá</h3>
						</div>
						@if(!Auth::user())
						<div class="form-group">
							<input class="input" type="text" required="" name="name" placeholder="Tên đầy đủ của bạn">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="company" placeholder="Tên công ty của bạn">
						</div>
						<div class="form-group">
							<input class="input" type="text" required="" name="address" placeholder="Địa chỉ">
						</div>
						<div class="form-group">
							<input class="input" type="email" required="" name="email" placeholder="Email của bạn">
						</div>
						<div class="form-group">
							<input class="input" type="tel" required="" name="phone" placeholder="Số điện thoại">
						</div>
						
						<div class="form-group">
							<div class="input-checkbox">
								<input type="checkbox" id="create-account">
								<label for="create-account">
									<span></span>
									Bạn có muốn tạo tài khoản luôn không ?
								</label>
								<div class="caption">
									<p>Hãy điền mật khẩu của bạn.</p>
									<input class="input" type="password" name="password" placeholder="Enter Your Password">
								</div>
							</div>
						</div>
						@else
						<div class="form-group">
							<input class="input" type="text" disabled="" name="name" value="{{Auth::user()->username}}">
						</div>
						<div class="form-group">
							<input class="input" type="email" disabled="" name="email" value="{{Auth::user()->email}}">
						</div>
						<div class="form-group">
							<input class="input" type="tel" disabled="" name="phone" value="{{Auth::user()->phone}}">
						</div>
						<div class="form-group">
							<input class="input" type="text" required="" name="address" placeholder="Địa chỉ của bạn">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="company" placeholder="Tên công ty của bạn">
						</div>
						@endif
					</div>
					<!-- /Billing Details -->
					<div class="section-title">
						<h3 class="title">Viết Thêm Yêu Cầu Hoặc Câu Hỏi</h3>
					</div>
					<!-- Order notes -->
					<div class="order-notes">
						<textarea class="input" placeholder="Order Notes"></textarea>
					</div>
					<!-- /Order notes -->

				</div>

				<!-- Order Details -->
				<div class="col-md-7 order-details">
					<div class="section-title text-center">
						<h3 class="title">Yêu cầu Báo Giá Của Bạn</h3>
					</div>
					@if(Cart::count()>=1)
					<div class="order-summary">
						<table class="table table-striped">
							<thead>
								<tr>

									<th width="20%">STT</th>
									<th >Tên Sản Phẩm</th>
									<th width="30%">Số Lượng</th>
									<th width="5%">Xóa</th>
								</tr>
							</thead>
							<tbody>
								@foreach($cart as $key=>$slide)
								<tr>

									<td>{{$stt++}}</td>
									<td>{{$slide->name}}</td>
									<td>
										<div>
											<input style=" width: 30%;" name="qty" type="number" value="{{$slide->qty}}" min="1" onchange="updateCart(this.value,'{{$slide->rowId}}')" />
										</div>
									</td>
									<td>
										<a href="{{asset('checkout/delete/'.$slide->rowId)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><span class="fa fa-times"></span></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="input-checkbox">
						<label for="terms">
							<span></span>
							Chúng tôi sẽ gửi yêu cầu báo giá chi tiết sản phẩm kèm <a href="#">Điều khoản và điều kiện</a>
						</label>
					</div>
					<button type="submit"  class="primary-btn order-submit">Gửi Yêu Cầu</button>
					
					{{csrf_field()}}
				</form>
				@else
				<p class="alert alert-danger">Bạn Chưa Thêm Sản Phẩm Nào</p>
				<a href="{{asset('/')}}" class="primary-btn order-submit">Quay Lại Thêm Sản Phẩm</a>
				@endif
			</div>
			<!-- /Order Details -->
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
<script type="text/javascript">
	function updateCart(qty,rowId){
		$.get(
			"{{asset('checkout/update')}}",
			{qty:qty,rowId:rowId},
			function(){
				location.reload();
			}
			);
	}
</script>

@stop
@stop
