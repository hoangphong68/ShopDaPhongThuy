<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Đức Tín</a>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Trang chủ</a></li>
				<li><a href="#">Sản phẩm</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nhập tên sản phẩm...">
				</div>
				<button type="submit" class="btn btn-default">
					Tìm kiếm
				</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="index.php?method=order">
						<i class="glyphicon glyphicon-shopping-cart"></i> 
						0
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?page=register">Đăng ký</a></li>
						<li><a href="#">Đăng nhập</a></li>
						<li><a href="#">Đăng xuất</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>