
@if(Session::has('quote'))
<p class="alert alert-success">{{Session::get('quote')}}</p>
@endif
