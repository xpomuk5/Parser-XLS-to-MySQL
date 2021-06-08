<?php
abstract class AView{
	
	
	
	protected function render($path,$param = array()) {
		
		extract($param);
		
		$file = PATH_SITE.'/template/'.$path.'.tpl.php';
		if(is_file($file)) {
			ob_start();
			include $file;
			return ob_get_clean();
		}
	}
	
}
?>