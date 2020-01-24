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
							<h1>Volleyball</h1>
							<p>Volleyball is a team sport in which two teams of six players are separated by a net. Each team tries to score points by grounding a ball on the other team's court under organized rules.</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/vb.jpg" alt="" /></span>
						</div>
					</section>

				<!-- Section -->
					<section id="first">
						<header>
							<h2>Dates</h2>
						</header>
						<div class="content">
						<p><strong>31 th January 2020</strong></p>
						</div>
					</section>

				<!-- Section -->
				<section>
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
							<li><h2>Head:</h2><h3> Monil Shah <br><br>+91 9870912601</h3></li>
							<li><h2>Co-Head:</h2><h3>  Alpesh Gharaniya<br><br>+91 9969426230</h3></li>
							<li><h2>Co-Head:</h2><h3> Dipesh   <br><br>+91 8652436607</h3></li>

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
$q="select class,volleyball from olympus_points_b order by volleyball DESC";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($r))
{
												 ?>
												<td><?php echo $row['class']; ?></td>
												<td><?php echo $row['volleyball'] ?></td>
											</tr>
<?php } ?>

										</tbody>

									</table>
								</div>


							</div>
						</section>


						<section>
						<header>
							<h2>Rules</h2>
						</header>
						<div class="content">
							<p><strong>General Regulations: </br></br>
 a. Smoking/consumption of alcohol or any prohibited substances inside the campus is strictly prohibited. The entire team will be disqualified from the tournament even if a single player is found to be violating these rules </br></br>
b. A list of 10 players should be given to the organizing team two days prior to the start of the tournament. With 6 playing (In 6 players) and substitutes including one libero if needed. </br></br>
c. fouls involving unsportsmanlike conduct will lead to player/team disqualification as per the officials’ decision </br></br>
d. No valuables, accessories (other than sports non-apparel) will be allowed during gameplay. </br></br>
e. It’s mandatory for every participant of every team to carry an institute ID card and a national ID card for verification </br></br>
f. All matches will be of 3 sets </br></br>
g. If two or more faults are committed successively only the first one is considered </br></br>
h. If faults are committed by both the teams simultaneously then the point becomes void i.e., it is a commonpoint </br></br>
i. Each team can request a maximum of 2 time-outs and 6 substitutions per set. </br></br>
j. There must be a completed rally between two separate substitution requests by the same team </br></br>

 Basic violations: </br></br>
a. Stepping on or over the line on a serve </br></br>
b. Failure to serve the ball over the net successfully </br></br>
c. Hitting the ball illegally (Carrying, Palming, Throwing, etc.) </br></br>
d. Touches of the net with any part of the body while the ball is in play. If the ball is driven into the net with such force that it causes the net to contact an opposing player, no foul will be called, and the ball shall continue to be in play </br></br>
e. Reaching over the net, except under these conditions: i. When executing a follow-through ii. When blocking a ball which is in the opponent's’ court but is being returned (the blocker must not contact the ball until after the opponent who is attempting to return the ball makes contact, Except to block the third play </br></br>
f. Reaches under the net (if it interferes with the ball or opposing player) </br></br>
 g. Failure to serve in the correct order </br></br>
h. Rescheduling and Walkover: Rescheduling will depend solely on the event heads and the event heads will have the power to give a walkover to a team if the opposite team does not turn up in 15-20 minutes after the scheduled time. The power of giving walkover lies solely on the event heads</br></br>
</strong></p>



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
