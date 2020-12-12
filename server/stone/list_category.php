<?php 
	include_once '../../controller/stone_c.php';
	$mem = new stone_m();
	$cate = $mem->getCategory();
	// echo "<pre>";
	// print_r($rs);
	// echo "</pre>";

?>
	<?php
			foreach ($cate as $value) {
		?>			
			 <a href="index.php?id_product=<?php echo $value['id_cate']; ?>" class="list-group-item"><?php echo $value['name_cate']; ?></a> 
			
		<?php 
			} 
		?>
	
		
