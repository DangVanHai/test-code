<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<base href="{{asset('public/frontend')}}/">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

	<title>Laravel</title>

	
	<style>
	html, body {
		background-color: #fff;
		color: #636b6f;
		font-size: 14px;
		font-family: dejavu serif;
		font-weight: 100;
		height: 100vh;
		width:764px;
		margin: 10px;
	}
	/*.full-height {
		height: 100vh;
	}
	.flex-center {
		align-items: center;
		display: flex;
		justify-content: center;
	}
	.position-ref {
		position: relative;
	}
	.top-right {
		position: absolute;
		right: 10px;
		top: 18px;
	}
	.content {
		text-align: center;
		margin-top: 30px;
	}
	.title {
		font-size: 84px;
		}*/
		.links > a {
			color: #636b6f;
			/*padding: 0 25px;*/
			/*font-size: 12px;*/
			/*font-weight: 600;*/
			/*letter-spacing: .1rem;*/
			/*text-decoration: none;*/
		}
		.logo{
			padding-top: 22px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="logo">
					<img src="{{asset('public/frontend/img/logo-gianguyenme.png')}}">
				</div>
			</div>
			<div class="col-sm-10">
				<div class="links">
					<b>TRỤ SỞ CHÍNH:</b>
					<p>Số nhà 20, nghách 1 ngõ 200, Đ.Vĩnh Hưng, P.Vĩnh Hưng, Q.Hoàng Mai, Hà Nội, Việt Nam.</p>
				</div>
				<div class="links">
					<b>VPGD:</b> <br>
					<a href="https://goo.gl/maps/14HCSVTKxdS2">Số nhà 89A, ngõ 49, Đ.Thúy Lĩnh, P.Lĩnh Nam, Q.Hoàng Mai, Hà Nội, Việt Nam.</a>
					<p>ĐT: +842462542821 ,Mobile: +84915505105 </p>
					<p>Email: hien.gianguyen.me@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr class="info">
						<th colspan= "2" style="text-align: center;">BÁO GIÁ / QUOTATION</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Người gửi / From: Gia Nguyen M&E JSC</td>
						<td>Người nhận/To:  Phu Hai</td>
					</tr>  
					<tr>
						<td>Ngày tháng /Date:04.07.2018</td>
						<td>Đại diện/Attn: Mr. Dũng</td>
					</tr>
					<tr>
						<td>HP:'0915505105-hien.gianguyen.me@gmail.com</td>
						<td>ĐT/HP:</td>
					</tr> 
					<tr>
						<td>Số/No:  04072018PH/GN</td>
						<td>Dự án /Project: </td>
					</tr>  
					<tr>
						<td colspan= "2" style=" text-transform: uppercase;">Chi tiết bao giá ( Detailed quotes )</td>
					</tr>      
				</tbody>
			</table>
		</div>
		<div class="row">
			<table class="table table-bordered table-striped">
				<thead>
					<tr style=" text-transform: uppercase;" class="info">
						<th width="5%">No</th>
						<th width="35%">Descriptions</th>
						<th width="7.5%">Unit</th>
						<th width="7.5%">Q'ty</th>
						<th width="15%">Origin</th>
						<th width="15%">U.Price(VND)</th>
						<th width="15%">Amount(VND)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="text-align: center;">1</td>
						<td>Nguồn 1 chiều 24VDC, 30W</td>
						<td>Cái</td>
						<td>1</td>
						<td>Idec</td>
						<td>50.000.000</td>
						<td>50.000.000</td>
					</tr>
					<tr style=" text-transform: uppercase; font-weight:bold;" >
						<td colspan= "6" >Tổng trước thuế ( Total not AVT )</td>
						<td>50.000.000</td>
					</tr>
					<tr style=" text-transform: uppercase; font-weight:bold;" >
						<td colspan= "6" >10 % VAT</td>
						<td>5.000.000</td>
					</tr>
					<tr style=" text-transform: uppercase; font-weight:bold;" >
						<td colspan= "6" >Tổng giá trị sau thế ( Total Inclusive VAT)</td>
						<td>55.000.000</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="alert alert-warning">
				<b style=" text-transform: uppercase;">Ghi chú ( Note ):</b>
				<p><strong>Thời gian giao hàng ( Delivery time ): </strong>Giao hàng trong vòng 2-5 ngày kể từ khi nhận được xác nhận đặt hàng và tiền tạm ứng
				( The goods will be delivered in Hanoi within 2-5 days after receipt of your order ).</p>
				<p><strong>Thời gian bảo hành ( Guarante ): </strong>Bảo hành 1 năm đối với các lỗi của nhà sản xuất kể từ ngày giao hàng ( Within one year for the 
				faults due to the manufacturer ).</p>
				<p><strong>Điều khoản thanh toán ( Payment term ): </strong>Thanh toán 100% trước khi giao hàng ( 100% before the date of delivery ).</p>
				<p class="alert alert-danger"><strong>Số tài khoản VNĐ ( Account No VNĐ): <br>
					- 170214851010840 Eximbank - Branch HaiBaTrung Hanoi-Vietnam. <br>  
					- 054.1.00.025584.3 Vietcombank - Branch ChuongDuong Hanoi - vietnam. <br>
					Tài khoản USD ( Foreign currency accounts ): <br>
				- EBVIVNVXHBT-170214851011091 Eximbank - Branch HaiBaTrung Hanoi-Vietnam. </strong></p>
				<p><strong>Địa điểm giao hàng ( Place of delivery ): </strong>Tại kho bên bán. 89A, Ngõ 49, Thúy Lĩnh, Lĩnh Nam, Hà nội.</p>
				<p><strong>Hiệu lực báo giá ( Validity ): </strong>Báo giá có giá trị trong vòng 30 ngày ( Quotation valids to 30 day for the amount quoted ).</p>
			</div>
		</div>
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading"><p style=" text-transform: uppercase;text-align: center; font-weight: bold;">Ký xác nhận báo giá</p></div>
				<div class="col-sm-6 panel-body">GIA NGUYEN M&E JSC
					( Signed) <br>
					<img src="{{asset('public/images/avatar/dvhsign.png')}}">
				</div>
				<div class="col-sm-6 panel-body">THE CUSTOMER 
				( Signed order confirmation)</div>
			</div>
		</div>
	</div>
</body>

	<!-- <div class="row">
				<div class="content">
					<div class="title m-b-md">
					</div>
					<div class="links">
						<a href="https://laravel.com/docs">Documentation</a>
						<a href="https://laracasts.com">Laracasts</a>
						<a href="https://laravel-news.com">News</a>
						<a href="https://forge.laravel.com">Forge</a>
						<a href="https://github.com/laravel/laravel">GitHub</a>
					</div>
				</div>
			</div> -->