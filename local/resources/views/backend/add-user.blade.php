@extends('backend.master')
@section('title','Add-users')
@section('main')
@section('header')
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
<link rel="stylesheet" href="assets/scss/style.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
@stop
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
					<li><a href="#">User</a></li>
					<li class="active">Add</li>SS
				</ol>
			</div>
		</div>
	</div>
</div>
@include('backend.errors.errors')
<div class="content mt-3">
	<div class="animated fadeIn">
		<form method="post" enctype="multipart/form-data">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">Add User</div>
					<div class="card-body card-block">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa  fa-male"></i></div>
								<input type="text" id="full_name" required="" name="full_name" placeholder="your full name" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" required="" id="username" name="username" placeholder="Username" class="form-control">
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
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" id="password" required="" name="password" placeholder="Password" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-group (alias)"></i></div>
								<select name="level" required="" id="SelectLm" class="form-control form-control">
									<option value="">Please select</option>
									<option value="1">Admin</option>
									<option value="2">Employee</option>
									<option value="3">User</option>
								</select>
							</div>
						</div>
						<div class="form-group phoneadmin1 phoneadmin12 phoneadmin13" style="display:none">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								<input type="text" id="phone" name="phoneadmin" placeholder="employee's phone" class="form-control">
							</div>
						</div>
						<div class="form-actions form-group"><button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 employee_info2 employee_info21 employee_info23" style="display:none">
				<div class="card">
					<div class="card-header">Add employee infomation</div>
					<div class="card-body card-block">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa  fa-map-marker"></i></div>
								<input type="text" id="function" name="function" placeholder="employee's function" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								<input type="text" id="phone" name="phone" placeholder="employee's phone" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-home"></i></div>
								<input type="text" id="address" name="address" placeholder="employee's address" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
								<input type="text" id="id_card" name="id_card" placeholder="employee's id card" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="file" name="avatar" class="form-control hidden" onchange="changeImg(this)">
								<span><img id="avatar" class="thumbnail" src="#"></span>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-12 col-md-12"><textarea name="employee_detail" id="textarea-input" rows="3" placeholder="note employee..." class="form-control"></textarea></div>
						</div>
					</div>
				</div>
			</div>
			{{csrf_field()}}
		</form>
	</div>
</div>
@section('script')
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {  

		$('#SelectLm').change(function(){
			$('.employee_info' + $(this).val()).show();
			$('.employee_info2' + $(this).val()).hide();
			$('.phoneadmin' + $(this).val()).show();
			$('.phoneadmin1' + $(this).val()).hide();
		});
	});

</script>
@stop
<!-- /script -->
@stop