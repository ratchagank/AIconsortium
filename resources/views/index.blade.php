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
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
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
						<li class="nav-item active"><a class="nav-link" href="{{ route('index') }}"><i class="fa-solid fa-house"></i> Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('about') }}"><i class="fa-solid fa-address-card"></i> About</a></li>
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
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>TCE AI Consortium</strong></h2>
										<p class="lead">Kick-start your journey to becoming an industry-ready AI engineer with AI SPRINT, a hands-on In-Lab Internship Opportunity designed for II- and III-year students!</p>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>

			<div class="carousel-item">
				<div id="home" class="first-section position-relative collage-background-wrapper">
				
				    <!-- 📸 Collage Background (grid of images) -->
				    	<div class="collage-grid">
				      	<img src="images/collage1.jpg" class="collage-img" alt="Image 1">
				      	<img src="images/collage2.jpg" class="collage-img" alt="Image 2">
				      	<img src="images/collage3.jpg" class="collage-img" alt="Image 3">
				      	<img src="images/collage4.jpg" class="collage-img" alt="Image 4">
				      	<img src="images/collage5.jpg" class="collage-img" alt="Image 5">
				      	<img src="images/collage6.jpg" class="collage-img" alt="Image 6">
				    	</div>
				
				    <!-- 📝 Text Content on Top -->
				    <div class="container content-wrapper">
				      <div class="row mt-4" style="margin: 120px 0 0 0; padding-top: 8%; width: 100%;">
				        <div class="col-md-12 text-left">
				          <div class="big-tagline">
				            <h2 data-animation="animated zoomInRight"><strong>TCE AI Consortium</strong></h2>
				            <p class="lead" data-animation="animated fadeInLeft">
				              🚀 Energetic & Student-Centric
				              "Code. Create. Conquer. The AI Way @ TCE!"
				              "Fueling Young Minds with Future Intelligence."
				            </p>
				            <a href="#" class="hover-btn-new"><span>Read More</span></a>
				          </div>
				        </div>
				      </div>
				    </div>
				
				</div>
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>TCE AI Consortium</strong> </h2>
										<p class="lead" data-animation="animated fadeInLeft">🔬 Visionary & Bold
											"Shaping the Future with AI — Today at TCE."
											"Innovating Intelligence, Empowering Engineers."											
											🎓 Academic & Professional
											"Where Tomorrow’s AI Engineers Begin."											
											"Driving AI Research, Building Real-World Impact."</p>																						
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<section class="event-highlight">
  <h2>🎉 Current Event</h2>
  <div class="event-details">
    <p>Loading event details...</p>
  </div>
	</section>

	
  <style>
    body {
      margin: 5;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f9fc;
      color: #031926;

    }
    
    .con{
      background: #f2f2f2;
      display: flex;
      justify-content: center;
      padding: 80px;
      flex-wrap: wrap;
      gap: 30px;
    }
    .card {
    	border: 1px solid #830000;
      width: 320px;
      height: 320px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      padding: 10px;
      opacity: 0;
      transition: all 0.8s ease-out;
    }
    .cardimg {
      border-radius:12px;
      width:300px;
      height:150px;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .line{
    	border:2px solid #830000;
    }
    .emoji {
  		font-size: 2rem;
  		text-align: center;
  		line-height: 2.5rem;
		}
    .title {
    	height: 25px;
      font-weight: bold;
      font-size: 1.1rem;
      margin-bottom: 0.3rem;
    }
    .animate-bottom {
      transform: translateY(60px);
    }

    .animate-left {
      transform: translateX(-60px);
    }

    .animate-right {
      transform: translateX(60px);
    }

    .animate-top {
      transform: translateY(-60px);
    }

    .animate-zoom {
      transform: scale(0.8);
    }

    /* When visible, apply final state */
    .card.visible {
      opacity: 1;
      transform: translateX(0) translateY(0) scale(1);
    }

    .card h3 {
      margin-top: 0;
      color: #333;
    }
    .title{
    	padding: 10px;
    	color:darkblue;
    }
  </style>

<body>
   <div class="con">
    <div class="card animate-top" >
    	<div class="cardimg" style="background-image: url('images/domainimg1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
    	<hr class="line">
      <div class="title">MediVision</div>
      <div class="title">AI-Powered Medical Imaging and Reporting</div>
    </div>
    <div class="card animate-left" >
    	<div class="cardimg" style="background-image: url('images/domainimg2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
    	<hr class="line">
      <div class="title">Decoding Bharat</div>
      <div class="title">AI for Indian Language Analysis</div>
    </div>
    <div class="card animate-right" >
    	<div class="cardimg" style="background-image: url('images/domainimg3.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
    	<hr class="line">
      <div class="title">Business Minds 2.0</div>
      <div class="title">Enterprise AI Agents</div>
    </div>
    <div class="card animate-bottom" >
    	<div class="cardimg" style="background-image: url('images/domainimg4.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
    	<hr class="line">
      <div class="title">Beyond Tomorrow</div>
      <div class="title">Frontier AI Product Innovation</div>
    </div>
    <div class="card animate-zoom" >
    	<div class="cardimg" style="background-image: url('images/domainimg6.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
    	<hr class="line">
      <div class="title">AI Illuminates</div>
      <div class="title">Advancing Tech Education through AI</div>
    </div>
</div>
   <script>
    const boxes = document.querySelectorAll('.card');

    function revealOnScroll() {
      const triggerBottom = window.innerHeight * 0.85;

      boxes.forEach(card => {
        const boxTop = card.getBoundingClientRect().top;
        if (boxTop < triggerBottom) {
          card.classList.add('visible');
        } else {
          card.classList.remove('visible');
        }
      });
    }

    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);
  </script>
</body>


   

    

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">600</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">240</p>
					<h3>Courses</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">68</p>
					<h3>Years Completed</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->


    

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
        <div class="contain">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2024 Thiagarajar College of Engineering, Madurai 625 015</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('js/timeline.min.js') }}"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',#ff6161
			visibleItems: 4
		});
	</script>
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

</body>
</html>