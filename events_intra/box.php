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
                            <h1>Box Cricket</h1>
                            <p>Box cricket or indoor cricket is a variant of cricket that shares many basic concepts with the original game but with added enhancements to improve the engagement and enjoyment of casual players.</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/cricket.jpg" alt="" /></span>
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
							<li><h2>Head:</h2><h3> Mrunmai Kadam <br><br>+91 9004587731</h3></li>
							<li><h2>Co-Head:</h2><h3> Ankita Shitole <br><br>+91 8169761320</h3></li>
							<li><h2>Co-Head:</h2><h3> Iffat Khatib  <br><br>+91 9820411417</h3></li>

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
$q="select class,boxcricket from olympus_points_g order by boxcricket DESC";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($r))
{
												 ?>
												<td><?php echo $row['class']; ?></td>
												<td><?php echo $row['boxcricket'] ?></td>
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
							<p><strong>●	Match will be played with 6 players a side decided and named before the toss. </br></br>
●	Each team will bowl 4 overs and bat 4 overs. </br></br>
●	One player is allowed to bowl for two over but those overs should be alternate and not continuous. </br></br>
●	One substitute is allowed per team. </br></br>
●	Substitute can only play if a player in injured, decision will be made by the umpire. </br></br>
●	The non-striker will have to stay fully within the crease until the ball is delivered, a penalty run of -1 will be awarded to the batting team every time a non-striker steps out. </br></br>
●	Umpires  decision will be final. </br></br>
●	In case of a tie ,team will bowl and bat a super over to decide a winner. </br></br>
●	There will be a box within which the cricket will be played, with a rectangle area behind the bowler along the boundary at the far end where 4 runs are scored. </br></br>
●	One player from the bowling team must keep the wicket while bowling. </br></br>
●	Balling should be underarm. </br></br>
●	If the team is not on time then the respective team will be disqualified.(no excuses will be entertained) </br></br>
●	Multiple games may be played on same day depending upon team and field availability.
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
