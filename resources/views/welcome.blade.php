
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anyar-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1>Broccolo Bill</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="#home" class="active">Home</a></li>
								<li role="presentation"><a href="#about">Menu'</a></li>
								<li role="presentation"><a href="#services">Servizi</a></li>																
								<li role="presentation"><a href="#contact">Contatti</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>			
	</header>
	
	 <div id="home">
		<div class="slider">
			<div class="">
				<div id="about-slider">
					<div id="carousel-slider" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators visible-xs">
							<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-slider" data-slide-to="1"></li>
							<li data-target="#carousel-slider" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<img src="img/3.jpg" class="img-responsive" alt=""> 
						   </div>
						   <div class="item">
								<img src="img/3.jpg" class="img-responsive" alt=""> 
						   </div> 
						   <div class="item">
								<img src="img/3.jpg" class="img-responsive" alt=""> 
						   </div> 
						</div>
						
						<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
							<i class="fa fa-angle-left"></i> 
						</a>
						
						<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
							<i class="fa fa-angle-right"></i> 
						</a>
					</div> <!--/#carousel-slider-->
				</div><!--/#about-slider-->
			</div>
		</div>
	</div>
	
	<section id="about">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>Chi siamo</h2>
					<hr>					
					<p class="lead">Siamo due fratelli che hanno deciso di aprire un'attivita' di ristorazione per famiglie e soprattutto adatto ai bambini.</p>
				</div>
			</div>
		</div>
	
       <!--   <div class="container">
            <div class="row">
                <div class="col-sm-6 <!--   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">						
					<div class="progress progress-striped active">
					  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						40% - eCommerce
					  </div>
					</div>
					<div class="progress progress-striped active">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
						20% - Ruby
					  </div>
					</div>
					<div class="progress progress-striped active">
					  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						60% - User interface
					  </div>
					</div>
					<div class="progress progress-striped active">
					  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						80% - WordPress
					  </div>
					</div>
                </div><!--/.col-sm-6-->

                <div class="col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                 MENU'
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="img/broccolo.jpg">
                                        </div>
                                        <div class="media-body">
                                             <h4>Varieta' Freschezza Salute</h4>
                                             <p></p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                 VEG
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
									3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									Brunch 3 wolf moon tempor.<br>
									
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									non cupidatat skateboard dolor brunch.</p>
								</div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  SENZA GLUTINE
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								Brunch 3 wolf moon tempor.<br>
								
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
								non cupidatat skateboard dolor brunch.</p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  MACROBIOTICA
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
								<div class="panel-body">
								   <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
									3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									Brunch 3 wolf moon tempor.<br>
									
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									non cupidatat skateboard dolor brunch.</p>
								</div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#about-->
	
 <div id="services">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>SERVIZI</h2>
					<hr>					
					<p class="lead">Siamo specializzati in eventi per famiglie e ovviamente bimbi, come comunioni, compleanni, feste in maschera.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="text-center">
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img src="img/services/animazione.jpg">
					<h3>Animazione Bimbi</h3>
					<p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
				</div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<img src="img/services/clown.jpg">
					<h3>Intrattenimento</h3>
					<p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
				</div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<img src="img/services/compleanno.jpg">
					<h3>Feste Compleanno</h3>
					<p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
				</div>
				<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
					<img src="img/services/truccabimbi.jpg">
					<h3>Truccabimbi</h3>
					<p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
				</div>
			</div>	
		</div>		
	</div> 
	
	<!--  <div id="feature">
		<div class="container">
			<div class="text-center">
				<div class="col-md-4">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-book"></i>	
						<h3>Multi Purpose</h3>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>				
				<div class="col-md-4">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-heart-o"></i>	
						<h3>Quick Support</h3>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-cloud"></i>	
						<h3>Friendly Code</h3>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
			
	<div id="contact">
		<div class="container">
			<div class="col-lg-8">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2859.2416231432867!2d12.03835621551628!3d44.22268357910597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132b578e2852ac2b%3A0x6f22e05149571318!2sPiazza+Saffi+Aurelio%2C+47121+Forl%C3%AC+FC!5e0!3m2!1sit!2sit!4v1458769053915" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<section id="contact-page">
				<div class="container">
					<div class="center">        
						<h3>Scrivici</h3>
						<p>sarai ricontattato immediatamente</p>
					</div> 
					<div class="col-lg-4">
						<div class="row contact-wrap"> 
							<div class="status alert alert-success" style="display: none"></div>
							<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">							
								<div class="form-group">
									<label>Name *</label>
									<input type="text" name="name" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Email *</label>
									<input type="email" name="email" class="form-control" required="required">
								</div>															                    													
								<div class="form-group">
									<label>Subject *</label>
									<input type="text" name="subject" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Message *</label>
									<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
								</div>                        
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
								</div>						
							</form> 
						</div><!--/.row-->
					</div>
				</div><!--/.container-->
			</section><!--/#contact-page-->
		</div>
	</div>

	<footer>
		<!--  <div class="container">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4>About Us</h4>
				<p>Anyar is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>						
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i>Suite 54 Elizebth Street, Victoria State Newyork, USA </li>
						<li><i class="fa fa-phone fa"></i> +38 000 129900</li>
						<li><i class="fa fa-envelope fa"></i> info@domain.net</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">				
				<div class="text-center">
					<h4>Photo Gallery</h4>
					<ul class="sidebar-gallery">
						<li><a href="#"><img src="img/gallery1.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery2.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery3.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery4.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery5.png" alt="" /></a></li>
						<li><a href="#"><img src="img/gallery6.png" alt="" /></a></li>					
					</ul>
				</div>
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">				
				<div class="">
					<h4>Newsletter Registration</h4>
					<p>Subscribe today to receive the latest Corpboot news via email. You may unsubscribe from this service at any time</p>
					<form class="form-inline">
						<div class="form-group">		
							<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter your Email...">
						</div>
						<button type="submit" class="btn btn-default">Subscribe</button>
					</form>
				</div>
			</div>
			
		</div>	-->
	</footer>
	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
			</div>
			
		<!-- 	<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; Anyar 2015 All Rights Reserved | <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Anyar
                    -->
				</div>
			</div>						
		</div>				
	</div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.isotope.min.js"></script> 
	<script src="js/functions.js"></script>
  </body>
</html>




















