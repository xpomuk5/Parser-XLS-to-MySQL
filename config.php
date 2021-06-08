<?php
define('PATH_SITE',__DIR__);
define('URL_SITE','http://localhost/BrainForce/export');

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_NAME','test');

class Config {
	
	public $cells = array(
							'A'=>'Наименование товара',
							'B'=>'Стоимость, руб',
							'C'=>'Стоимость опт, руб',
							'D'=>'Наличие на складе 1, шт',
							'E'=>'Наличие на складе 2, шт',
							'F'=>'Страна производства',
							
							
							);
}
?>