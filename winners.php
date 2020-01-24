<?php
include "admin/includes/connect.php";
$sql="select * from olympus_winners where sports='cricket'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$sql1="select * from olympus_winners where sports='football'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);
$sql2="select * from olympus_winners where sports='basket_ball'";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2);
$sql3="select * from olympus_winners where sports='volleyball'";
$res3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($res3);
$sql4="select * from olympus_winners where sports='throw_ball'";
$res4=mysqli_query($conn,$sql4);
$row4=mysqli_fetch_array($res4);
$sql5="select * from olympus_winners where sports='dodge_ball'";
$res5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_array($res5);
$sql6="select * from olympus_winners where sports='kabaddi'";
$res6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_array($res6);
$sql7="select * from olympus_winners where sports='tabletennis'";
$res7=mysqli_query($conn,$sql7);
$row7=mysqli_fetch_array($res7);
$sql8="select * from olympus_winners where sports='badminton'";
$res8=mysqli_query($conn,$sql8);
$row8=mysqli_fetch_array($res8);
$sql9="select * from olympus_winners where sports='box_cricket'";
$res9=mysqli_query($conn,$sql9);
$row9=mysqli_fetch_array($res9);
$sql0="select * from olympus_winners where sports='tug_of_war'";
$res0=mysqli_query($conn,$sql0);
$row0=mysqli_fetch_array($res0);
$sql11="select * from olympus_winners where sports='chess'";
$res11=mysqli_query($conn,$sql11);
$row11=mysqli_fetch_array($res11);
$sql12="select * from olympus_winners where sports='carrom'";
$res12=mysqli_query($conn,$sql12);
$row12=mysqli_fetch_array($res12);
$sql13="select * from olympus_winners where sports='athletics'";
$res13=mysqli_query($conn,$sql13);
$row13=mysqli_fetch_array($res13);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pratishtha - SAKEC Fest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="favicon_oly.ico" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="https://kit.fontawesome.com/851b6ba55e.js" crossorigin="anonymous"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71546305-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-71546305-5');
  </script>
 <style>
   .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    background-color: #3e64ff;
   }
   .nav-pills .nav-link {

      padding: 1rem;
      width: 15rem;
    }</style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/sakec_logo.png" width="70px" height="70px" alt="">
      </a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
        data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="index.html" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="about.html" class="nav-link"><span>About</span></a></li>
          <li class="nav-item"><a href="council.html" class="nav-link"><span>Council</span></a></li>
          <li class="nav-item dropdown ">
            <a href="#" class="nav-link">
              <span>Pratishtha</span></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin: -5px;">
              <a class="dropdown-item" href="nucleus.html">Nucleus</a>

              <a class="dropdown-item" href="olympus.html">Olympus</a>


              <a class="dropdown-item" href="verve.html">Verve</a>
            </div>
          </li>
          <!--<li class="nav-item"><a href="#" class="nav-link"><span>Pratishtha</span></a><ul class="dropdown"><li><a href="nucleus.html">Nucleus</a></li><li>Olympus <ul class="dropdown"><li><a href="inter.html">Inter-Sports</a></li><li><a href="intra.html">Intra-Sports</a></li><li><a href="cyclathon_marathon.html">Cyclathon & Marathon</a></li><li><a href="points.html">Overall Points</a></li></ul></li><li><a href="verve.html">Verve</a></li></ul></li>
						<!-- <li class="nav-item"><a href="nucleus.html" class="nav-link"><span>Nucleus</span></a></li> -->
          <!-- <li class="nav-item"><a href="#" class="nav-link"><span>Olympus</span></a><ul class="dropdown"><li><a href="inter.html">Inter-Sports</a></li><li><a href="intra.html">Intra-Sports</a></li></ul></li> -->
          <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target=".trustModal">Trust
              Board</a></li>
          <li class="nav-item"><a href="calendar.html" class="nav-link"><span>Events Calendar</span></a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link"><span>Contact Us</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!---- <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
							<h1>Pratishtha '19-20</h1>
							<h2>
								  <span
								     class="txt-rotate"
								     data-period="2000"
										 data-rotate='[ "Nucleus.", "Olympus.", "Verve."]'></span>
							</h2>
							</div>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </section>   -->


  <!-- Trustee modal -->
  <div class="modal fade trustModal" role="dialog" aria-labelledby="trustModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title" style="display: inline-block; font-size: 22px; color:black;">Trust Board</div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size: 30px;">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="img/trust-board.png" class="img-responsive" style="width:100%;height:100%" />
        </div>
      </div>
    </div>
  </div>



  <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="text text-center">
      <h2 style="font-size: 3rem; letter-spacing: 2px;"><b>Intra - <a style="color: #3e64ff;">Sports</a> Winners</b>
      </h2>
    </div><br>
    <br><br>
    <div class="container ">
      <ul class="nav nav-pills mb-3 justify-content-center " id="pills-tab" role="tablist" style="">
        <li class="nav-item" style=" padding: 0 3rem" >
          <a class="nav-link active  text-center" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true" style="font-size: larger; font-weight: bolder;">Boys</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link  text-center" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false" style="font-size: larger; font-weight: bolder;">Girls</a>
        </li>

      </ul>
    </div>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>

    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <nav id="navi">
            <ul>
              <li><a href="#page-1">Cricket</a></li>
              <li><a href="#page-2">Football</a></li>
              <li><a href="#page-3">Basketball</a></li>
              <li><a href="#page-4">Volleyball</a></li>
              <li><a href="#page-5">Throwball</a></li>
              <li><a href="#page-6">Dogeball</a></li>
              <li><a href="#page-7">Kabbaddi</a></li>
              <li><a href="#page-8">Table Tennis</a></li>
              <li><a href="#page-9">Badminton</a></li>
              <li><a href="#page-10">Box Cricket</a></li>
              <li><a href="#page-11">Tug-of-War</a></li>
              <li><a href="#page-12">Chess</a></li>
              <li><a href="#page-13">Carrom</a></li>
              <li><a href="#page-14">Athletics</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-9">
          <div id="page-1" class="page one">
            <h2 class="heading" style="color: black;">Cricket</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row['runnerup_boys']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-2" class="page two">
            <h2 class="heading" style="color: black;">Football</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row1['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row1['runnerup_boys']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-3" class="page three">
            <h2 class="heading" style="color: black;">Basketball(Boys)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row2['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row2['runnerup_boys']; ?></span>
              </div>
            </div>
            <h2 class="heading" style="color: black;">Basketball(Girls)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row2['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row2['winner_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-4" class="page four">
            <h2 class="heading" style="color: black;">Volleyball</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row3['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row3['runnerup_boys']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-5" class="page five">
            <h2 class="heading" style="color: black;">Throwball</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row4['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row4['runnerup_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-6" class="page six">
            <h2 class="heading" style="color: black;">Dogeball</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row5['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row5['runnerup_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-7" class="page seven">
            <h2 class="heading" style="color: black;">Kabbaddi</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row6['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row6['runnerup_boys']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-8" class="page eight">
            <h2 class="heading" style="color: black;">Table Tennis(Boys)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row7['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row7['runnerup_boys']; ?></span>
              </div>
            </div>
            <h2 class="heading" style="color: black;">Table Tennis(Girls)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row7['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row7['runnerup_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-9" class="page nine">
            <h2 class="heading" style="color: black;">Badminton(Boys)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row8['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row8['runnerup_boys']; ?></span>
              </div>
            </div>
            <h2 class="heading" style="color: black;">Badminton(Girls)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row8['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row8['runnerup_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-10" class="page ten">
            <h2 class="heading" style="color: black;">Box Cricket</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row9['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row9['runnerup_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-11" class="page eleven">
            <h2 class="heading" style="color: black;">Tug-of-War(Boys)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row0['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row0['runnerup_boys']; ?></span>
              </div>
            </div>
            <h2 class="heading" style="color: black;">Tug-of-War(Girls)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row0['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row0['runnerup_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-12" class="page twelve">
            <h2 class="heading" style="color: black;">Chess(Boys)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row11['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row11['runnerup_boys']; ?></span>
              </div>
            </div>
            <h2 class="heading" style="color: black;">Chess(Girls)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row11['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row11['runnerup_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-13" class="page thirteen">
            <h2 class="heading" style="color: black;">Carrom(Boys)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row12['winner_boys']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row12['runnerup_boys']; ?></span>
              </div>
            </div>
            <h2 class="heading" style="color: black;">Carrom(Girls)</h2>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row12['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row12['runnerup_girls']; ?></span>
              </div>
            </div>
          </div>

          <div id="page-14" class="page fourteen">
            <h2 class="heading" style="color: black;">Athletics(Boys)</h2>

            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row13['winner_boys']; ?>s</span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row13['runnerup_boys']; ?></span>
              </div>
            </div>
            <h2 class="heading" style="color: black;">Athletics(Girls)</h2>

            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">30th January 2020</span>
                <h2>Winner</h2>
                <span class="position"><?php echo $row13['winner_girls']; ?></span>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              </div>
            </div>
            <div class="resume-wrap d-flex ftco-animate">
              <div class="icon d-flex align-items-center justify-content-center">
                <i class="fas fa-medal" style="color: white;"></i>
              </div>
              <div class="text pl-3">
                <span class="date">31th January 2020</span>
                <h2>Runner-up</h2>
                <span class="position"><?php echo $row13['runnerup_girls']; ?></span>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="text-center">

        <p>
          Made with <i class="icon-heart color-danger" aria-hidden="true"></i> by
          <a href="https://bhavya100.github.io">Bhavya Haria</a> ,
          <a>Kalpesh Rane</a> ,
          <a>Karan Patil</a> ,
          <a>Prashik Kamble</a> ,
          <a href="https://www.instagram.com/techsavvy_kp/">Krutik Patel</a> ,
          <a href="https://www.instagram.com/meet13552/">Meet Mota</a> ,
          <a href="">Amit Ramani</a> &
          <a>Jay Vora</a>
        </p>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>

  <script src="js/main.js"></script>

  <script>
    $(document).ready(function () {
      // Add smooth scrolling to all links
      $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>

</body>

</html>
