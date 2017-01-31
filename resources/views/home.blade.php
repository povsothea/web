@extends('master')

@section('body')
	<div class="slider">		
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
						<img src="{{asset('img/7.jpg')}}" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Clean & Fully Modern Design</span></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p>feature a compelling blend of modern features and easy to use </p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<div class="form-inline">
									<div class="form-group">
										<a href="#gallery">
											<button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
										</a>
									</div>
									<div class="form-group">
										<a href="#pricing">
											<button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
										</a>
									</div>
								</div>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="{{asset('img/6.jpg')}}" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>Fully Responsive / Mobile Ready</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">								
								<p>perfect on every modern device and cross browser compatibility.</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<div class="form-inline">
									<div class="form-group">
										<a href="#gallery">
											<button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
										</a>
									</div>
									<div class="form-group">
										<a href="#pricing">
											<button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
										</a>
									</div>
								</div>
							</div>
						</div>
				    </div> 
				    <div class="item">
						<img src="{{asset('img/1.jpg')}}" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2>Modern Design</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p>The template fully follows the modern web design trends</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<div class="form-inline">
									<div class="form-group">
										<a href="#gallery">
											<button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
										</a>
									</div>
									<div class="form-group">
										<a href="#pricing">
											<button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
										</a>
									</div>
								</div>
							</div>
						</div>
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
	</div><!--/#slider-->
	
	<div id="feature">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3>Features</h3>
					<p>Even multipurpose templates have their individual flavors and specific attributes</p>
				</div>
				<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-laptop"></i>						
							<h2>Fully Responsive</h2>
							<p>Your site will quickly adapt to any gadget with any screen size the user has in had right now.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-heart-o"></i>
							<h2>100% Retina Ready</h2>
							<p>Your website is retina ready so your website will seems perfect on every modern device and cross browser compatibility.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-cloud"></i>
							<h2>Easily Customize</h2>
							<p>it is essential that managers and staff be able to update the website with our admin.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<div class="hi-icon-wrap hi-icon-effect">
							<i class="fa fa-camera"></i>
							<h2>Built In Optimization</h2>
							<p>We are search optimization experts and we make sure that your site will not only be found, but stay competative in search engines.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="gallery">
		<div class="container">
			<div class="text-center">
				<h3>Gallery</h3>
				<p>Professional Modern Templates Design For Business Website</p>
			</div>
			<div class="row">
				<figure class="effect-chico">						
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="img/work/1.jpg" class="flipLightBox">
						<img src="img/work/1.jpg" class="img-responsive" alt="">
						</a>						
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="{{asset('img/work/2.jpg')}}" class="flipLightBox">
						<img src="{{asset('img/work/2.jpg')}}" class="img-responsive" alt="">
						</a>
					</div>
				</figure>	
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="{{asset('img/work/3.jpg')}}" class="flipLightBox">
						<img src="{{asset('img/work/3.jpg')}}" class="img-responsive" alt="">
						</a>
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="{{asset('img/work/4.jpg')}}" class="flipLightBox">
						<img src="{{asset('img/work/4.jpg')}}" class="img-responsive" alt="">
						</a>
					</div>	
				</figure>
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="{{asset('img/work/5.jpg')}}" class="flipLightBox">
							<img src="{{asset('img/work/5.jpg')}}" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="{{asset('img/work/6.jpg')}}" class="flipLightBox">
							<img src="{{asset('img/work/6.jpg')}}" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="{{asset('img/work/7.jpg')}}" class="flipLightBox">
							<img src="{{asset('img/work/7.jpg')}}" class="img-responsive" alt="">
							</a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="{{asset('img/work/8.jpg')}}" class="flipLightBox">
							<img src="{{asset('img/work/8.jpg')}}" class="img-responsive" alt="">
							</a>
						</div>
					</figure>
				</div>
			</div>
		</div>
	</div><!--/#gallery-->
	
	<div class="parallax-window">
		<div class="col-md-6 col-md-offset-3">
			<div class="text-center">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.2s">
					<h2>Parallax Landing Page</h2>
				</div>
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.6s">
					<p>In a elit in lorem congue varius Sed nec arcu<br>
					ullamcorp-er tellus ut dignissim nisi risus non tortor.
					</p>
				</div>
			</div>
		</div>
		<div class="sub-parallax">
			<div class="text-center">
				<div class="col-md-12">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.9s">
						<form class="form-inline">
							<div class="form-group">
								<button type="purchase" name="purchase" class="btn btn-primary btn-lg" required="required">Purchase</button>
							</div>
							<div class="form-group">
								<button type="subscribe" name="subscribe" class="btn btn-primary btn-lg" required="required">Subscribe Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#parallax-window-->
	
	<div id="pricing">
		<div class="container">
			<div class="text-center">
				<h3>Pricing Table</h3>
				<p>Cheap website designers often use standard templates and don’t pay much attention to important details </p>
			</div>
			
			<div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-one wow fadeInDown" data-wow-offset="0" data-wow-delay="0.2s">
                        <ul>
                            <li class="heading-one">
                                <h2>Personal Hosting</h2>
                                <span>$24.00/year</span>
                            </li>
                            <li>1GB Diskspace</li>
                            <li>10GB Bandwidth</li>
                            <li>1 MySQL Database</li>
                            <li>10 Email Accounts</li> 
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Order Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown" data-wow-offset="0" data-wow-delay="0.6s">
                        <ul>
                            <li class="heading-two">
                                <h2>Business Hosting</h2>
                                <span>$69.00/year</span>
                            </li>
                            <li>8GB Diskspace</li>
                            <li>80GB Bandwidth</li>
                            <li>5 MySQL Database</li>
                            <li>Unlimited Email</li> 
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Order Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-three wow fadeInDown" data-wow-offset="0" data-wow-delay="0.9s">
                        <img src="img/ri.png">
                        <ul>
                            <li class="heading-three">
                                <h2>Reseller Hosting</h2>
                                <span>$20.00/year</span>
                            </li>
                            <li>100GB Diskspace</li>
                            <li>1000GB Bandwidth</li>
                            <li>Unlimited MySQL</li>
                            <li>50 cPanel Accounts</li> 
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Order Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-four wow fadeInLeft">
                        <ul>
                            <li class="heading-four">
                                <h2>starters</h2>
                                <span>$299</span>
                            </li>
                            <li>Home Page Design</li>
                            <li>Up to 5 pages</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Dynamic Page</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Content Management System</li>
                            <div class="list-group" style="border:none;">
							  <span class="list-group-item disabled">
							    Template
							  </span>
							  <div class="list-group-item">1 slider or 1 image gallery</div>
							  <div class="list-group-item">Static location map</div>
							  <div class="list-group-item">Simple Contact Form</div> 
							</div>  
                            <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Mobile Optimization</li>
                            <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp;User Guide</li>
                            <li>1 month free technical support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Order Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-five wow fadeInLeft">
                        <ul>
                            <li class="heading-five">
                                <h2>Personal Website</h2>
                                <span>$399.99</span>
                            </li>
                           <li>Home Page Design</li>
                            <li>6-16 pages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Dynamic Page</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Content Management System</li>
                            <div class="list-group" style="border:none;">
							  <span class="list-group-item disabled">
							    Template
							  </span> 
							  <div class="list-group-item">Interactive Maps</div> 
							  <div class="list-group-item">Simple Reservations Form</div> 
							  <div class="list-group-item">Accordions/Tabs</div> 
							</div>  
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Mobile Optimization</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;User Guide</li>
                            <li>2 months free technical support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Order Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-six wow fadeInRight">
                         <img src="img/rib.png">
                        <ul>
                            <li class="heading-six">
                                <h2>Business Website</h2>
                                <span>$549.99</span>
                            </li>
                           	<li>Home Page Design</li>
                            <li>17-29 pages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Dynamic Page</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Content Management System</li>
                            <div class="list-group" style="border:none;">
							  <span class="list-group-item disabled">
							    Extended template 
							  </span>
							  <div class="list-group-item">Event Calendar(s)</div>
							  <div class="list-group-item">Audio/Video</div>
							  <div class="list-group-item">Social Media Integration</div> 
							</div>  
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Mobile Optimization</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;User Guide</li>
                            <li>3 months free technical support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Order Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-seven wow fadeInRight">
                        <ul>
                            <li class="heading-seven">
                                <h2>Corporate Website</h2>
                                <span>$999.99+</span>
                            </li>
                           	<li>Home Page Design</li>
                            <li>30+ pages</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Dynamic Page</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Content Management System</li>
                            <div class="list-group" style="border:none;">
							  <span class="list-group-item disabled">
							    Extended template 
							  </span>
							  <div class="list-group-item">eCommerce</div>
							  <div class="list-group-item">Bookings Pro (real-time)</div>
							  <div class="list-group-item">Multi-lingual</div> 
							</div>  
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Mobile Optimization</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;User Guide</li>
                            <li>4 months free technical support</li>
                            <li class="plan-action">
                                <a href="" class="btn btn-primary">Order Now</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div><!--/pricing-area-->			
		</div>
	</div><!--/#pricing-->
	
	<div id="our-team">
		<div class="container">
			<div class="text-center">
				<h3>Our Team</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
			</div>
			<div class="row">
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="{{asset('img/team/1.png')}}" alt="">
						<h2>Pov Chanthorn</h2>
						<h4>Web Designer</h4>
						<p>Creating websites from a young age, Chanthorn is a Photoshop guru with an eye for innovation and pixel perfect design and He is renowned for designing imaginative web interfaces that focus on usability and effective content presentation.</p>
					</div>
				</div>
				<div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="{{asset('img/team/2.png')}}" alt="">
						<h2>Pov Sothea</h2>
						<h4>Founder & CEO</h4>
						<p>Sothea plays many key roles at webkh and his responsibilities include leadership, operations, account management, business development, and strategy. Eric's broad skillset derives from over ten years of experience working with website.</p>
					</div>
				</div>
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="{{asset('img/team/3.png')}}" alt="">
						<h2>Ma Sochea</h2>
						<h4>UI Designer & Developer</h4>
						<p>Sochea has been working in web development for 10 years, half of that time on the webkh platform. Detail oriented, with a past in project management, He is very interested in easy and intuitive user interfaces. He also brings with his experience in content strategy, search engine optimization, and online marketing.</p>
					</div>
				</div>	
			</div>
		</div>
		<div class="team">
			<div class="container">
				<div class="row">
					<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
						<div class="text-center">
							<img src="{{asset('img/team/team1.jpg')}}" class="img-responsive" alt="">
							<h2>PHON SOPHAL</h2>
							<h4>Project Management & Client Support</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
						</div>
					</div>
					<div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
						<div class="text-center">
							<img src="{{asset('img/team/team2.jpg')}}" class="img-responsive" alt="">
							<h2>POV SREY MOOM</h2>
							<h4>MAKATING</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
						</div>
					</div>
					<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
						<div class="text-center">
							<img src="{{asset('img/team/team3.jpg')}}" class="img-responsive" alt="">
							<h2>John Smith</h2>
							<h4></h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
						</div>
					</div>
					<div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
						<div class="text-center">
							<img src="{{asset('img/team/team4.jpg')}}" class="img-responsive" alt="">
							<h2>KEOUN KUNTHY</h2>
							<h4>Accounts & Bookkeeping</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Fusce fermen tum neque a rutrum varius</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#our-team-->
	
@endsection