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
                            <h1>Kabaddi</h1>
                            <p>Kabaddi is a contact team sport, played between two teams of seven players each. The objective of the game is for a single player on offence, referred to as a "raider", to run into the opposing team's half of a court, tag out as many of their defenders as possible, and return to their own half of the court, all without being tackled by the defenders, and in a single breath. </p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/kab.jpg" alt="" /></span>
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
							<li><h2>Head:</h2><h3> Harshit Shetty <br><br>+91 9967056567</h3></li>
							<li><h2>Co-Head:</h2><h3> Yash Pawar <br><br>+91 7506065198</h3></li>
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
$q="select class,kabaddi from olympus_points_b order by kabaddi DESC";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($r))
{
												 ?>
												<td><?php echo $row['class']; ?></td>
												<td><?php echo $row['kabaddi'] ?></td>
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
							<p><strong>General regulations</br></br>
•	Smoking or consumption of Alcohol in the camps is strictly prohibited. The whole team would be disqualified, If any single player is found violating these rules.</br></br>
•	A list of 10-12 players should be given to the organizing team two days prior to the start of the tournament. With seven playing and 3-5 substitutes. </br></br>
•	No valuables and other accessories are not allowed (except sports apparel) during gameplay. </br></br>
•	The match will be of two halves rah containing of 20 minutes. </br></br>
•	Each team can request a maximum of 2 time outs and 5 substitutions per match. </br></br>
Basic violations</br></br>
•	Persistently protesting or objecting the officials decision , thereby disrupting the match. </br></br>
•	Making derogatory remarks about officials and their actions and thereby trying to influence the decision. </br></br>
•	Showing over aggression towards referee or umpire demanding a favorable decision</br></br>
•	Stifling the raider but shutting his mouth or throat in any way. </br></br>
•	Violent tracking leading to injuries being sustained by the opponent raider. </br></br>
•	Taking more than 5 seconds to stay the raid unless specified in the rules. </br></br>
•	Holding the raider with help of scissors operated by the legs. </br></br>
•	Coaching from outside by the coach or the players. </br></br>
•	Preventing the raider to take his turn of raid. </br></br>
Rescheduling and Walkover</br></br>
Rescheduling will depend solely on the event heads will have the power to give a Walkover to the team if the opposite team does not turns up in 15-20 minutes after the scheduled time. </br></br>
The power of giving walkover lies solely on event heads.
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
