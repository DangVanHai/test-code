@extends('backend.master')
@section('title','Products')
@section('main')
@section('header')

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/jquery-confirm.css">
<link rel="stylesheet" href="assets/css/bootstrap-rating.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
<link rel="stylesheet" href="assets/scss/style.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<style type="text/css">
#abc {
width:100%;
height:100%;
opacity:.95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto
}
img#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer
}
div#popupContact {
position:absolute;
left:50%;
top:17%;
margin-left:-202px;
font-family:'Raleway',sans-serif
}
form {
max-width:300px;
min-width:250px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#fff
}
p {
margin-top:30px
}
h2 {
background-color:#FEFFED;
padding:20px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}
input[type=text] {
width:82%;
padding:10px;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway
}
#name {
background-image:url(../images/name.jpg);
background-repeat:no-repeat;
background-position:5px 7px
}
#email {
background-image:url(../images/email.png);
background-repeat:no-repeat;
background-position:5px 7px
}
textarea {
background-image:url(../images/msg.png);
background-repeat:no-repeat;
background-position:5px 7px;
width:82%;
height:95px;
padding:10px;
resize:none;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway;
margin-bottom:30px
}
#submit {
text-decoration:none;
width:100%;
text-align:center;
display:block;
background-color:#FFBC00;
color:#fff;
border:1px solid #FFCB00;
padding:10px 0;
font-size:20px;
cursor:pointer;
border-radius:5px
}
span {
color:red;
font-weight:700
}
/*button {
width:10%;
height:45px;
border-radius:3px;
background-color:#cd853f;
color:#fff;
font-family:'Raleway',sans-serif;
font-size:18px;
cursor:pointer
}
*/
</style>
@stop
<!-- dashboard -->
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Dashboard</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Admin</a></li>
					<li class="active">Products</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- /dashboard -->

<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-2">
								<strong class="card-title">PRODUCTS-LIST</strong>
							</div>
							<div class="col-md-2 ml-auto">
								<button type="button" name="submit" class="btn btn-outline-primary btn-sm" ><a href="{{asset('admin/products/add')}}">Add product</a></button>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="3%" >#</th>
									<th width="16%">Name</th>
									<th width="10%">Code</th>
									<th width="5%">Qty</th>
									<th >image</th>
									<th width="8%">Price</th>
									<th width="12%">rate</th>
									<th width="5%">Quote</th>
									<th width="5%">Edit</th>
									<th width="5%">Del</th>
								</tr>
							</thead>
							<tbody>
								@foreach($prods as $prod)
								<tr>
									<td>{{$prod->prod_id}}</td>
									<td><a href="{{asset('admin/products/show/'.$prod->prod_id)}}">{{$prod->prod_name}}</a></td>
									<td>{{$prod->prod_code}}</td>
									<td>{{$prod->prod_qtyR}}</td>
									<td data-sortable="true">
										<span class="thumb"><img width="80px" height="150px" src="{{asset('public/images/products/'.$prod->prod_img)}}" /></span>
									</td>
									<td class="prod_pe">{{$prod->prod_pe}} đ</td>
									<td>
										<input value="{{$prod->prod_rate}}" disabled="" type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2"/>
									</td>					        
									<td>
										<a id="popup" onclick="div_show()" class="example-p-7-1"><span class="fa fa-shopping-cart" style=" text-align: center;  width: 100%;height:100%;"></span></a>
										<div id="abc">
											<!-- Popup Div Starts Here -->
											<div id="popupContact">
												<!-- quatity to quotes -->
												<form action="#" id="form" method="post" name="form">
													<span id="close" onclick ="div_hide()" class="fa fa-times" style=" text-align: center;  width: 100%;height:100%;"></span>
													<b>hẫy điền số lượng muốn báo giá cho mã {{$prod->prod_code}}</b>
													<hr>
													<input style="display: none;" id="prod_id" name="prod_id" value="{{$prod->prod_id}}" type="number">
													<input id="number" name="quatity" min="1" type="number">
													<a href="javascript:%20check_empty()" id="submit">Send</a>
												</form>
											</div>
											<!-- Popup Div Ends Here -->
										</div>
									</td>
									<td>
										<a href="{{asset('admin/products/edit/'.$prod->prod_id)}}"><span class="fa fa-gavel" style=" text-align: center;  width: 100%;height:100%;"></span></a>
									</td>
									<td>
										<a href="{{asset('admin/products/del/'.$prod->prod_id)}}"><span class="fa fa-times" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style=" text-align: center;  width: 100%;height:100%;"></span></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .animated -->
</div><!-- .content -->
<div class="row lead">
	<div id="hearts" class="starrr"></div>
	You gave a rating of <span id="count">0</span> heart(s)
</div>
<!-- Right Panel -->

@section('script')
<!-- <script src="assets/js/vendor/jquery-2.1.4.min.js"></script> -->
<!-- <script src="assets/js/vendor/jquery-2.1.4.min.js"></script> -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/jquery-confirm.js"></script>
<script src="assets/js/vendor/bootstrap-rating.min.js"></script>
<script src="assets/js/vendor/tooltip.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>


<script type="text/javascript">
	$(document).ready(function(e) {
		$('#bootstrap-data-table-export').DataTable();
	});
</script>
<script type="text/javascript">
	// Validating Empty Field
	function check_empty() {
		if (document.getElementById('quatity').value == "" || document.getElementById('prod_id').value == "") {
			alert("Fill All Fields !");
		} else {
			document.getElementById('form').submit();
			alert("Form Submitted Successfully...");
		}
	}
//Function To Display Popup
function div_show() {
	document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
	document.getElementById('abc').style.display = "none";
}
</script>
@stop
<!-- /script -->
@stop
