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

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" 				aria-controls="	navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
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
	
    
	<div class="all-title-bo" style="background-image: url(images/blog0.jpeg);">
		<div class="container text-center">
		<!-- <h1><span class="m_1"><center>AI WEEK CELEBRATION</center></span></h1> -->
		</div>
	</div>
	<div class="design">
		<div class="container py-4">
  			<h2 class="text-center fw-bold mb-4">KEY HIGHLIGHTS</h2>

  			<div class="row">
    			<!-- Left: Gallery -->
    			<div class="col-lg-8 gallery">
      				<div class="row">
						<div class="gallery-container">
						  <div class="gallery-grid">
						    <img src="images/AIblog1.jpg" class="popup-img" alt="Event Photo">
						    <img src="images/AIblog2.jpg" class="popup-img" alt="Event Photo">
						    <img src="images/AIblog3.jpg" class="popup-img" alt="Event Photo">
						  </div>
						</div>
      				</div>
    			</div>
	
    			<!-- Right: Highlights -->
    			<div class="col-lg-4">
      				<div class="key-stat"><i class="bi bi-person-fill text-success"></i> <strong>165</strong> 	Participants</div>
      				<div class="key-stat"><i class="bi bi-people-fill text-primary"></i> <strong>44</strong> 	Teams</div>
      				<div class="key-stat"><i class="bi bi-person-lines-fill text-danger"></i> <strong>10</	strong> Project Mentors</div>
      				<div class="key-stat"><i class="bi bi-award-fill text-warning"></i> <strong>3</strong> 	Best Projects</div>
	
      				<div class="highlight-box text-center">
        				<i class="bi bi-calendar-event-fill me-2"></i>
        				<strong>02-13 JUNE, 2025</strong><br>
        				<i class="bi bi-clock-fill me-2"></i>
        				9 AM - 5 PM, IT LABS
      				</div>
    			</div>
  			</div>
		</div>
	</div>

	<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  		<div class="modal-dialog modal-fullscreen">
  		  <div class="modal-content bg-dark text-center">
  		    <div class="modal-header border-0">
  		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  				<span aria-hidden="true">&times;</span>
				</button>
  		    </div>
  		    <div class="modal-body d-flex align-items-center justify-content-center">
  		      <img src="" id="modalImage" class="modal-img" alt="Popup Image" />
  		    </div>
  		  </div>
  		</div>
	</div>

		<!-- <div style="display: flex;">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
				
				<p class="stat_count">136</p>
				<h3>Students</h3>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
				<p> 1 Week</p>
				<h3>Duration</h3>
			</div>
		</div> -->
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                	<div class="topic">
                    <p class="lead"><h2>The AI Week Celebration at TCE is a premier event organized to promote awareness, innovation, and collaboration in the field of Artificial Intelligence. It serves as a platform for students, faculty, and industry experts to explore the latest trends, technologies, and applications of AI in real-world scenarios.</h2></p>
                </div>
                </div>
            </div><!-- end title -->

             

		<!--<div class="gallery"><h2>Gallery</h2></div>

            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
					   <img src="" alt="" class="img-fluid" style="height:200px;">
						
					</div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<img src="images/AIblog2.jpg" alt="" class="img-fluid" style="height:200px;">
					</div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						 <img src="images/AIblog3.jpg" alt="" class="img-fluid" style="height:200px;">
						</div>
						
					</div>
                </div>
            </div> -->

           
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
    <script>
	  const popupImages = document.querySelectorAll('.popup-img');
	  const modalImage = document.getElementById('modalImage');
	  const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
	
	  popupImages.forEach(img => {
	    img.addEventListener('click', () => {
	      modalImage.src = img.src;
	      modalImage.alt = img.alt;
	      imageModal.show();
	    });
	  });
	</script>

</body>
</html>