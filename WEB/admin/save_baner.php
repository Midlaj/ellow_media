<?php
ob_start();
error_reporting(0);
include('include/dbconnect.php');
include("resize-class.php");



//////image
if (isset($_POST['add'])) {
	$title = $_POST['title'];

$filename = basename($_FILES['image']['name']);
$file_ext = substr($filename, strrpos($filename, '.') + 1);
$FileName=current(explode('.', $_FILES['image']['name'])); 
$filenameis=rand(100,9000).".".$file_ext;
$target_path = "uploads/". $filenameis;
$target_path2 = "uploads/". $filenameis;
if(@move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) { 

	 	$mw =1356;
	$mh =582;
	$img = $target_path;
	$resizeObj = new resize($img);	
	$resizeObj -> resizeImage($mw, $mh, 'crop');
	//$imagename3 = $imagename2.$ext;
	$resizeObj -> saveImage($target_path2, 100);
	}

	$stm = $link->prepare("INSERT INTO tbl_banner(vchr_banner_name, vchr_title) VALUES(?, ?)");
		$stm->bindParam(1, $filenameis);
		$stm->bindParam(2, $title);
		$stm->execute();
	$stmt = $link->query("SELECT LAST_INSERT_ID()");
	$lastId = $stmt->fetchColumn(); 
 } 

header("Location:baner.php?id =$lastId ");

?>