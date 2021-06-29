<!doctype html>
<?php
  session_start();
?>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Home Page</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		

		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

			<nav style="background-color: #888888;" class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><h3>collegesearch.com</h3></a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
							<li class="nav-item"><a class="nav-link" href="collegelist.php">Colleges</a></li>					
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>College Search</h2>
							<p></p>
						</div>
					</div>
				</div>
                <form action="result.php" role="submit" method="POST">
                <div class="col-lg-4">
                <div class="card">
                <select name="course" id="">
                    <option value="Default">Select Course</option>
                    <option value="BSc">BSc</option>
                    <option value="BA">BA</option>
                    <option value="BCom">BCom</option>
                    <option value="BBA">BBA</option>
                    <option value="BSW">BSW</option>
                    <option value="MA">MA</option>
                    <option value="MSc">MSc</option>
                    <option value="MCom">MCom</option>
                    <option value="MSW">MSW</option>
                </select>
                </div></div>
                <BR><BR>
                <div class="col-lg-4">
                <div class="card">
                <select name="University" required>
                <option value="Default">Select Universirty</option>
                    <option value="University of Calicut">University of Calicut</option>
                	<option value="All Universities">All Universities in Kerala</option>
                    <option value="University of Kerala">University of Kerala</option>
                    <option value="APJ Abdul Kalam Technological University">APJ Abdul Kalam Technological University</option>
                    <option value="Kannur University">Kannur University</option>
                    <option value="Cochin University of Science and Technology">Cochin University of Science and Technology</option>
                    <option value="Kerala University of Health Sciences">Kerala University of Health Sciences</option>
                    <option value="Kerala Agricultural University">Kerala Agricultural University</option>
                    <option value="Kerala Kalamandalam Deemed University of Art and Culture">Kerala Kalamandalam Deemed University of Art and Culture</option>
                    <option value="Central University of Kerala">Central University of Kerala</option>
                    <option value="Kerala University of Fisheries and Ocean Studies">Kerala University of Fisheries and Ocean Studies</option>
                    <option value="Sree Sankaracharya University of Sanskrith">Sree Sankaracharya University of Sanskrith</option>
                    <option value="National University of Advanced Legal Studies">National University of Advanced Legal Studies</option>
                    <option value="Mahatma Gandhi University">Mahatma Gandhi University</option>
                </select>
                </div></div>
                <BR><BR>
                <div class="col-lg-4">
                <div class="card">
                <select name="district" id=""> 
                <option value="Default">Select District</option>
                    <option value="All Over Kerala">All Over Kerala</option>
					<option value="Kozhikode">Kozhikode</option>
                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                    <option value="Alappuzha">Alappuzha</option>
                    <option value="Kottayam">Kottayam</option>
                    <option value="Idukki">Idukki</option>
                    <option value="Eranakulam">Eranakulam</option>
                    <option value="Thrissur">Thrissur</option>
                    <option value="Palakkad">Palakkad</option>
                    <option value="Malappuram">Malappuram</option>
                    <option value="Wayanad">Wayanad</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Kasaragod">Kasaragod</option>
                </select>
                </div>
                </div>
                <br><br>
                <div class="col-lg-4">
                <div class="card">
                <input type="submit" id="submit" name="submit" value="Search" class="btn btn-primary" style="border-radius:0px;">
                </form>
                </div>
                </div>
                </div>
               
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	<section class="feature_area">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-4">
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="lnr lnr-book"></span>
						</div>
						<div class="desc">
							<h4>New Classes</h4>
							<p>
								In the history of modern astronomy, there is probably no one greater leap forward building and launch.
							</p>
						</div>
					</div>
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="fa fa-trophy"></span>
						</div>
						<div class="desc">
							<h4>Top Courses</h4>
							<p>
								In the history of modern astronomy, there is probably no one greater leap forward building and launch.
							</p>
						</div>
					</div>
					<div class="single_feature d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-screen"></span>
						</div>
						<div class="desc">
							<h4>Full E-Books</h4>
							<p>
								In the history of modern astronomy, there is probably no one greater leap forward building and launch.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->

	<!--================ Start Department Area =================-->
	<div class="department_area section_gap">
		<div class="container">
			<div class="row align-items-center">
				
			</div>
		</div>
	</div>
	<!--================ End Department Area =================-->

	
	<!--================ Start Fact Area =================-->
	<div class="fact_area overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>Facts that Make us Unique</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
							exciting to think about setting up your own viewing station.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single features -->
				<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon1.png" alt="">
						</div>
						<h4>Expert Mentors</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt labore dolor sit amet
							consec tetur adipisicing elit, seddo eiusmod tempor.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon2.png" alt="">
						</div>
						<h4>25000+ Courses</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon3.png" alt="">
						</div>
						<h4>Student Membership</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec tetur adipisicing elit, sed do eiusmod tempor sed do eiusmod tempor incididunt labore dolor sit amet
							consec tetur adipisicing elit, seddo eiusmod tempor.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon4.png" alt="">
						</div>
						<h4>Lifetime Access</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec tetur adipisicing elit sed do eiusmod.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon5.png" alt="">
						</div>
						<h4>Source File Included</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec tetur adipisicing elit sed do eiusmod.</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-4 col-md-6">
					<div class="single_fact">
						<div class="f_icon">
							<img src="img/f-icons/icon6.png" alt="">
						</div>
						<h4>Live Support</h4>
						<p>Lorem ipsum dolor sit amet consec tetur adipis icing elit, sed do eiusmod tempor incididunt labore dolor sit
							amet consec.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Fact Area =================-->


	


	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<a href="index.php"><h4>Home </h4></a>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<a href="contact.php"><h4>Contact </h4></a>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<a href="about.php"><h4>About </h4></a>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2019  |  collegesearch.
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/countdown.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	
	<script src="js/theme.js"></script>
</body>
</html>