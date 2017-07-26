<?php
	ob_start();

	include("include/dbconnect.php");
	include("resize-class.php");

	if(isset($_POST['update'])) 
	{
		/*get the post values*/
		$id=$_POST['userid'];
		$description = $_POST['description'];
		$size_of_add = $_POST['size_of_add'];
		$place       = $_POST['place'];

		/*get the image details
		save image details	
		*/
		$filename = basename($_FILES['image']['name']);
		$file_ext = substr($filename, strrpos($filename, '.') + 1);
		$FileName=current(explode('.', $_FILES['image']['name'])); 
		$filenameis=rand(100,9000).".".$file_ext;
		$target_path = "uploads/place/". $filenameis;
		$target_path2 = "uploads/place/". $filenameis;
		if(@move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) 
		{
			$stm = $link->prepare("UPDATE tbl_place SET vchr_place_pic = '$filenameis', vchr_description ='$description', size_of_add='$size_of_add', vchr_place_name='$place'  WHERE pk_int_place_id=$id");
			$stm->execute();
		}

		$stmt = $link->query("SELECT LAST_INSERT_ID()");
		$lastId = $stmt->fetchColumn(); 
		header("Location:place.php?id=$lastId "); 
	}
	else
	{	
		header("Location:place.php");
	}
?>