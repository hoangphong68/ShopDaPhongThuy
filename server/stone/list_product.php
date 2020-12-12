<?php 
include_once '../../controller/stone_c.php';
$mem = new stone_m();
$prod = $mem->getProduct();

// echo "<pre>";
// print_r($prod);
// echo "</pre>";
?>


<div class="col-md-12">
	<h4 style="color: red; text-align: center;"><i class="glyphicon glyphicon-time"></i>Hot Product</a>
	</h4>
</div>
<?php
	foreach ($prod as $valuePD) {
?>
	<div class="col-xs-6 col-sm-6 col-md-4">
		<!-- Sản phẩm chi tiết -->
		<div class="thumbnail">
			<img src="asset/images/Product/<?php echo $valuePD['image']; ?>" style="width: 252px; height: 324px;" alt="...">
			<div class="caption">
				<h5>
					<?php echo $valuePD['name']; ?>
					<span style="float: right; color: red; font-weight: bold;">
						<?php echo number_format($valuePD['price']); ?>
					</span>
				</h5>
				<p>
					<a href="#" class="btn btn-primary" role="button">Xem chi tiết</a> 
					<a href="#" class="btn btn-danger" role="button">
					Thêm vào giỏ</a>
				</p>
			</div>
		</div>
	</div>
<?php 
	} 
?>
