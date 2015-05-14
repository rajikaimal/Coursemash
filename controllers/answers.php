<?php 
	class Answers extends Controller{
		function __Answers(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('answers/index',true);
		}
	}
?>