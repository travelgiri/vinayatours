<!DOCTYPE HTML>
<html>
	<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112012848-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112012848-1');
	</script>
    <?php 
	$page_name = $this->uri->segment(1);
	//echo $page_name;exit;
	if($page_name == 'kerala-group-tour')
	{
		$meta_keyword = "kerala group tours, summer, winter packages, Munnar, Thekkady, Alleppey";
		$meta_description = "We have packages for Kerala, Kerala packages for summer and winter are available.This packages includes Munnar, Thekkady, Alleppey, kumarakom";
	}
	else if($page_name == 'himachal-group-tour')
	{
		$meta_keyword = "Himachal group tours, summer, winter packages";
		$meta_description = "We have packages for Himachal, Himachal packages for summer and winter are available. This packages includes the Rohtang Pass,Solang valley,Manikaran,Hidimba temple";
	}
	else if($page_name == 'kerala')
	{
		$meta_keyword = "Kerala couple packages, cochin, tea factory, kerala couple packages, houseboat";
		$meta_description = "We have packages for Kerala includes 4 night 5 days, 5 night 6 days, 6 night 7 days packages. This packages includes houseboat stay.";
	}
	else if($page_name == 'kerala-one')
	{
		$meta_keyword = "Kerala 4 Night, 5 days, Periyar Wild life sanctuary, Kathakali & Kalarippayattu show";
		$meta_description = "We have packages for Kerala includes 4 night 5 days, 5 night 6 days, 6 night 7 days packages. This packages includes houseboat stay.";
	}
	else if($page_name == 'kerala-two')
	{
		$meta_keyword = "Kerala 5 Night 6 days, Eravikulam national park, Tea museum, Kunadala lake";
		$meta_description = "This package includes Cochin to Munnar, Munnar 2 days, Munnar to Thekkady, Thekkady to Alleppey, Alleppey houseboat stay";
	}
	else if($page_name == 'kerala-three')
	{
		$meta_keyword = "Kerala 6 Night 7 days, Spice gardens, Elephant safari";
		$meta_description = "This package includes Cochin to Munnar, Munnar 2 days, Thekkady 1 day, Thekkady to Alleppey, Alleppey houseboat stay";
	}
	else{
		$meta_keyword = "tourism, dream destinations, travel";
		$meta_description = "Vinaya Tours - Tourism service provider company.We introduce the places where anyone can easily travel";
	}
	
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vinaya Tours</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $meta_description;?>"/>
	<meta name="keywords" content="<?php echo $meta_keyword;?>" />

	<?php /*
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	*/?>

	
	
	<!-- Animate.css -->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/style.css?20180428">
	
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/nivo-slider.css?02122017" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/bootstrap-datepicker.css?02122017" type="text/css" media="screen" />

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	
	<body>
	<?php 
	$page_name = $this->uri->segment(1);
	$active_class = '';
	$gallery_active_class = '';
	$contact_active_class = '';
	$testimonial_active_class = '';
	$about_active_class = '';
	$li_page_active_class = '';
	$gallery_page_active_class = '';
	$contact_page_active_class = '';
	$about_page_active_class = '';
	$testimonial_page_active_class = '';
	
	if($page_name == '')
	{
		$active_class = 'link_active';
		$li_page_active_class = 'li_page_active_class';
	}
	else if($page_name == 'gallery')
	{
		$gallery_active_class = 'link_active';
		$gallery_page_active_class = 'li_page_active_class';
	}
	else if($page_name == 'contact-us')
	{
		$contact_active_class = 'link_active';
		$contact_page_active_class = 'li_page_active_class';
	}
	else if($page_name == 'about-us')
	{
		$about_active_class = 'link_active';
		$about_page_active_class = 'li_page_active_class';
	}
	else if($page_name == 'testimonial')
	{
		$testimonial_active_class = 'link_active';
		$testimonial_page_active_class = 'li_page_active_class';
	}
	
	if($page_name == 'maharashtra' || $page_name == 'kerala' || $page_name == 'goa' || $page_name == 'rajashthan' || $page_name == 'himachal')
	{
		$active_class = 'link_active';
		$li_page_active_class = 'li_page_active_class';
	}
	
	
	if($page_name == 'group-tours')
	{
		$active_class = 'link_active';
		$li_page_active_class = 'li_page_active_class';
	} 
	?>
	
	
	<div id="page">
	<nav class="fh5co-nav">
		<div class="top">
			<div class="container">
				<div class="row">
				<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php echo site_url('');?>" title='Vinaya Tours'><img src="media/images/Logo.png?2017411" alt=""></a></div>
					</div>
					<div class="col-xs-10 text-right">
						<p class="num" style=""><a class="contact_link"  href="<?php echo site_url('contact-us');?>" title="Contact Us">Call: +91 84240 57936</a></p>
						<ul class="fh5co-social">
							<li style="display:none;"><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/vinayatours/" target="_blank" title="Visit us on Facebook"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/toursvinaya_/" target="_blank" title="Visit us on Instagram"><i class="insta_icon icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="top-menu">-->
			
		<!--</div>-->
	</nav>
	<div class="container_website">
					
			<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
		<li class="dropdown mega-dropdown <?php echo $li_page_active_class;?>">
				<a href="<?php echo site_url('');?>" class="<?php echo $active_class?>">Home</a>		</li>
			<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Packages <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3" style="display:none;">
						<ul>
							<li class="dropdown-header" style="display:none;">Kerala</li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel" style="display:none;">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button  style="display:none;" class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button style="display:none;" class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button style="display:none;" class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li style="display:none;" class="divider"></li>
                            <li style="display:none;"><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Kerala Houseboat</li>
							<li><a href="<?php echo site_url('kerala-houseboat-1');?>">3 Night 4 Days</a></li>
                            <li><a href="<?php echo site_url('kerala-houseboat-2');?>">4 Night 5 Days</a></li>
                            <li><a href="<?php echo site_url('kerala-houseboat-3');?>">5 Night 6 Days</a></li>
                            <li><a href="<?php echo site_url('kerala-houseboat-4');?>">6 Night 7 Days</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Goa</li>
                            <li><a href="<?php echo site_url('goa-delight');?>">Goa Delight</a></li>
							<li style="display:none;"><a href="#">Google Fonts</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><a href="<?php echo site_url('himachal');?>">Himachal</a></li>
							<li><a href="<?php echo site_url('manali-volvo');?>">Manali Volvo Couple</a></li>
							<li><a href="<?php echo site_url('manali-car');?>">Manali Car Package</a></li>
							<li><a href="<?php echo site_url('simla-manali-car');?>">Simla Manali Car</a></li>                            
							<li><a href="<?php echo site_url('simla-manali-volvo');?>">Simla Manali Volvo</a></li>							
							<li><a href="<?php echo site_url('simla-manali-agra');?>">Agra Manali Car</a></li>							
							<li><a href="<?php echo site_url('chandigarh-manali');?>">Chandigarh Manali Car</a></li>							
							<li><a href="<?php echo site_url('dalhousie-manali-tours');?>">Manali Dalhousie 7N 8D</a></li>							
							<li><a href="<?php echo site_url('dalhousie-manali-5N-6D');?>">Manali Dalhousie 5N 6D</a></li>							
							<li><a href="<?php echo site_url('chandigarh-manali-6N-7D');?>">Chandigarh Manali 6N 7D</a></li>							
							<li><a href="<?php echo site_url('delhi-manali-agra-4N-5D');?>">Delhi Manali Agra 4N 5D</a></li>							
							<li><a href="<?php echo site_url('delhi-manali-agra-5N-6D');?>">Delhi Manali Agra 5N 6D</a></li>							
							<li><a href="<?php echo site_url('delhi-manali-agra-volvo-5N-6D');?>">Delhi Manali Agra 5N 6D - Volvo</a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Maharashtra</li>
                            <li><a href="<?php echo site_url('mahabaleshwar-hills');?>">Mahabaleshwar Hills</a></li>
							<li><a href="<?php echo site_url('mahabaleshwar-vishranti');?>">Mahabaleshwar Vishranti</a></li> 
							<li class="divider"></li>
							<li class="dropdown-header">Rajasthan</li>
                            <li><a href="<?php echo site_url('mount-abu');?>">Mount Abu</a></li>    							
						</ul>
					</li>
				</ul>				
			</li>
            <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Group Tours <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3">
    					<ul>
							<li class="dropdown-header">Upcoming Group Tours</li>
							<li><a href="<?php echo site_url('kerala-group-tour');?>">Kerala</a></li>
                            <li><a href="<?php echo site_url('himachal-group-tour');?>">Himachal</a></li>
						</ul>
					</li>
					<li class="col-sm-3" style="display:none;">
						<ul>
							<li class="dropdown-header">Plus</li>
							<li><a href="#">Navbar Inverse</a></li>
							<li><a href="#">Pull Right Elements</a></li>
							<li><a href="#">Coloured Headers</a></li>                            
							<li><a href="#">Primary Buttons & Default</a></li>							
						</ul>
					</li>
					<li class="col-sm-3" style="display:none;">
						<ul>
							<li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
							<li><a href="#">Calls to action</a></li>
							<li><a href="#">Custom Fonts</a></li>
							<li><a href="#">Slide down on Hover</a></li>                         
						</ul>
					</li>
                    <li class="col-sm-3" style="display:none;">
    					<ul>
							<li class="dropdown-header">Women Collection</li>                            
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
				</ul>				
			</li>
        <li class="<?php echo $gallery_page_active_class;?>"><a class="<?php echo $gallery_active_class; ?>" href="<?php echo site_url('gallery');?>" title="Gallery">Gallery</a></li>
							<li class="<?php echo $testimonial_page_active_class; ?>"><a class="<?php echo $testimonial_active_class; ?>" href="<?php echo site_url('testimonial');?>" title="Testimonials">Testimonials</a></li>
							<li class="<?php echo $about_page_active_class; ?>"><a class="<?php echo $about_active_class; ?>" href="<?php echo site_url('about-us');?>" title="About Us">About Us</a></li>
							<li class="<?php echo $contact_page_active_class; ?>"><a class="<?php echo $contact_active_class; ?>" href="<?php echo site_url('contact-us');?>" title="Contact us here">Contact</a></li>
		</ul>
	</div><!-- /.nav-collapse -->
  </nav>
			</div>
