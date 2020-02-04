<!DOCTYPE HTML>

<html>
	<head>
		<title>Pratistha</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link rel="icon" type="image/png" href="favicon_oly.ico"/>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71546305-5"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-71546305-5');
		</script>

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section class="intro">
						<header>
							<h1>Throwball</h1>
							<p>Throwball is a non-contact ball sport played across a net between two teams of nine players on a rectangular court.</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/tb.jpg" alt="" /></span>
						</div>
					</section>

				<!-- Section -->
					<section id="first">
						<header>
							<h2>Dates</h2>
						</header>
						<div class="content">
						<p><strong>1st February 2020</strong></p>
						</div>
					</section>

				<!-- Section -->
				<section >
						<header>
							<h2>Venue</h2>
						</header>
						<div class="content">
							<p><strong>Ground</strong></p>

						</div>
					</section>

					<!--Section-->
				<section>
					<header>
						<h2>Event Coordinators</h2>
					</header>
					<div class="content">
						<ul class="alt">
							<li><h2>Head:</h2><h3> Urvi Shah <br><br>+91 8452925221</h3></li>
							<li><h2>Co-Head:</h2><h3> Vidhi Shah <br><br>+91 8452944270</h3></li>
						</ul>
					</div>
				</section>

					
					<!-- Section -->
					<section>
							<header>
								<h2>Points Table</h2>
							</header>
							<div class="content">

								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th><strong>Team</strong></th>

												<th><strong>Points</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<?php
												include '../admin/includes/connect.php';
$q="select class,throwball from olympus_points_g order by throwball DESC";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($r))
{
												 ?>
												<td><?php echo $row['class']; ?></td>
												<td><?php echo $row['throwball'] ?></td>
											</tr>
<?php } ?>

										</tbody>

									</table>
								</div>


							</div>
						</section>
			
				

				

				<!-- Section -->
				<section>
						<header>
							<h2>Rules</h2>
						</header>
						<div class="content">
							<p><strong>Eligibility for Participation: ● All players of a team should be currently registered and studying in the same year and department of the college</br></br>
 ● Mixing of different departments and teams is not allowed </br></br>
● All players must carry valid college ID-Card with them. </br></br>
● A player should not be in her drop year </br></br>
● In-case of protest, the decision of the heads shall be considered final General Regulations: </br></br>
 ● Unsportsmanlike conduct may lead to disqualification </br></br>
Playing Rules: </br></br>
● A maximum total of 5 players + 2 substitutes can be included in the team roster </br></br>
● A minimum of 3 players are required in the court </br></br>
● All matches will be sets of 3 </br></br>
● The ball is to be caught with both hands and returned with one hand </br></br>
● Double touch is not allowed </br></br>
● Service ball should not touch the net </br></br>
● During the rally, the ball can touch the net </br></br>
● Serve the ball from the service zone without crossing the service line </br></br>
● Body touch, during catching or releasing the ball is not allowed except for the palm. </br></br>
● Shifting the ball from right to left or left to right is not permitted </br></br>
● Centre catch is not allowed </br></br>
● Rotation is optional </br></br>
● The referee's decision is final. </br></br>
</strong> </p>



						</div>
					</section>




			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
