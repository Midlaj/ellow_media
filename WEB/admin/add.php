<?php
$dbhost = "localhost";
$dbname = "midlaj";
$dbusername = "root";
$dbpassword = "123";
$link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);


if (isset($_POST['add'])) {
	
	$fileNames = $_FILES['place']['name'];
	$source = $_FILES['place']['tmp_name'];
	$destination = "uploads/".$fileNames;


	if(move_uploaded_file($source, $destination))
	{
		$statement = $link->prepare("INSERT INTO tbl_place(vchr_place) VALUES(:place)");
		$statement->execute(array(
    		"place" => $fileNames
		));
		header('Location:dashboard.php');
	}
	else
	{
		echo "file not uploaded";
	}

	
}

?>