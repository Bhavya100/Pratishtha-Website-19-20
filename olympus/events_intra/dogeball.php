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
                            <h1>DodgeBall</h1>
                            <p>Dodgeball is a team sport in which players on two teams try to throw balls and hit opponents, while avoiding being hit themselves.</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/doge.jpg" alt="" /></span>
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
							<li><h2>Head:</h2><h3> Shweta Sawant <br><br>+91 8424802263</h3></li>
							<li><h2>Co-Head:</h2><h3> Jimisha Surti <br><br>+91 9930713056</h3></li>
							<li><h2>Co-Head:</h2><h3> Aleesha Jivani <br><br>-</h3></li>

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
$q="select class,dodgeball from olympus_points_g order by dodgeball DESC";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($r))
{
												 ?>
												<td><?php echo $row['class']; ?></td>
												<td><?php echo $row['dodgeball'] ?></td>
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
							<p><strong>1. Match will be of total 14 minutes .7 minutes per team.</br></br>
2. The objective of dodgeball is to eliminate all players of the opposing team by       hitting the opposing player below the waist. </br></br>
3.NO mix players in a team will be entertained. </br></br>
4. Participants must report 30 minutes before the reporting time , or else the opposite team will be given a bye. </br></br>
5. Referee’s decision will be the final decision. </br></br>
 6.Carry your smart cards and ID cards. </br></br>
7. NO dropouts students can participate.
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
