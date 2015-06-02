<?php 
	class Answer_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public function search($semester,$module,$type,$year){
			$st = $this->db->prepare("SELECT from papers WHERE semester=:semester AND module=:module AND type=:type AND year=:year");
			$st->execute(array(
				':semester' => $semester,
				':module' => $module,
				':type' => $type,
				':year' => $year
			));
			print_r($st->fetchAll());
			print_r($st->rowCount());
		}
	}
?>