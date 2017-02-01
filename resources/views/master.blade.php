<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Article">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Webkh - It Solution</title>

    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <link rel="author" href="https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]"/>
    <meta name="distribution" content="Global" />
	<meta name="rating" content="General" />
	<meta name="creator" content="Name,Designer,Email Address,or Company" />
	<meta name="publisher" content="Designer, Company or Website Name" />

    <!-- Update your html tag to include the itemscope and itemtype attributes. --> 
	<meta name="description" content="Page description. No longer than 155 characters." />

	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="The Name or Title Here">
	<meta itemprop="description" content="This is the page description">
	<meta itemprop="image" content="http://www.example.com/image.jpg">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@publisher_handle">
	<meta name="twitter:title" content="Page Title">
	<meta name="twitter:description" content="Page description less than 200 characters">
	<meta name="twitter:creator" content="@author_handle">
	<!-- Twitter summary card with large image must be at least 280x150px -->
	<meta name="twitter:image:src" content="http://www.example.com/image.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="Title Here" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.example.com/" />
	<meta property="og:image" content="http://example.com/image.jpg" />
	<meta property="og:description" content="Description Here" />
	<meta property="og:site_name" content="Site Name, i.e. Moz" />
	<meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
	<meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
	<meta property="article:section" content="Article Section" />
	<meta property="article:tag" content="Article Tag" />
	<meta property="fb:admins" content="Facebook numberic ID" />

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/overwrite.css')}}">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="{{asset('css/style.css')}}" rel="stylesheet" />	
    <!-- =======================================================       
        CEO   : Pov Sothea
        Author: Pov Sothea        
    ======================================================= -->
  </head> 
  <body>	
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">WEBKH</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#header">Home</a></li>
                        <li><a href="#feature">Feature</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#pricing">Price & Plan</a></li>
                        <li><a href="#our-team">Our Team</a></li> 
                        <li><a href="#contact">Contact</a></li>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	

@yieLd('body')


        <footer>
        <div id="contact">
            <div class="container">
                <div class="text-center">
                    <h3>Contact Us</h3>
                    <p>Our professional team constantly hones their skill to ensure that you stay ahead in this competitive world. We acknowledge of other competitors in the industry but we guarantee to deliver results which maximize returns, and which offer easy accessibility to your customers and provide a constructive pathway to success. Our pool of technicians of web developers, designers, Digital Services and SMO aficionados, content developers, endeavours to attain customer satisfaction.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                        <h2>Contact us any time</h2>
                        <p>We aim to respond to all enquiries within 24 hours or less</p>               
                    </div>              
                    
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
                        <h2>Contact Info</h2>
                        <ul>
                            <li><i class="fa fa-home fa-2x"></i> Office # 80, 81 Phum Palilay, Sangkat Poipet, Poipet City.</li><hr>
                            <li><i class="fa fa-phone fa-2x"></i> +855 69862698</li><hr>
                            <li><i class="fa fa-envelope fa-2x"></i> webkh.net</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">   
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form method="post" role="form" class="contactForm">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                            <br />
                            <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                            </div>
                            
                            <button type="submit" class="btn btn-theme pull-left">SEND MESSAGE</button>
                        </form>
                    </div>  
                </div>
            </div>
        </div><!--/#contact-->                  
        <div class="container">
            <div class="sub-footer">
                <div class="text-center">
                    <div class="col-md-12">
                        <form class="form-inline">
                            <div class="form-group">
                                <button type="purchase" name="purchase" class="btn btn-primary btn-lg" required="required">Enter Your Email</button>
                            </div>
                            <div class="form-group">
                                <button type="subscribe" name="subscribe" class="btn btn-primary btn-lg" required="required">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>          
        <div class="social-icon">
            <div class="container">
                <div class="col-md-6 col-md-offset-3">                      
                    <ul class="social-network">
                        <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
                    </ul>                       
                </div>
            </div>
        </div>                      
        <div class="text-center">
            <div class="copyright">
                &copy; TechnologyKH. All Rights Reserved.
                <div class="credits">
                    <!-- 
                        All the links in the footer should remain intact. 
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bikin
                    -->
                    <a href="https://technologykh.com/">TechnologyKH</a>
                </div>
            </div>
        </div>                                  
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>      
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>    
    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/fliplightbox.min.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    <script src="{{asset('js/contactform.js')}}"></script>
    
</body>
</html>