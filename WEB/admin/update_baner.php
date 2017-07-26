<?php
ob_start();
 include("include/dbconnect.php");  
 include("settings.php");
 include("resize-class.php");
 
 


if(isset($_POST['update'])) 
{
	$id=$_POST['userid'];
	$title=$_POST['title'];
	$filename = basename($_FILES['image']['name']);
	$file_ext = substr($filename, strrpos($filename, '.') + 1);
	$FileName=current(explode('.', $_FILES['image']['name'])); 
	$filenameis=rand(100,9000).".".$file_ext;
	$target_path = "uploads/". $filenameis;
	$target_path2 = "uploads/". $filenameis;
	if(@move_uploaded_file($_FILES['image']['tmp_name'], $target_path))
	{  
		$mw =1356;
		$mh =582;
		$img = $target_path;
		$resizeObj = new resize($img);	
		$resizeObj -> resizeImage($mw, $mh, 'crop');
		//$imagename3 = $imagename2.$ext;
		$resizeObj -> saveImage($target_path2, 100);
		//exit();

		$statement = $link->prepare("UPDATE tbl_banner SET vchr_banner_name ='$filenameis', vchr_title = '$title'  WHERE pk_int_banner_id=$id");
		$statement->execute();

	}
	header("Location:baner.php?id=$id");
}

/*
$array=array("username"=>$username,"pwd"=>$pwd,"sex"=>$sex,"area"=>$areacode);
$lastid=$main->saveArray($table,$array,0);
*/
header("Location:baner.php"); 
?>