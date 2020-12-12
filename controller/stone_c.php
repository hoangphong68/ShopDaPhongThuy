<?php 
	include_once "../../model/stone_m.php";

	/**
	 * 1
	 */
	class stone_c extends stone_m
	{
		private $mem;

		function __construct()
		{
			$this->mem = new stone_m(); 
		}

		public function getCategory(){
			return $this->mem->getCategory();
		}

		public function getProduct(){
			return $this->mem->getProduct();
		}
		
		
	}
?>