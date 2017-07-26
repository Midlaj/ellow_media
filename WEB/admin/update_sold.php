<?php
ob_start();
	include("include/dbconnect.php");  
	include("settings.php");
	include("resize-class.php");

	$title=$_POST['title'];


if(isset($_POST['update'])) 
{
	$id=$_POST['userid'];
	$title=$_POST['title'];
	$filename = basename($_FILES['image']['name']);
	$file_ext = substr($filename, strrpos($filename, '.') + 1);
	$FileName=current(explode('.', $_FILES['image']['name'])); 
	$filenameis=rand(100,9000).".".$file_ext;
	$target_path = "uploads/sold/". $filenameis;
	$target_path2 = "uploads/sold/". $filenameis;
	if(@move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) 
	{ 
		$statement = $link->prepare("UPDATE tbl_sold SET vchr_title = '$title', vchr_sold_pic ='$filenameis' WHERE pk_int_sold_id=$id");
		$statement->execute();
	}
	header("Location:sold_out.php?id=$id");
}
else
{
	header("Location:sold_out.php");

}
/*
$array=array("username"=>$username,"pwd"=>$pwd,"sex"=>$sex,"area"=>$areacode);
$lastid=$main->saveArray($table,$array,0);
*/
 
?>