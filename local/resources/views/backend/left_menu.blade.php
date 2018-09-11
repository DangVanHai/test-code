<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">

		<div class="navbar-header">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="{{asset('/')}}"><img src="images/logo.png" alt="Logo"></a>
			<a class="navbar-brand hidden" href="{{asset('/')}}"><img src="images/logo2.png" alt="Logo"></a>
		</div>

		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="{{asset('admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
				</li>
				<h3 class="menu-title">Members</h3><!-- /.menu-title -->
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>BKsensor</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-list"></i><a href="{{asset('admin/users/employees')}}">Employees</a></li>
						<li><i class="fa fa-info"></i><a href="{{asset('admin/users/users')}}">Users</a></li>
						<li><i class="fa fa-eye"></i><a href="{{asset('admin/users/guest')}}">Guest</a></li>
						<li><i class="fa fa-plus-square"></i><a href="{{asset('admin/users/add')}}">Add</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Social</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-facebook-square"></i><a href="#">FaceBook</a></li>
						<li><i class="fa fa-google-plus"></i><a href="#">Google+</a></li>
					</ul>
				</li>
				<h3 class="menu-title">Products</h3><!-- /.menu-title -->

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-sitemap"></i>manager</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-list-ol"></i><a href="{{asset('admin/products')}}">List of Product</a></li>
						<li><i class="fa fa-plus-circle"></i><a href="{{asset('admin/products/add')}}">Add Product</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>warehouses</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-puzzle-piece"></i><a href="{{asset('admin/warehouses/inventory')}}">inventory</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Quotes</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-envelope"></i><a href="{{asset('admin/warehouse/export')}}">Ex warehouse</a></li>
						<li><i class="fa fa-download"></i><a href="{{asset('admin/warehouse/catalogue')}}l">Ex Catalogue</a></li>
					</ul>
				</li>
				<h3 class="menu-title">Category</h3><!-- /.menu-title -->

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>manager</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{asset('admin/categories/show')}}">All Category</a></li>
						<li><i class="menu-icon ti-themify-logo"></i><a href="{{asset('admin/categories/add')}}">Add Category</a></li>
					</ul>
				</li>
				<li>
					<a href="widgets.html"> <i class="menu-icon fa fa-flag-o"></i>Test Add </a>
				</li>
				<h3 class="menu-title">Setup</h3><!-- /.menu-title -->
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
						<li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
						<li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside>