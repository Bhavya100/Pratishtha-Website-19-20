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
                            <h1>Tug Of War</h1>
                            <p>a contest in which two teams pull at opposite ends of a rope until one drags the other over a central line.</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/tow.jpg" alt="" /></span>
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
							<li><h2>Head:</h2><h3> Saurabh Parekh <br><br>+91 9833377939</h3></li>
							<li><h2>Co-Head:</h2><h3> Siddhesh Koli <br><br>+91 9869115411</h3></li>
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
	$q="select b.class,b.tug_of_war as t from olympus_points_b b,olympus_points_g g where b.class=g.class order by t DESC";
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
		$q="select b.class,g.tug_of_war as t from olympus_points_b b,olympus_points_g g where b.class=g.class order by t DESC";
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
							<p><strong>1. If the team does not report within 15 minutes of given time then the opposite team will qualify by default. </br></br>
2. 10 players per team. </br></br>
3. The total weight of the team should not be more than 750kg. </br></br>
4. Match sequence will be based on draws. </br></br>
5. First team to win 2 out of 3 rounds wins. </br></br>
6. The losing team will be knocked out. </br></br>
7. The referee’s decision will be final. </br></br>
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
