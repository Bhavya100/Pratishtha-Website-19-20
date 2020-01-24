<!DOCTYPE HTML>

<html>
	<head>
		<title>Pratistha-Olympus</title>
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
							<h1>Basketball</h1>
							<p>Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a basketbal</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/bb.jpg" alt="" /></span>
						</div>
					</section>

				<!-- Section -->
					<section id="first">
						<header>
							<h2>Dates</h2>
						</header>
						<div class="content">
						<p><strong>30 th January 2020</strong></p>
						</div>
					</section>

				<!-- Section -->
				<section>
						<header>
							<h2>Venue</h2>
						</header>
						<div class="content">
							<p><strong>Gandhi Maidan</strong></p>

						</div>
					</section>

					<!--Section-->
				<section>
					<header>
						<h2>Event Coordinators</h2>
					</header>
					<div class="content">
						<ul class="alt">
							<li><h2>Head:</h2><h3> Avnit Singh <br><br>+91 9920840993</h3></li>
							<li><h2>Co-Head:</h2><h3> Arushi Shetty <br><br>+91 8080772816</h3></li>
						</ul>
					</div>
				</section>




					<!-- Section -->
					<section>
							<header>
								<h2>Points Table Boys</h2>
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
$q="select b.class,b.basketball as t from olympus_points_b b,olympus_points_g g where b.class=g.class order by t DESC";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($r))
{
												 ?>
												<td><?php echo $row['class']; ?></td>
												<td><?php echo $row['t'] ?></td>
											</tr>
<?php } ?>


										</tbody>

									</table>
								</div>


							</div>
						</section>
						<section>
								<header>
									<h2>Points Table Girls</h2>
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
						$q="select b.class,g.basketball as t from olympus_points_b b,olympus_points_g g where b.class=g.class order by t DESC";
						$r=mysqli_query($conn,$q);
						while($row=mysqli_fetch_array($r))
						{
													 ?>
													<td><?php echo $row['class']; ?></td>
													<td><?php echo $row['t'] ?></td>
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
							<p><strong>•	All matches will be played according to the respective University level  basketball rules.</br></br>
•	Teams should be present atleast 30 minutes before your match. </br></br>
•	All teams are required to give complete list of team members with the valid  ORIGINAL college ID cards and no dropouts are allowed, in any circumstance the team will be disqualified. </br></br>
•	The Referee’s decision  will be a final call in any dispute. </br></br>
•	The draws will be out on the match day itself. </br></br>
Basketball </br></br>
(5v5):- BOYS</br></br>
•	Minimum 5 players and maximum 12 players</br></br>
•	Four quarters of 8 minutes each (Subjected to any changes) </br></br>
3v3:- GIRLS</br></br>
•	Minimum 3 players and maximum 5 (3+2). </br></br>
•	Two halves of 6 minutes each. </br></br>
•	Team to score 21 points or have the maximum points at the end of the game would be    winner.
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
