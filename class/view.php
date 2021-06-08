<?php
use Respect\Validation\Validator as V;

class View extends AView{
	
	protected $model;
	
	public function display() {
		$this->model = $this->getModel();

		echo $this->render('index',array('item'=>$item));
	}
	
	
	public function getModel() {
		return new Model;
	}
	
	
}
?>