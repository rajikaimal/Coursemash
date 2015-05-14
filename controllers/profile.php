<?php 
	class Profile extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			Session::init();
			if(!empty($_SESSION['loggedIn'])){
				$this->view->render('profile/index',true);
				//require 'models/Profile_model.php';
				//$model = new Profile_model();
				//$model->loadData();
			}
			else{
				header('location:'.URL.'login');
			}
		}
		public function saveInfo(){	
			require 'models/Profile_model.php';
			$model = new Profile_model();
			$model->saveInfo();
			header('location:'.URL.'profile');
		}
		public function savePass(){
			require 'models/Profile_model.php';
			$model = new Profile_model();
			$model->savePass();
			header('location:'.URL.'profile');
		}
	}
?>