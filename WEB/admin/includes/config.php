<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Asia/India');
//$con=@mysql_connect("localhost","tu68rywz88z","Rtu%4@90*(&m") or die("Error Host");
//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','123');
define('DBNAME','midlaj');


//define('DIR','http://ellowmedia.com/rd/');
//application address
define('DIR','http://arown.in/controls/');
define('SITEEMAIL','mail@ellowmedia.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
