<?php 
	class Upload extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('upload/index',true);
		}
		public function answerup(){
			require 'models/Upload_model.php';
			if(isset($_POST['submit'])){
				
			    $filename = $_FILES["file"]["name"];
			    $filename = $_FILES["file"]["name"];
			    $source = $_FILES["file"]["tmp_name"];
			    $type = $_FILES["file"]["type"];
			    $name = explode(".", $filename);
			    $target_path = "uploads/answers/".$filename;

			    $target_file = $target_path . basename($_FILES["fileToUpload"]["name"]);

			    if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				else{
				    if(move_uploaded_file($source, $target_path)) {
				        $message = "Your .zip file was uploaded";
						$target_path = URL."uploads/answers/".$filename;
						$model2 = new Upload_model();
				    	$model2->insert($target_path);
				    } else {    
				        $message = "ERROR";
				    }
				    if($message) echo $message;
				}			
				
			}	
			//header('location:'.URL.'upload');
		}
		public function paperup(){
			require 'models/Upload_model.php';
			if(isset($_POST['submit-paper'])){
			    $filename = $_FILES["file-paper"]["name"];
			    $source = $_FILES["file-paper"]["tmp_name"];
			    $type = $_FILES["file-paper"]["type"];
			    $name = explode(".", $filename);
			    $target_path = "uploads/papers/".$filename;

			    $target_file = $target_path . basename($_FILES["fileToUpload"]["name"]);

			    if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				else{
				    if(move_uploaded_file($source, $target_path)) {
				        $message = "Your .zip file was uploaded";
						$target_path = URL."uploads/papers/".$filename;
						$model3 = new Upload_model();
				    	$model3->insertPapers($target_path);
				    } else {    
				        $message = "ERROR";
				    }
				    if($message) echo $message;
				}			
				
			}	
			header('location:'.URL.'upload');
		}
	}
?>