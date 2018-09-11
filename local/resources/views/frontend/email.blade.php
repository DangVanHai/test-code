<style type="text/css">
#wrap-inner{
	margin-top: 15px;
}
#khach-hang h3{
	color: #ff9600;
	margin-bottom: 15px;
}
#cong-ty h3{
	float: left;
	color: #ff9600;
	margin-bottom: 15px;
}
#hoa-don h3{
	color: #ff9600;
	margin-bottom: 15px;
}
table{
	font-size: 16px;
}
table td{
	padding: 15px 5px;
}
table td.price{
	color: red;
}
table td.total-price{
	font-weight: bold;
	color: #e60000;
}
table tr.bold{
	font-weight: bold;
}
.info{
	font-weight: bold
}
p.info{
	margin-top: 20px;
}
</style>

<div id="wrap-inner">
	<h4 class="title"><span class="text"><strong>Báo Giá </strong>Của Bạn</span></h4>
	<div id="cong-ty">
		<h3>Thông tin Người gửi</h3>
		<p>
			<span class="info">Người gửi / From: </span>
			BKsensor M&E JSC
		</p>
		<p>
			<span class="info">Ngày tháng /Date: </span>
			{{$date}}
		</p>
		<p>
			<span class="info">Email: </span>
			bksensors@gmail.com
		</p>
		<p>
			<span class="info">Điện thoại: </span>
			0918 876 874
		</p>
		<p>
			<span class="info">Địa chỉ: </span>
			49 ThuyLinh HaNoi
		</p>
		<p>
			<span class="info">Số/No:</span>
			{{$codeQuote}}		
		</p>
	</div>
	@if(!Auth::check())
	<div id="khach-hang">
		<h3>Thông tin khách hàng</h3>
		<p>
			<span class="info">Khách hàng: </span>
			{{$info['name']}}
		</p>
		@if($info['company']!=NULL)
		<p>
			<span class="info">MST: </span>
			{{$info['company']}}
		</p>
		@endif
		<p>
			<span class="info">Email: </span>
			{{$info['email']}}
		</p>
		<p>
			<span class="info">Điện thoại: </span>
			{{$info['phone']}}
		</p>
		<p>
			<span class="info">Địa chỉ: </span>
			{{$info['address']}}
		</p>
	</div>
	@else
	<div id="khach-hang">
		<h3>Thông tin khách hàng</h3>
		<p>
			<span class="info">Khách hàng: </span>
			{{$userInfo->full_name}}
		</p>
		@if($userInfo->company== 1)
		<p>
			<span class="info">MST: </span>
			{{$userInfo->company_id}}
		</p>
		@endif
		<p>
			<span class="info">Email: </span>
			{{$userInfo->email}}
		</p>
		<p>
			<span class="info">Điện thoại: </span>
			{{$userInfo->phone}}
		</p>
		<p>
			<span class="info">Địa chỉ: </span>
			{{$userInfo->address1}}
		</p>
	</div>
	@endif
	
	<div id="hoa-don">
		<h3>Hóa Đơn Mua Hàng</h3>	
		<hr>			
		<table BORDER="5" CELLPADDING="2" CELLSPACING="0" class="table table-striped">
			<thead>
				<tr>
					<th width="10%">STT</th>
					<th width="25%">Ảnh</th>
					<th width="25%">Tên</th>
					<th width="20%">Số Lượng</th>
					<th width="10%">Giá(đ)</th>
					<th width="10%">Tổng giá(đ)</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $key=>$slide)
				<tr>
					<td  ALIGN="CENTER">
						<p>{{$stt++}}</p>
					</td>
					<td  ALIGN="CENTER"><img alt="{{$slide->name}}" style="width: 100px; height: 100px;" src="{{asset('local/public/images/products/'.$slide->options->image)}}"></td>
					<td >{{$slide->name}}</td>
					<td  ALIGN="CENTER">{{$slide->qty}}</td>
					<td >{{number_format($slide->price,0,',','.')}}  đ</td>
					<td class="price">{{number_format($slide->price*$slide->qty,0,',','.')}} đ</td>
				</tr>
				@endforeach
				<tr >
					<td COLSPAN="5"><h4>Tổng giá Trước Thuế</h4></td>
					<td class="price"><strong>{{$subtotal}} đ</strong></td>
				</tr><tr>
					<td COLSPAN="5"><h4>VAT (10 %)</h4></td>
					<td class="price"><strong>{{$tax}} đ</strong></td>
				</tr><tr>
					<td COLSPAN="5"><h4>Tổng giá Sau Thuế</h4></td>
					<td class="price"><strong>{{$total}} đ</strong></td>
				</tr>		  
			</tbody>
		</table>
	</div>
	<hr/>
	<div id="xac-nhan">
		<br>
		<p align="justify">
			<b>Quý khách đã đặt báo giá thành công!</b><br />
			• Thời gian giao hàng ( Delivery time ): 
			Giao hàng trong vòng 4-5 tuần kể từ khi nhận được xác nhận đặt hàng và tiền tạm ứng
			( The goods will be delivered in Hanoi within 4-5 weeks after receipt of your order ).<br />
			• Thời gian bảo hành ( Guarante ): 
			Bảo hành 1 năm đối với các lỗi của nhà sản xuất kể từ ngày giao hàng ( Within one year for the 
			faults due to the manufacturer ).<br />
			• Điều khoản thanh toán ( Payment term ): 
			Thanh toán 100% trước khi giao hàng ( 100% before the date of delivery ).<br />
			•Hiệu lực báo giá ( Validity ): 
			Báo giá có giá trị trong vòng 30 ngày ( Quotation valids to 30 day for the amount quoted ).<br />
			<b><br />Cám ơn Quý khách đã quan tâm đến Sản phẩm của Công ty chúng Tôi!</b>
		</p>
	</div>
</div>
