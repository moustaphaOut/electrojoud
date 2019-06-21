<!--
Here, we write code for .
-->
<?php
	//require_once('connection.php');
	$fileDestination = '';
	#---------- Start uploading file ----------
	
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg','jpeg','png', 'pdf','txt');

		if(in_array($fileActualExt, $allowed)){
			if($fileError === 0){
				if($fileSize < 20971520){
					if($file_name == '')
						$fileNewName = reset($fileExt).".".$fileActualExt;
					else
						$fileNewName = $file_name.".".$fileActualExt;
					$fileDestination = $destination.''.$fileNewName;
					move_uploaded_file($fileTmpName, $fileDestination);
					//header("Location: welcome.php?uploadsuccess");
				}else{
					echo "Your file is too big!";
				}
			}else{
				echo "There was an error uploading your file!";
			}
		}else{
			echo "You cannot upload files of this type!";
		}
	
	#---------- End uploading file ----------
?>
