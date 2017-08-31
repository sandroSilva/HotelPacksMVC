<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct() {  
        $this->model = new Model();
    } 
	
	public function invoke() {
		$packs = $this->model->getPackList();
		include 'view/packlist.php';
	}
}

?>