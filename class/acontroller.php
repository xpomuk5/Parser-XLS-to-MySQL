<?php

abstract class  AController{
	
	public $conig;
	
	public function __construct() {
		$this->config = new Config;	
	}
}
?>