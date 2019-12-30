<!DOCTYPE HTML>

<html>
	<head>
		<title>Pratistha</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css"/>
		<style>
			.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
			color: black;
			background-color: #d8ffe8;
			border-color: black;

			}
		</style>

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
					<section >

					
						<div class="content">

						<div class="event hidden ">
                    
						
							
						<ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist" >
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Boys</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Girls</a>
						</li>
						
						</ul>
						
						</div>
						</div>
					</section>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...
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
							<h2>Venue</h2>
						</header>
						<div class="content">
							<p><strong>Sample Dates</strong> sit amet consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceped et lorem adipiscing.</p>

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
							<h2>Rules</h2>
						</header>
						<div class="content">
							<p><strong>Sample Rules</strong> nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>



						</div>
					</section>
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...
							
						</div>
						
						</div>
				




				

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
