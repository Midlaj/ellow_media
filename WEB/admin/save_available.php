<?php
ob_start();
include("include/dbconnect.php");
include("resize-class.php");

$title=$_POST['title'];

if(isset($_POST['save'])) {

	$filename = basename($_FILES['image']['name']);
	$file_ext = substr($filename, strrpos($filename, '.') + 1);
	$FileName=current(explode('.', $_FILES['image']['name'])); 
	$filenameis=rand(100,9000).".".$file_ext;
	$target_path = "uploads/available/". $filenameis;
	$target_path2 = "uploads/available/". $filenameis;
	if(@move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) 
	{ 
	 	
		$stm = $link->prepare("INSERT INTO tbl_available(vchr_title, vchr_available_pic) VALUES(?, ?)");
		$stm->bindParam(1, $title);
		$stm->bindParam(2, $filenameis);
		$stm->execute();
		
	}

	$stmt = $link->query("SELECT LAST_INSERT_ID()");
	$lastId = $stmt->fetchColumn(); 
	header("Location:available.php?id=$lastId ");
}	
else
{
	header("Location:available.php");
}
?>