<html>
<head>
<script src="getID.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" type="text/css" href="starrating.css">
	<link rel="stylesheet" type="text/css" href="Design.css">
</head>
<body>
		<div class="w3-mobile w3-black w3-middle w3-margin" style="width:96%;height:98%; z-index:5;">
			<a href="TryJS.php"><button class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</button></a>
				<div class="w3-card-4 w3-animate-zoom w3-black"style="width:100%;height:100%;top:5px">
					<div class="w3-container w3-row-padding w3-margin w3-card-4 w3-black w3-text-white" style="top:5px">
						<div class="w3-col s8 w3-margin-top">
							<?php
								if(isset($_GET['id'])){
								$p_id = $_GET['id'];
								$con = mysql_connect('localhost','root','');
								mysql_select_db('incredible_india', $con);
								
								$query1 = "SELECT AVG(rating) FROM reviews WHERE place_id= $p_id";
								$result1 = mysql_query($query1);
								if($result1){
									echo "first";
									
									while($r=mysql_fetch_array($result1)){
									$avg_star = $r['AVG(rating)']; 
									}
								}
								
								if($avg_star==""){
									$avg_star=0;
								}
								$query = "SELECT * FROM place_desc WHERE place_id= $p_id";
								$result = mysql_query($query);
								if($result){
									while($row = mysql_fetch_array($result)){
										$img_src = $row['img_name'];
										$img_desc = $row['description'];
										$place_name = $row['place_name'];
									
									echo "<img src='images/$img_src' class='w3-mobile' style='width:100%;height:500' >
											<div class='w3-container' >
												<div class='w3-container w3-dark-grey w3-mobile w3-margin-top'>
													<div class=' w3-mobile w3-left'>
														<h5>$place_name</h5>
													</div>
													<div class='w3-mobile w3-right'>
														$avg_star<i class='fa fa-star w3-middle' ></i>
													</div>
												</div>	
												<div>	
													<div class='w3-mobile w3-padding'>
														<p>$img_desc</p>
													</div>
												</div>
											</div>";
							}
								}
								}
							?>
						</div>
						<div class="w3-col s4 w3-white w3-margin-top">
							<div style="max-height:400px; min-height:365px; overflow-y:scroll;">
						
							<?php
								if(isset($_GET['id'])){
													$p_id = $_GET['id'];
												
												//echo "$p_id";		
												
												$con = mysql_connect('localhost','root','');
												mysql_select_db('incredible_india', $con);
 												
												$query = "SELECT * FROM reviews WHERE place_id= $p_id ORDER BY created_at DESC";
												$result = mysql_query($query);
												if($result){
														while($row = mysql_fetch_array($result)){
															$username = $row['username'];
															$content = $row["review"];
															$time = $row["created_at"];
															$stars = $row['rating'];
							
															echo "
															<div class='w3-container w3-card-4 w3-border w3-margin w3-mobile'>
																<div class='w3-container ' style='padding-left:0px;padding-right:0px;'>
																	<div class='w3-left'>
																		<strong>$username</strong>
																	</div>
																	<div class='w3-right'>
																		$time
																	</div>
																</div>
																<br>
																<div>
																	<div class='w3-left' style='white-space:wrap;text-overflow: ellipsis;'>
																		$content
																	</div>
																	<div class='w3-right w3-small'>
																		<i class='fa fa-star'  ></i>$stars
																	</div>
																</div>
															</div>";
														}
													}
												}
								?>
						<!--*****-->
							
							</div>
							<form action="Final.php?id=<?php echo $_GET['id']; ?>" target="_self" method="post">
								<div class="w3-section w3-border">
									<div class="w3-row-padding">
										<div class="w3-half">
											<p class="w3-margin-left">NAME:<input class="w3-input w3-animate-input w3-text-black w3-padding-8" type="text" placeholder="name" required name="name" style="width:80%"></p>
										</div>
										<div class="w3-half">
											<p class="w3-margin-left">EMAIL ID:<input class="w3-input w3-animate-input w3-text-black w3-padding-8" type="text" placeholder="email" required name="email" style="width:80%"></p>
										</div>
										<p class="w3-margin-left">COMMENT:<input class="w3-input w3-animate-input w3-text-black w3-padding-8" type="text" placeholder="comment" required name="comment" style="width:80%"></p>
										<fieldset class="rating w3-margin-left">
											<input type="radio" id="star5" name="rating" value="5" />               <label class = "full" for="star5" title="Awesome - 5 stars"></label>
											<input type="radio" id="star4half" name="rating" value="4.5" /><label class = "half" for="star4half" title="Pretty good - 4.5 stars"></label>
											<input type="radio" id="star4" name="rating" value="4" />               <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
											<input type="radio" id="star3half" name="rating" value="3.5" /><label class = "half" for="star3half" title="Meh - 3.5 stars"></label>
											<input type="radio" id="star3" name="rating" value="3" />               <label class = "full" for="star3" title="Meh - 3 stars"></label>
											<input type="radio" id="star2half" name="rating" value="2.5" /><label class = "half" for="star2half" title="Kinda bad - 2.5 stars"></label>
											<input type="radio" id="star2" name="rating" value="2" />               <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
											<input type="radio" id="star1half" name="rating" value="1.5" /><label class = "half" for="star1half" title="Meh - 1.5 stars"></label>
											<input type="radio" id="star1" name="rating" value="1" />               <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
											<input type="radio" id="starhalf" name="rating" value="0.5" />         <label class = "half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
											<br/><br/>
										</fieldset>
										<input id="setId" type="hidden" name="places_id" value="<?php echo $_GET['id']; ?>" >
										<div class="w3-bar w3-center w3-padding-8 w3-white">
											<button class="w3-button w3-bar-item w3-block w3-green w3-padding w3-margin-right" type="submit"><i class="fa fa-paper-plane"></i>Submit</button>
									<!--		<button onclick="document.getElementById('modal01').style.display='none'" type="button" class="w3-button w3-bar-item w3-red ">Cancel</button> -->
										</div>
										
									</div>
								</div>
							</form>
						</div>	
							
			</div>
							
											
												

						<script type="text/javascript">
					
								document.getElementById("setId").value = id;
								console.log("done");
							</script>

							
