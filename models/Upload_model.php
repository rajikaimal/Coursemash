<?php 
	class Upload_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public function insert($target){
			
			$st = $this->db->prepare("INSERT INTO papers (type,confidence,year,directory,module,semester,owner) values 
				(:type,:confidence,:year,:directory,:module,:semester,:owner)");
			Session::init();
			$st->execute(array(
				':type' => $_POST['type'],
				':confidence' => $_POST['confidence'],
				':year' => $_POST['year'],
				':directory' => $target,
				':module' => $_POST['module'],
				':semester' => $_POST['semester'],
				':owner' => $_SESSION['loggedIn']
			));
		}
	}
?>