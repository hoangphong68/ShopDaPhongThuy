<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đức Tín Company</title>

	<link rel="stylesheet" href="asset/css/bootstrap.min.css" />
	<link rel="stylesheet" href="asset/css/myCSS.css" />
	<link rel="stylesheet" href="asset/fonts/glyphicons-halflings-regular.ttf" />
	<link rel="stylesheet" href="asset/fonts/glyphicons-halflings-regular.woff" />	
</head>

<body>
	<div class="container">
		<!-- START MENU Header -->
		<div class="row">
			<?php include_once 'layout/header.php'; ?>
		</div>
		<!-- END MENU Header -->

		<!-- START banner -->
		<?php  
			// if ($page != 'register') {
		?>
		<div class="row">
			<?php include_once 'layout/banner.php'; ?>
		</div>
		<?php
			// }
		?>
		
		<!-- END banner -->

		<!-- START category product -->
		<div class="row">
			<?php 

			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			} else{
				$page = 'index';
			}

			switch ($page) {
				case 'index':
				include_once 'views/home.php';
				break;

				// case 'remove':
				// 	if (isset($_GET['id_product'])) {
				// 		$id = (int)$_GET['id_product'];
				// 		$cate = $this->mem->getCategory();
				// 		$pro = $this->mem->getProductById($id);
				// 		if(count($pro)>0) $nameCate=$pro[0]['name_cate'];
				// 		else $nameCate="hello";
				// 		include_once 'views/home.php';
				// 	}else{
				// 		header("Location: index.php");
				// 	}
				// break;

				default:
				echo "<h4 style='color: red;'>ERROR 404, trang không tồn tại <span><a href='index.php' style='color: blue;'>Quay lại</a></span></h4>";
				break;
			}
			?> 



		</div>
		<!-- START Footer -->

		<?php include_once 'layout/footer.php'; ?>

		<!-- END Footer -->

		<!-- jQuery -->
		<script src="asset/js/jquery-3.4.1.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/js/myJava.js?t=<?php echo fileatime('asset/js/myJava.js') ?>"></script>	
	</body>

	</html>