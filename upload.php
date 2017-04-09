<!DOCTYPE html>
<html lang="en">
<head>
	<script src="getID.js"></script>
	<title>Additions</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<script src="viewportchecker.js"></script>
	<link rel="stylesheet" type="text/css" href="starrating.css">
	<link rel="stylesheet" type="text/css" href="Design.css">
	<style type="text/css">

	</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--enctype="multipart/form-data" used when some binary data like images or files needs to be transferred or uploaded to the webpage-->
	<div id="upload" class="w3-container w3-mobile">
		<nav class="navbar navbar-inverse w3-opacity-min w3-top w3-mobile navbar-fixed-top" data-spy="affix" data-offset-top="197">
				<div class="container-fluid w3-xlarge w3-black w3-mobile">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle w3-mobile" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span>							
						</button>
						<a class="navbar-brand" href="TryJS.php"><img class="w3-ripple w3-margin-right w3-hover-none w3-hover-text-white" src="Logo.jpg"></a>
					</div>
					<div class="collapse navbar-collapse w3-right w3-mobile" id="myNavbar">
						<ul class="nav navbar-nav w3-center nav-pills">
							<li><a href="TryJS.php#Home" class="w3-hover-opacity-off w3-mobile w3-button w3-margin-right w3-ripple w3-text-amber"><i class="fa fa-home"></i>Home</a></li>
							<li><a href="TryJS.php#Unexplored" class="w3-ripple w3-hover-opacity-off w3-mobile w3-button w3-margin-right w3-text-amber">Unexplored</a></li>
							<li class="dropdown w3-mobile">
								<a class="dropdown-toggle w3-mobile w3-hover-opacity-off w3-button w3-margin-right w3-ripple w3-text-amber" data-toggle="dropdown" href="#">Interests<span class="caret"></span></a>
								<ul class="dropdown-menu w3-mobile w3-large">
									<li><a href="TryJS.php#Purpose">Purpose</a></li>
									<li><a href="TryJS.php#Topo">Topography</a></li>
									<li><a href="TryJS.php#Season">Season of Visit</a></li>
								</ul>
							</li>
							<li><a href="#upload" class="w3-ripple w3-mobile w3-hover-opacity-off w3-button w3-margin-right w3-text-amber ">New Additions</a></li>
							<li><a href="TryJS.php#Footer" class="w3-ripple w3-mobile w3-hover-opacity-off w3-button w3-margin-right w3-text-amber ">Enquire</a></li>
						</ul>
					</div>
				</div>
			</nav>
		<div class="w3-col s9 w3-mobile" style="overflow-y:scroll;">
		<!--display the validated places-->
		</div>
		<div class="w3-col s3 w3-display-right w3-mobile">
				<form action="upload.php" method="post" enctype="multipart/form-data" >
					Select image to upload:
					<input class="w3-input w3-animate-input w3-text-black w3-padding-8 w3-mobile" type="text" placeholder="user_name" required name="user_name"/>
					<br>
					<input class="w3-input w3-animate-input w3-text-black w3-padding-8 w3-mobile" type="text" placeholder="email_id" required name="email_id"/>
					<br>
					<input class="w3-input w3-animate-input w3-text-black w3-padding-8 w3-mobile" type="text" placeholder="place_name" required name="place_name"/>
					<br>
					<input class="w3-input w3-animate-input w3-text-black w3-padding-8 w3-mobile" type="file" placeholder="file_name" required name="file_name"/>
					<input type="submit">
				</form>

				<?php
				if($_SERVER['REQUEST_METHOD']==='POST'){
				   if(isset($_FILES['file_name'])){

					  $user_name=$_POST['user_name'];
					  echo $user_name;
					  $place_name=$_POST['place_name'];
					  echo $place_name;
					  $email_id=$_POST['email_id'];

					  $errors= array();
					  $file_name = $_FILES['file_name']['name'];
					  $file_size =$_FILES['file_name']['size'];
					  $file_tmp =$_FILES['file_name']['tmp_name'];
					  $file_type=$_FILES['file_name']['type'];
					  
					  $file_ext=strtolower(end(explode('.',$_FILES['file_name']['name'])));
					  
					  $extensions= array("jpeg","jpg","png");
					  
					  if(in_array($file_ext,$extensions)=== false){
						 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
					  }

					  if (file_exists("uploads/".$file_name)) {
						   $errors[]= "Sorry, file already exists.";
						}

					  if(empty($errors)){
						 move_uploaded_file($file_tmp,"uploads/".$file_name);
						 $con = mysql_connect('localhost','root','');
						  if($con){
						  mysql_select_db('incredible_india', $con);
						  echo "this";
						  mysql_query("INSERT INTO feedback (user_name,place_name,file_name,email_id) VALUES ('$user_name','$place_name','$file_name','$email_id')"); 
						  }
						  echo "Success";
					  }else{
						 print_r($errors);
					  } 
				   }
				 }
				?>
	</div>
</body>
</html>