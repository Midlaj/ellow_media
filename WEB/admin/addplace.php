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
						<h2 align="center"><b>Add Availble places</b></h2>
						<div class="row">

							<form action="add.php" method="post" enctype="multipart/form-data">
							<div class="col-md-2">choose place:</div>
							<div class="col-md-3">
							<input type="file" name="place">
							<input type="submit" name="add" value="Add" class="btn-success">

							</div>
							</form>
						</div>
						
					</div>
					<div class="col-md-5 div-text" >
						
						 

						
					</div>

				</div>
			
			</div>
		</div>
	</div>
</body>
</html>