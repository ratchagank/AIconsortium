<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>TCE AI Consortium</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset('css/versions.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Modernizer for Portfolio -->
    <script src="{{ asset('js/modernizer.js') }}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Student Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{ route('index') }}">
					<img src="{{ asset('images/logo.png') }}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="{{ route('index') }}"><i class="fa-solid fa-house"></i> Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="{{ route('about') }}"><i class="fa-solid fa-address-card"></i> About</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('events') }}"><i class="fa-solid fa-calendar"></i> Events</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"><i class="fa-solid fa-address-book"></i> Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Register Now</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>About TCE<span class="m_1">To provide world class quality technical education with strong ethical values.</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About Our Consortium</h3>
                    <p class="lead">The AI Consortium at TCE promotes AI education, research, and industry collaboration through initiatives like AI SPRINT and AI Week.</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                    	<h4>2025 Launch of AI Consortium, TCE</h4>
                        <h2>Innovating the Future with Artificial Intelligence</h2>
              <p>The AI Consortium at Thiagarajar College of Engineering is a pioneering initiative launched to drive innovation, research, and collaboration in the field of Artificial Intelligence. It serves as a bridge between academia and industry, nurturing talent and fostering real-world AI solutions.</p> <p>Our programs, including the flagship AI SPRINT internship and AI Week, empower students to explore domains like medical imaging, language processing, product innovation, and AI in education. Through hands-on learning, expert-led sessions, and collaborative projects, the Consortium aims to shape the next generation of AI leaders.</p>
                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                       <h2>Empowering Innovation through AI at TCE</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div class="hmv-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<h3>🧭 Vision</h3>
						<p>To provide world-class technical education with strong ethical values.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<h3>🎯 Mission</h3>
						<p>Achieve excellence in science, engineering, and technology through dedication and innovation.Develop students into ethical, globally competent professionals.Equip students with advanced technology to meet societal and industrial needs.Promote teamwork to make TCE a leader in technical education.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<h3>🏛️ About the College</h3>
						<p>Established in 1957, TCE is a government-aided autonomous institution affiliated with Anna University. It offers a wide range of engineering and science programs in an eco-friendly campus. TCE focuses on academic excellence, research, and industry collaboration.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="padding:50px;"><div style="height:3px; background-color:#830000; border-radius:15px;"></div></div>

	<h2 style="color:#830000; margin-left:80px; font-size:35spx;">PATRONS</h2>

	<!-- <div id="Faculty" class="section wb">
        <div class="container">
            <div class="row"> -->
            	<div class="facul" style="display: flex; padding:50px; margin:20px;">
            		<div class="col-lg-3 col-md-6 col-12">
						<div class="our-team">
							<div class="team-img">
								<img src="images/team-001.png">
								<div class="social">
									<ul>
										<li><a href="#" class="fa fa-envelope"></a></li>
										<li><a href="#" class="fa-brands fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content">
								<h3 class="title">Mr. K. Hari Thiagarajan</h3>
								<span class="post">Chairman & Correspondent</span>
							</div>
						</div>
					</div>
            		<div class="col-lg-3 col-md-6 col-12">
						<div class="our-team">
							<div class="team-img">
								<img src="images/team-002.png">
								<div class="social">
									<ul>
										<li><a href="#" class="fa fa-envelope"></a></li>
										<li><a href="#" class="fa-brands fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content">
								<h3 class="title">Dr. L. Ashok Kumar</h3>
								<span class="post">Principal</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<div class="our-team">
							<div class="team-img">
								<img src="images/team-07.png">
								<div class="social">
									<ul>
										<li><a href="#" class="fa fa-envelope"></a></li>
										<li><a href="#" class="fa-brands fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content">
								<h3 class="title">Dr. C. Deisy</h3>
								<span class="post">Professor & Head</span>
							</div>
						</div>
					</div>

					
				</div>

				<div style="padding:50px;"><div style="height:3px; background-color:#830000; border-radius:15px;"></div></div>

				<h2 style="color:#830000; margin-left:80px; font-size:35spx;">FACULTY</h2>

				<div class="facul" style="display: flex; padding:50px; margin:20px;  flex-wrap:wrap;">

					<div class="col-lg-3 col-md-6 col-12">
						<div class="our-team">
							<div class="team-img">
								<img src="images/team-02.png">
								<div class="social">
									<ul>
										<li><a href="#" class="fa fa-envelope"></a></li>
										<li><a href="#" class="fa-brands fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content">
								<h3 class="title">Dr. K. V. Uma</h3>
								<span class="post">Associate Professor</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-12">
						<div class="our-team">
							<div class="team-img">
								<img src="images/team-01.png">
								<div class="social">
									<ul>
										<li><a href="#" class="fa fa-envelope"></a></li>
										<li><a href="#" class="fa-brands fa-linkedin"></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content">
								<h3 class="title">Mrs. A. Indirani</h3>
								<span class="post">Associate Professor</span>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-04.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-envelope"></a></li>
									<li><a href="#" class="fa-brands fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Dr. P. Suganthi</h3>
							<span class="post">Assistant Professor</span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-05.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-envelope"></a></li>
									<li><a href="#" class="fa-brands fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Mrs. T. T. Mathangi</h3>
							<span class="post">Assistant Professor</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-06.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-envelope"></a></li>
									<li><a href="#" class="fa-brands fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Mrs. S. Jeniba</h3>
							<span class="post">Assistant Professor</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/team-08.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-envelope"></a></li>
									<li><a href="#" class="fa-brands fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Dr. R. Harine Rajashree</h3>
							<span class="post">Assistant Professor</span>
						</div>
					</div>
				</div>
				</div>

				
            <!-- </div> 
        </div> 
    </div> --> 	


    
    <!-- <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div> 
        </div> 
    </div> --> 

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p>Thiagarajar College of Engineering (TCE) is as a Government Aided Autonomous Institution, established in 1957 by the philanthropist Late Karumuttu Thiagarajan Chettiar. TCE is affiliated to Anna University, Chennai, and approved by All India Council for Technical Education (AICTE). TCE offers a wide array of Undergraduate, Postgraduate and Ph.D. Programs across various disciplines of Engineering, Architecture and Science. The campus is set within a serene and eco-friendly environment surrounded by dense vegetation and best infrastructure facilities.</p>
                        <div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-github"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
							<li><a href="#">About</a>
							</li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="https://www.tce.edu/">tce.edu</a></li>
                            <li>Thiagarajar College Of Engineering,Madurai 625015</li>
                            <li>+91 452 2482240</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2024 Thiagarajar College of Engineering, Madurai 625 015.</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>