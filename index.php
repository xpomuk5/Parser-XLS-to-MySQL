<?php
include 'config.php';
require 'vendor/autoload.php';

function autoload($class) {
	
	$file = PATH_SITE.'/class/'.strtolower($class).'.php';
	
	if(is_file($file)) {
		require PATH_SITE.'/class/'.strtolower($class).'.php';
	}
	
}
spl_autoload_register('autoload');

$task = strip_tags($_GET['task']);
$task = ($task) ? $task : 'display';

$controller = new Controller;
$controller->execute($task);
?>

