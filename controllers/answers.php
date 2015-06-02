<?php 
	class Answers extends Controller{
		function __Answers(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('answers/index',true);
		}
		public function search(){
			$semester = $_POST['semester'];
			$module = $_POST['module'];
			$type = $_POST['type'];
			$year = $_POST['year'];
			
		}
	}
?>