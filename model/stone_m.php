<?php 
	include_once '../../config/myConfig.php';

		class stone_m extends Connect
	{
		
		function __construct(){
			parent::__construct(); 
		}

		// Lấy Danh mục sản phẩm
			public function getCategory(){
				$sql = "SELECT * FROM tbl_cate ";
				$pre = $this->pdo->prepare($sql);
				$pre->execute();
				$result = array();

				while ($row = $pre->fetch(PDO::FETCH_ASSOC)) {
					$result[] = $row;
				}
				return $result;
			}		

		// Lấy ra chi tiết sản phẩm
			public function getProduct(){
				$sql = "SELECT *FROM tbl_cate,tbl_product WHERE tbl_cate.id_cate = tbl_product.id_cate ORDER BY tbl_product.id_product DESC";
				$pre = $this->pdo->prepare($sql);
				$pre->execute();
				return $pre->fetchAll(PDO::FETCH_ASSOC);
			}
		
	}


 ?>