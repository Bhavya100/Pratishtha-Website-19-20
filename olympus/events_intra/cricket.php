<!DOCTYPE HTML>

<html>

<head>
	<title>Pratistha</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" type="image/png" href="favicon_oly.ico" />
	<style>
		.nav-pills .nav-link.active,
		.nav-pills .show>.nav-link {
			color: black;
			background-color: #d8ffe8;
			border-color: black;

		}
	</style>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71546305-5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
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
				<h1>Cricket</h1>
				<p>Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps.</p>
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

				<p><strong>30 th January 2020</strong></p>

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
					<li>
						<h2>Head:</h2>
						<h3> Yash kachave <br><br>+91 7083707000</h3>
					</li>
					<li>
						<h2>Co-Head:</h2>
						<h3> Sagar Chedda <br><br>+91 9773017758</h3>
					</li>
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
								$q = "select class,cricket from olympus_points_b order by cricket DESC";
								$r = mysqli_query($conn, $q);
								while ($row = mysqli_fetch_array($r)) {
								?>
									<td><?php echo $row['class']; ?></td>
									<td><?php echo $row['cricket'] ?></td>
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
				<p><strong>• 11 players in playing team with squad of 15 players.</br></br>
• Team should report before 15 mins of the match . </br></br>
• Each player in the team should bring their yellow ID card or can’t play the match without yellow ID. </br></br>
• Each inning of match will be of 4 overs . </br></br>
• First over of the innings will be a powerplay . </br></br>
• Bowler can ball only 1 over maximum . </br></br>
• Bowler should have a clean action if he throw a ball it will be considered as a no ball . </br></br>
• If the match gets draw then a super over will be played </br></br>
• Umpire decision will be final decision. </br></br>
• If any team argues with umpire or any coordinator team will get disqualified </br></br>
• Any team loses it be directly get knocked out . </br></br>
• Rest of the rules will be told on the match day
</strong></p>



			</div>
		</section>










		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

</body>

</html>