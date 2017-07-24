<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-11 navbar-header">
				<h3 align="left">Admin</h3>
			</div>	
			<div class="col-md-1 navbar-header">					
				<a  href="../logout.php" >logout</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 sidebar">
				<ul>
					<li><a href="#">Dashboard</a></li>
					<li><a href="addplace.php">Availabilty</a></li>

				</ul>
			</div>
			<div class="col-md-10 content">
				
			<!-- Add contents -->
				<div class="row">
					<div class="col-md-7 div-image">
						<h2 align="center"><b>Add image</b></h2>
						<form action="addimage.php" method="post" enctype="multipart/form-data">
						Add image: <input type="file" name="image">
						<input type="submit" name="add" value="Add">
						</form>
					</div>
					<div class="col-md-5 div-text" >
						<h2 align="center"><b>Add text</b></h2>
						<form>
						text: <input type="text" name="text">
						<input type="submit" name="text" value="add text">	
						</form>
					</div>

				</div>
			
			</div>
		</div>
	</div>
</body>
</html>