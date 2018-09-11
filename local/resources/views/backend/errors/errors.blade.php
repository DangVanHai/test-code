@if(Session::has('error'))
<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif
@if(Session::has('error_add_cate'))
<p class="alert alert-danger">{{Session::get('error_add_cate')}}</p>
@endif
@if(Session::has('success'))
<p class="alert alert-success">{{Session::get('success')}}</p>
@endif
@if(Session::has('comment'))
<p class="alert alert-success">{{Session::get('comment')}}</p>
@endif
@if(Session::has('adduser'))
<div class="content mt-3">
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">Success </span>{{Session::get('adduser')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif
<!-- lỗi thêm danh mục -->
@if(isset($errors))
@foreach($errors->all() as $value)
<p class="alert alert-danger">{{$value}}</p>
@endforeach
@endif
