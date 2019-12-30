<!DOCTYPE HTML>

<html>
	<head>
		<title>Pratistha</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css"/>

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
							<p><strong>Sample Dates</strong> sit amet consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceped et lorem adipiscing.</p>

						</div>
					</section>

					<!-- Section -->
					<section>
						<header>
							<h2>Rules</h2>
						</header>
						<div class="content">
							<p><strong>Sample Rules</strong> nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>



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
$q="select class,cricket from olympus_points_b order by cricket DESC";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($r))
{
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
						<h2>Prizes</h2>
					</header>
					<div class="content">
						<p><strong>Sample Fee</strong> nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>


						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>Position</th>

										<th>Prizes</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1st</td>

										<td>1000/-</td>
									</tr>
									<tr>
										<td>2nd</td>

										<td>4000/-</td>
									</tr>


								</tbody>

							</table>
						</div>


					</div>
				</section>

				<!--Section-->
				<section>
					<header>
						<h2>Event Coordinators</h2>
					</header>
					<div class="content">
						<ul class="alt">
							<li><h2>Head:</h2><h3> Name <br><br>+91 23789090</h3></li>
							<li><h2>Co-Head:</h2><h3> Name <br><br>+91 23789090</h3></li>
						</ul>
					</div>
				</section>

				<!-- Section -->
				<section>
					<header>
						<h2>Register now</h2>
					</header>
					<div class="content">
						<p><strong>Sample text</strong> sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore.</p>
						<ul class="actions">
							<li><a href="#" class="button primary large">Register</a></li>
							<li><a href="#" class="button large">Brochure</a></li>
						</ul>
					</div>
				</section>






				<!-- Copyright -->



					<div class="copyright">&copy; Untitled. All rights reserved. Design: <a href="#">By Krutik Patel</a>.</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