<?php											//$id = $_COOKIE['pid'];
												/*$p_id="";
												
											
												if(isset($_GET['id'])){
													$p_id = $_GET['id'];
												
												echo "$p_id";		
												
												$con = mysql_connect('localhost','root','');
												mysql_select_db('incredible_india', $con);
												$query = "SELECT * FROM reviews WHERE place_id= $p_id ORDER BY created_at DESC";
												$result = mysql_query($query);
												if($result){
														while($row = mysql_fetch_array($result)){
															$username = $row['username'];
															$content = $row["review"];
															$time = $row["created_at"];
															$stars = $row['rating'];
							
															echo "
															<div class='w3-container w3-border w3-margin w3-mobile'>
																<div class='w3-container ' style='padding-left:0px;padding-right:0px;'>
																	<div class='w3-left'>
																		<strong>$username</strong>
																	</div>
																	<div class='w3-right'>
																		$time
																	</div>
																</div>
																<br>
																<div>
																	<div class='w3-left' style='white-space:wrap;text-overflow: ellipsis;'>
																		$content
																	</div>
																	<div class='w3-right w3-small'>
																		<i class='fa fa-star'  ></i>$stars
																	</div>
																</div>
															</div>";
														}
													}
												}*/
												if(isset($_POST['rating'])){
												//$stars = $_POST['rating'];
												$stars = $_POST['rating'];
												$email = $_POST['email'];
												$username = $_POST['name'];
												$content = $_POST['comment'];
												$pp_id = $_POST['places_id'];
													$t = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
													//$cons =$_POST['comment'];
													$times = $t->format('m/d/y, H:i:s');

												$con = mysql_connect('localhost','root','');
												mysql_select_db('incredible_india', $con);
												$b = mysql_query("INSERT INTO reviews (place_id,username,review,created_at,rating,email) VALUES($pp_id, '$username', '$content','$times', $stars,'$email')");
													if($b){
													echo "<meta http-equiv='refresh' content='0'>";
													}
													else{
														echo "<script type='text/javascript'>alert('Redundant data');</script>";
													}
													/*echo "
															<div class='w3-container w3-border w3-margin w3-mobile'>
																<div class='w3-container' style='padding-left:0px;padding-right:0px;'>
																	<div class='w3-left'>
																		<strong>$username</strong>
																	</div>
																	<div class='w3-right'>
																		$times
																	</div>
																</div>
																<br>
																<div>
																	<div class='w3-left' style='white-space:wrap;text-overflow: ellipsis;'>
																		$content
																	</div>
																	<div class='w3-right w3-small'>
																		<i class='fa fa-star'  ></i>$stars
																	</div>
																</div>
															</div>";*/

												}
												
											//$id = $_COOKIE['pid'];
													
											//unset($_COOKIE['pid']);
											?>
											
											
											</body>
											</html>