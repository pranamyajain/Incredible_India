<!DOCTYPE html>
<html lang="en">
<head>
	<script src="getID.js"></script>
	<title>!ncredible !ndia</title>
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
	<div id="wrapper">
		
		<header style="max-height=200px">
		<div id="heading" class="w3-container w3-mobile">
			<div class="w3-container w3-padding-8">
				<span class="w3-mobile" style="font-size:150px;line-height:0.01em;opacity:0.8;color:white">❝</span>
				<p class="w3-text-white w3-mobile w3-tangerine" style="margin-top:-80px;margin-left:55px"><i><strong>If there is one place on the face of earth where all dreams 
				of living men have found a home from the very earliest days when man began the dream of existence, it is India.</strong></i></p>
			</div>
			<div id="second" class="w3-container w3-mobile ">
				<div class="w3-col s4 post w3-mobile">
					<img class="w3-display w3-mobile w3-margin-bottom" src="Emblem_of_India.svg" style="width:50%">
				</div>
				<div class="w3-col s4 post">
					<img class="mySlides w3-middle w3-animate-fading w3-mobile w3-row-padding w3-margin-top w3-margin-top w3-mobile" src="incredible1.jpg" style="width:100%">
					<img class="mySlides w3-middle w3-animate-fading w3-mobile w3-row-padding w3-margin-top w3-margin-top w3-mobile" src="incredible2.jpg" style="width:100%">
					<img class="mySlides w3-middle w3-animate-fading w3-mobile w3-row-padding w3-margin-top w3-margin-top w3-mobile" src="incredible3.jpg" style="width:100%">
				</div>
				
				<div class="w3-col s4 post w3-mobile">
					<img class="w3-right w3-display w3-mobile w3-margin-bottom w3-margin-left" src="Emblem_of_India.svg" style="width:50%">
				</div>
				<script>
				var myIndex = 0;
				carousel();

				function carousel() {
					var i;
					var x = document.getElementsByClassName("mySlides");
					for (i = 0; i < x.length; i++) {
					   x[i].style.display = "none";  
					}
					myIndex++;
					if (myIndex > x.length) {myIndex = 1} 
					
					x[myIndex-1].style.display = "block";  
					
					setTimeout(carousel, 6000);    
				}
				</script>
			</div>
			<nav class="navbar navbar-inverse w3-opacity-min w3-top w3-mobile" data-spy="affix" data-offset-top="197">
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
							<li><a href="#Home" class="w3-hover-opacity-off w3-mobile w3-button w3-margin-right w3-ripple w3-text-amber"><i class="fa fa-home"></i>Home</a></li>
							<li><a href="#Unexplored" class="w3-ripple w3-hover-opacity-off w3-mobile w3-button w3-margin-right w3-text-amber">Unexplored</a></li>
							<li class="dropdown w3-mobile">
								<a class="dropdown-toggle w3-mobile w3-hover-opacity-off w3-button w3-margin-right w3-ripple w3-text-amber" data-toggle="dropdown" href="#">Interests<span class="caret"></span></a>
								<ul class="dropdown-menu w3-mobile w3-large">
									<li><a href="#Purpose">Purpose</a></li>
									<li><a href="#Topo">Topography</a></li>
									<li><a href="#Season">Season of Visit</a></li>
								</ul>
							</li>
							<li><a href="upload.php" class="w3-ripple w3-mobile w3-hover-opacity-off w3-button w3-margin-right w3-text-amber ">New Additions</a></li>
							<li><a href="#Footer" class="w3-ripple w3-mobile w3-hover-opacity-off w3-button w3-margin-right w3-text-amber ">Enquire</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		</div>
		<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
		<script>
		$(window).scroll(function() {
					if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
						$('#return-to-top').fadeIn(200);    // Fade in the arrow
					} else {
						$('#return-to-top').fadeOut(200);   // Else fade out the arrow
					}
				});
				$('#return-to-top').click(function() {      // When arrow is clicked
					$('body,html').animate({
						scrollTop : 0                       // Scroll to top of body
					}, 500);
				});
		</script>
		<section id="Unexplored">
			<div class="w3-card-4 w3-center w3-margin"><h1 class="w3-mobile w3-pad w3-animate-left w3-bold w3-xxxlarge  w3-red w3-tangerine "style="text-shadow:1px 1px 0 #444"><strong><i class="fa fa-compass w3-spin w3-left"></i>Explore These Unseen Places </strong><i class="fa fa-compass w3-spin w3-right"></i></h1></div>
			<div class="w3-row-padding w3-margin-top w3-margin-bottom">
			  <div class="w3-third">
				<div class="w3-card-2 w3-display-container w3-hover-opacity">
					<div class="post">
						<a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Chembra');">
						<img class="w3-mobile" src="Chembra-Lake-in-Meppadi.jpg" alt="Chembra" style="width:100%">
						</a>
					  <div class="w3-display-middle w3-display-hover w3-xlarge">
						<button class="w3-btn w3-black w3-animate-opacity">Explore</button>
					  </div>
					  <div class="w3-container">
						<h5>Chembra-Lake</h5>
					  </div>
					</div>
				</div>
			  </div>

			  <div class="w3-third">
				<div class="w3-card-2 w3-hover-opacity w3-display-container">
					<a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Parule');">
					<img class="w3-mobile" src="Parule-Bhogwe-in-Maharashtra.jpg" style="width:100%" alt="Parule">
					</a>
					<div class="w3-display-middle w3-display-hover w3-xlarge">
						<p class="w3-animate-opacity">Explordbjk.sbv.ksabv.jabse</p>
					</div>
					<div class="w3-container">
						<h5>Parule-Bhogwe</h5>
					</div>
				</div>
			  </div>

			  <div class="w3-third">
				<div class="w3-card-2 w3-hover-opacity post">
				  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Damro');">
				  <img class="w3-mobile" src="Damro-in-Arunachal-Pradesh.jpg" style="width:100%" alt="Damro">
				  </a>
				  <div class="w3-container">
					<h5>Damro</h5>
				  </div>
				</div>
			  </div>			  
			</div>
			<div class="post w3-animate-bottom w3-margin w3-card-4 ">
				<div id="Chembra" class="post picture w3-display-container" style="display:none">
				  <img class="w3-mobile" src="Chembra-Lake-in-Meppadi.jpg" alt="Chembra" style="width:100%">
				  <span onclick="this.parentElement.style.display='none'" 
				  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
				  <div class="w3-display-bottomleft w3-container w3-padding w3-xlarge w3-black w3-card w3-text-white">Chembra</div>
				</div>
				<div id="Parule" class="picture w3-display-container" style="display:none">
				  <img class="w3-mobile" src="Parule-Bhogwe-in-Maharashtra.jpg" alt="Parule" style="width:100%">
				  <span onclick="this.parentElement.style.display='none'" 
				  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
				  <div class="w3-display-bottomleft w3-container w3-xlarge w3-black w3-card w3-padding w3-text-white">Parule-Bhogwe</div>
				</div>
				<div id="Gurez" class="picture w3-display-container" style="display:none">
				  <img class="w3-mobile" src="Gurez-Valley-in-Kashmir.jpg" alt="Gurez" style="width:100%">
				  <span onclick="this.parentElement.style.display='none'" 
				  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
				  <div class="w3-display-bottomleft w3-container w3-xlarge w3-black w3-card w3-padding w3-text-white">Gurez-Valley</div>
				</div>
				<div id="Lepakshi" class="picture w3-display-container" style="display:none">
				  <img class="w3-mobile" src="Lepakshi-in-Andhra-Pradesh2.jpg" alt="Lepakshi" style="width:100%">
				  <span onclick="this.parentElement.style.display='none'" 
				  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
				  <div class="w3-display-bottomleft w3-container w3-xlarge w3-black w3-card w3-padding w3-text-white">Lepakshi</div>
				</div>
				<div id="Damro" class="picture w3-display-container" style="display:none">
				  <img class="w3-mobile" src="Damro-in-Arunachal-Pradesh.jpg" alt="Damro" style="width:100%">
				  <span onclick="this.parentElement.style.display='none'" 
				  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
				  <div class="w3-display-bottomleft w3-container w3-xlarge w3-black w3-card w3-padding w3-text-white">Damro</div>
				</div>
				<div id="Chopta" class="picture w3-display-container" style="display:none">
				  <img class="w3-mobile" src="Chopta-in-Uttarakhand.jpg" alt="Chopta" style="width:100%">
				  <span onclick="this.parentElement.style.display='none'" 
				  class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span>
				  <div class="w3-display-bottomleft w3-container w3-xlarge w3-black w3-card w3-padding w3-text-white">Chopta</div>
				</div>
			</div>

			<div class="w3-row-padding w3-margin-top">
			  <div class="w3-third">
				<div class="w3-card-2 w3-hover-opacity post">
				  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lepakshi');">
				  <img class="w3-mobile" src="Lepakshi-in-Andhra-Pradesh2.jpg" style="width:100%" alt="Lepakshi">
				  </a>
				  <div class="w3-container">
					<h5>Lepakshi</h5>
				  </div>
				</div>
			  </div>

			  <div class="w3-third">
				<div class="w3-card-2 w3-hover-opacity post w3-btn">
				  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Gurez');">
				  <img class="w3-mobile" src="Gurez-Valley-in-Kashmir.jpg" style="width:100%" alt="Gurez">
				  </a>
				  <div class="w3-container">
					<h5>Gurez-Valley</h5>
				  </div>
				</div>
			  </div>
			
			  <div class="w3-third">
				<div class="w3-card-2 w3-hover-opacity post">
				  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Chopta');">
				  <img class="w3-mobile" src="Chopta-in-Uttarakhand.jpg" style="width:100%" alt="Chopta">
				  </a>
				  <div class="w3-container">
					<h5>Chopta</h5>
				  </div>
				</div>
			  </div>
			</div>
			
			<script>
			function openImg(imgName) {
			  var i, x;
			  x = document.getElementsByClassName("picture");
			  for (i = 0; i < x.length; i++) {
				 x[i].style.display = "none";
			  }
			  document.getElementById(imgName).style.display = "block";
			}
			</script>
			
		</section>
		<div id="Purpose" class="Sort w3-container w3-card-4 w3-mobile">
			<div class="w3-bar w3-black w3-mobile">
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink w3-red" onclick="openCity(event,'Adventures')">Adventures</button>
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink" onclick="openCity(event,'Pilgrimage')">Pilgrimage</button>
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink" onclick="openCity(event,'Historic')">Historic</button>
			</div>
		</div>
			<div id="Adventures" class="w3-container w3-border city w3-card-4 w3-margin w3-animate-zoom w3-mobile">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join purpose on place_desc.place_id=purpose.place_id WHERE adventure=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='imagefine' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='getID(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>

					
				</div>			
			</div>

			<div id="Pilgrimage" class="w3-container w3-border city w3-card-4 w3-margin w3-animate-zoom w3-mobile" style="display:none">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join purpose on place_desc.place_id=purpose.place_id WHERE holy=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='w3-mobile' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='onClick(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>
				</div>
			</div>

			<div id="Historic" class="w3-container w3-border city w3-card-4 w3-margin w3-animate-zoom w3-mobile" style="display:none">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join purpose on place_desc.place_id=purpose.place_id WHERE historic=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='w3-mobile' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='onClick(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>
				</div>
			</div>			
			
		<div id="Topo" class="Sort w3-container w3-card-4 w3-mobile">
			<div class="w3-bar w3-black w3-mobile">
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink1 w3-red" onclick="openCity1(event,'Water')">Water</button>
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink1" onclick="openCity1(event,'Mountains')">Mountains</button>
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink1" onclick="openCity1(event,'Nature')">Nature</button>
			</div>
		</div>
			<div id="Water" class="w3-container w3-border city1 w3-card-4 w3-margin w3-animate-zoom w3-mobile">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join topography on place_desc.place_id=topography.place_id WHERE lakes=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='w3-mobile' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='onClick(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>

					
				</div>			
			</div>

			<div id="Mountains" class="w3-container w3-border city1 w3-card-4 w3-margin w3-animate-zoom w3-mobile" style="display:none">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join topography on place_desc.place_id=topography.place_id WHERE valley=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='w3-mobile' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='onClick(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>
				</div>
			</div>

			<div id="Nature" class="w3-container w3-border city1 w3-card-4 w3-margin w3-animate-zoom w3-mobile" style="display:none">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join topography on place_desc.place_id=topography.place_id WHERE nature=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='w3-mobile' name='imagefine' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='onClick(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>
				</div>
				</div>			
		<div id="Season" class="Sort w3-container w3-card-4 w3-mobile">
			<div class="w3-bar w3-black w3-mobile">
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink2 w3-red" onclick="openCity2(event,'Summers')">Summers</button>
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink2" onclick="openCity2(event,'Monsoon')">Moonsoon</button>
				<button class="w3-bar-item w3-xlarge w3-mobile w3-ripple w3-btn tablink2" onclick="openCity2(event,'Winters')">Winters</button>
			</div>
		</div>
			<div id="Summers" class="w3-container w3-border city2 w3-card-4 w3-margin w3-animate-zoom w3-mobile">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join topography on place_desc.place_id=topography.place_id WHERE lakes=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='w3-mobile' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='onClick(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>

					
				</div>			
			</div>

			<div id="Monsoon" class="w3-container w3-border city2 w3-card-4 w3-margin w3-animate-zoom w3-mobile" style="display:none">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join topography on place_desc.place_id=topography.place_id WHERE valley=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='w3-mobile' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='onClick(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>
				</div>
			</div>

			<div id="Winters" class="w3-container w3-border city2 w3-card-4 w3-margin w3-animate-zoom w3-mobile" style="display:none">
				<div class="w3-row-padding w3-margin-top w3-margin-bottom w3-mobile">
					<?php
						$con = mysql_connect('localhost','root','');
						if($con){
						 mysql_select_db('incredible_india', $con);
						 $query = "SELECT * FROM place_desc join topography on place_desc.place_id=topography.place_id WHERE nature=1";
					  
						 $result = mysql_query($query);

						 if($result){
							while($row = mysql_fetch_array($result)){
								$img = $row["img_name"];
								$pname = $row["place_name"];
								$pid = $row["place_id"];
								
								echo "
								<div class='w3-col s3 w3-mobile' style='min-height:250px;'>
									<div class='w3-card-2 w3-display-container w3-hover-opacity w3-mobile'>
										<div class='post'>
											<a href='Final.php?id=$pid' class='w3-hover-opacity'>
												<img class='w3-mobile' name='imagefine' src='images/$img' id='$pid' alt='$' style='width:100%; max-height:200px' onclick='onClick(this)'>
											</a>
											<div class='w3-display-middle w3-display-hover w3-xlarge w3-mobile'>
												<p class='w3-animate-opacity w3-mobile'>Explore</p>
											</div>
											<div class='w3-container w3-mobile'>
												<h5>$pname</h5>
											</div>
										</div>
									</div>
								</div>";
								
							}
						 }
						 }
					?>
				</div>
				</div>
		
			<div id="modal01" class="w3-modal w3-mobile w3-black w3-middle" style="width:96%;height:98%">
				<span onclick="document.getElementById('modal01').style.display='none'" class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
				<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-black"style="width:100%;height:100%;top:5px">
					<div class="w3-container w3-row-padding w3-card-4 w3-black w3-text-white" style="top:5px">
						<div class="w3-col s8">
							<img class="w3-mobile" id="img01" style="width:100%">
							<div class="w3-container w3-dark-grey w3-mobile">
								<h5>Damro</h5>
							</div>
						</div>
						<div class="w3-col s4 w3-white">
							<div style="max-height:365px; overflow-y:scroll;">
						<!--*****-->
							</div>
						</div>					
					</div>
				</div>
			</div>
		<script>
		
		function openCity(evt, cityName) {
		  var i, x, tablinks;
		  x = document.getElementsByClassName("city");
		  for (i = 0; i < x.length; i++) {
			  x[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink");
		  for (i = 0; i < x.length; i++) {
			  tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " w3-red";
		}
		function openCity1(evt, cityName) {
		  var i, x, tablinks;
		  x = document.getElementsByClassName("city1");
		  for (i = 0; i < x.length; i++) {
			  x[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink1");
		  for (i = 0; i < x.length; i++) {
			  tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " w3-red";
		}
		function openCity2(evt, cityName) {
		  var i, x, tablinks;
		  x = document.getElementsByClassName("city2");
		  for (i = 0; i < x.length; i++) {
			  x[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink2");
		  for (i = 0; i < x.length; i++) {
			  tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " w3-red";
		}
		</script>

		<div class="w3-modal" id="contact">
			<div class="w3-modal-content w3-card-4">
			 <div class="w3-card-4 w3-top w3-margin w3-content w3-text-light-grey w3-dark-grey" >
				<span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright">&times;</span>
				<h1 class="w3-text-light-grey w3-padding">Contact</h1>
				<hr style="width:80%" class="w3-opacity">

				<div class="w3-section">
				  <p><i class="fa fa-envelope fa-fw w3-text-light-grey w3-text-xxlarge w3-margin-right"> </i> Email: pranamyajain@outlook.com</p>
				</div><br>
				<form action="form.asp" target="_blank">
				  <p class="w3-margin-left">NAME:<input class="w3-input w3-animate-input w3-text-black w3-padding-16" type="text" placeholder="Name" required name="Name" style="width:80%"></p>
				  <p class="w3-margin-left">EMAIL ID:<input class="w3-input w3-animate-input w3-text-black w3-padding-16" type="text" placeholder="Email" required name="Email" style="width:80%"></p>
				  <p class="w3-margin-left">PLACE NAME:<input class="w3-input w3-animate-input w3-text-black w3-padding-16" type="text" placeholder="Place Name" required name="Place Name" style="width:80%"></p>
				  
				  <p>
					<button class="w3-btn w3-light-grey w3-margin-left w3-margin-bottom w3-padding-large w3-center" type="submit">
					  <i class="fa fa-paper-plane"></i> SEND MESSAGE
					</button>
				  </p>
				</form>
			 </div>
			</div>
		</div>
		<footer class=" w3-padding w3-text-grey w3-large text-center w3-black w3-mobile" style="width:100%" id="Footer">
			
		<div id="Reach" class="container w3-mobile">
			<div class="w3-row-padding w3-margin-top w3-mobile">
					<div class="w3-col s6 w3-left w3-mobile"><img class="w3-mobile" src="logo1.jpg" alt="MP Tourism Logo"></div>
					<div class="w3-xlarge w3-center w3-col s6 w3-mobile">CONNECT WITH US</div>
						<a href="https://www.facebook.com/pages/Incredible-India" target="_blank" class="fa fa-facebook w3-xlarge w3-mobile" onclick="ga('send', 'event', 'Footer', 'Click', 'Facebook - Connect with Us');"></a>
						<a href="https://twitter.com/incredibleindia" target="_blank" class="fa fa-twitter w3-mobile" onclick="ga('send', 'event', 'Footer', 'Click', 'Twitter - Connect with Us');"></a>
						<a href="https://www.youtube.com/channel/UCMxJPchGLE_CJ1MJbJy-xDQ" target="_blank" class="fa fa-youtube  w3-mobile" onclick="ga('send', 'event', 'Footer', 'Click', 'Youtube - Connect with Us');"></a>
						<a href="https://in.pinterest.com/MpTourismDotCom" target="_blank" class="fa fa-pinterest w3-mobile" onclick="ga('send', 'event', 'Footer', 'Click', 'Pinterest - Connect with Us');"></a>
						<a href="https://instagram.com/_incredibleindia" target="_blank" class="fa fa-instagram w3-mobile" onclick="ga('send', 'event', 'Footer', 'Click', 'Instagram - Connect with Us');"></a>
						<br>
						<p class="w3-large w3-mobile">Created By &copy <a href="http://www.google.com" target="_blank" class="w3-hover-text-green"></a></p>
			</div>
			<div class="w3-row-padding  footTop w3-mobile">
				<div class="w3-col s4 w3-mobile">
					<div class="w3-xlarge w3-mobile">EXPLORE INDIA</div>
						<p><a href="#Unexplored" class="w3-mobile">Places to see</a></p>
						<span><a href="http://incredibleindia.org/images/docs/e-brochures-pdf/india_brouchure/india_brouchure.pdf" target="_blank" class="w3-mobile">Tourist Brouchure</a></span>
				</div>
				<div class="w3-col s4 w3-mobile">
					<div class="w3-xlarge">ABOUT US</div>
					<ul class="w3-ul w3-large">
						<li><a onclick="document.getElementById('contact').style.display='block'" href="#" class="w3-mobile">Contact Us</a></li>
					</ul>					
				</div>
				<div class="w3-col s4 w3-mobile">
					<div class="w3-xlarge w3-mobile">TOLL-FREE HELPLINE</div>
					<span>1800-11-1363 </span>
					<p>(24X7 available)</p>
					
				</div>
			</div>	
				
			
		</div>
		  <!-- End footer -->
		 </footer>


	</div>
</body>
</html>
