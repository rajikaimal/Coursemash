<?php 
	class Index extends Controller{
		function __construct(){
			parent::__construct();
			Session::init();
			$logged = Session::get('loggedIn');
			if(empty($logged)){
				Session::destroy();
				header('location:'. URL .'login');
				exit;
			}
		}
		public function index(){
			Session::init();	
			if(isset($_SESSION['loggedIn'])){
				$this->view->render('index/index',false);	
			}
			else{
				header('location:'.URL.'login');
			}
			
		}
		public function logOut(){
			Session::destroy();
			header('location:'. URL .'login');
			exit;
		}
	}
?>