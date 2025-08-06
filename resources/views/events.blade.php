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
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="{{ route('index') }}"><i class="fa-solid fa-house"></i> Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('about') }}"><i class="fa-solid fa-address-card"></i> About</a></li>
						<li class="nav-item active"><a class="nav-link" href="{{ route('events') }}"><i class="fa-solid fa-calendar"></i> Events</a></li>
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
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="false" data-interval="false" >

		<!-- <ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
		</ol> -->
		<div class="carousel-inner" role="listbox" style="background-image:url('images/banner.jpg');">
			<div class="carousel-item active">
				<div id="home" class="first-section">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline1" style="text-shadow: 1px 1px 4px whitesmoke;">
  											<center><h2>🎉 Current Event</h2></center>
  											<div class="event-details" >
  											  <p>Loading event details...</p>
  											</div>
										<!-- <h2 data-animation="animated zoomInRight"><strong>Event 1</strong></h2>
										<p class="lead">Description:
										Time:</p>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
											<!-- a href="blog.html" class="hover-btn-new"><span>View More</span></a> -->
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
		</div>
	</div>
			<!-- <div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Event 2</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">
                               								Description:
										Time: </p>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="blog1.html" class="hover-btn-new"><span>View More</span></a>
									</div>
								</div>
							</div>            
						</div>
					</div>
				</div>
			</div>
	   <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="btn-radius:20">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		
		<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="btn-radius:20px;">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		 -->

	
	
	<!-- <div class="all-title-box">
		<div class="container text-center">
			<h1>Events<span class="m_1">Empowering minds to build the future with intelligence.</span></h1>
		</div>
	</div> -->
	
     <div id="overviews" class="section wb">
        <div class="container" >
            <div class="section-title row text-center">
                
            </div>

            <hr class="invis"> 

            <div class="row">

            	<div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog0.jpeg" alt="" class="img-fluid" style="height:450px;">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">🎉 AI WEEK CELEBRATION</a></h2>
							</div>
							<div class="blog-desc">
								<p>The AI Week Celebration at TCE is a premier event organized to promote awareness, innovation, and collaboration in the field of Artificial Intelligence. It serves as a platform for students, faculty, and industry experts to explore the latest trends, technologies, and applications of AI in real-world scenarios.</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 1 Week</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 136 Student</li>
								<li><a href="{{ route('blog') }}" class="gallery">View Gallery</a></li>
							</ul>
						</div>
					</div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog1.jpeg" alt="" class="img-fluid" style="height:445px;">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">🎯 AI Consortium of TCE: AI SPRINT - In-Lab Internship for Future Engineers</a></h2>
							</div>
							<div class="course-desc">
								<p>🚀 Kick-start your journey to becoming an industry-ready AI engineer with AI SPRINT, a hands-on In-Lab Internship Opportunity designed for II- and III-year students!
								</p>
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 2 Week</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 165 Student</li>
								<li><a href="{{ route('blog1') }}" class="gallery">View Gallery</a></li>
							</ul>
						</div>
					</div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog2.jpeg" alt="" class="img-fluid" style="height:450px;">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">🎨 AI CONSORTIUM Presents Craft the Core: Logo Design Contest</a></h2>
							</div>
							<div class="blog-desc">
								<p>🖌 Unleash your creativity and help shape the identity of the AI Consortium! This is your chance to design a logo that reflects our core values: innovation, education, and technology.</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 2 Week</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><a href="{{ route('blog2') }}" class="gallery">View Gallery</a></li>
							</ul>
						</div>
					</div>
                </div>

                	
            </div>
			
			<hr class="hr3"> 
			
			<!-- <div class="row">
				<div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog3.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Event 3</a></h2>
							</div>
							<div class="course-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 2 Week</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><a href="blog.html" class="gallery">View Gallery</a></li>
							</ul>
						</div>
					</div>
                </div>
				<div class="col-lg-6 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<img src="images/blog4.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Event 4</a></h2>
							</div>
							<div class="course-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit....</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 2 Week</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><a href="blog.html" class="gallery">View Gallery</a></li>
							</ul>
						</div>
					</div>
                </div> -->
			</div>
        </div>
    </div> 
    

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
							<li><a href="#">About</a></li>
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
                            <li><a href="mailto:#">tce.edu</a></li>
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2024 Thiagarajar College of Engineering, Madurai 625 015</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->



    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <script> 
  fetch('{{ asset('data/events.json') }}') // adjust path if needed
    .then(response => response.json())
    .then(events => {
      const today = new Date().toISOString().split("T")[0];
      const nextEvent = events.find(event => event.date >= today);

      const eventContainer = document.querySelector(".event-details");

      if (nextEvent) {
        eventContainer.innerHTML = `
          <h3>${nextEvent.name}</h3>
          <p><strong>Date:</strong> ${nextEvent.date}</p>
          <p><strong>Time:</strong> ${nextEvent.time}</p>
          <p><strong>Venue:</strong> ${nextEvent.venue}</p>
          <p><strong>Description:</strong> ${nextEvent.description}</p>
          <a href="/events/${nextEvent.name.replace(/\s+/g, '-').toLowerCase()}" class="btn">View Details</a>
        `;
      } else {
        eventContainer.innerHTML = `<p>No upcoming events at the moment.</p>`;
      }
    })
    .catch(error => {
      document.querySelector(".event-details").innerHTML = `<p>Error loading events.</p>`;
      console.error("Error fetching events.json:", error);
    });
</script>

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>