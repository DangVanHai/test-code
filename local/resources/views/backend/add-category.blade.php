@extends('backend.master')
@section('title','Add-Cate')
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
					<li><a href="{{asset('admin/categories/show')}}">Category</a></li>
					<li class="active">Add</li>
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
					<div class="card-header">Add Category</div>
					<div class="card-body card-block">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa  fa-male"></i></div>
								<input type="text" id="cate_name" required="" name="cate_name" placeholder="What is name of category?" class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3"><label class=" form-control-label">Level</label></div>
							<div class="col col-md-9">
								<div class="form-check-inline form-check">
									<label for="inline-radio1" class="form-check-label ">
										<input type="radio" id="inline-radio1" name="cate_main" value="parent" class="form-check-input">parent
									</label>
									<label for="inline-radio2" class="form-check-label ">
										<input type="radio" id="inline-radio2" name="cate_main" value="children" class="form-check-input">children
									</label>
								</div>
							</div>
						</div>
						<div class="form-actions form-group"><button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button></div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6 Aparent Bchildren" style="display:none">
				<div class="card">
					<div class="card-header">Select Category parent</div>
					<div class="card-body card-block">
						<div class="row form-group">
							<div class="col col-md-3"><label for="selectSm" class=" form-control-label">Category</label></div>
							<div class="col-12 col-md-9">
								<select name="cate_level" id="SelectLm" class="form-control-sm form-control">
									<option value="0">Please select category</option>
									@foreach($categories as $cate)
									<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
									@endforeach
								</select>
							</div>
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

		$('.form-check-input').change(function(){
			$('.B' + $(this).val()).show();
			$('.A' + $(this).val()).hide();
		});
	});

</script>
@stop
<!-- /script -->
@stop