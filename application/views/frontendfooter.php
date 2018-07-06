<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(media/images/group_tour_3.jpg);" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>A Little About Vinaya Tours.</h3>
					<p>Vinaya Tours - A tourism service provider company in domestic tour packages. We provide group tours, couple tours, customised holiday packages.Our vision is to provide a pleasant experience to travel around the world.</p>
					<p><a class="btn btn-primary" href="<?php echo site_url('contact-us');?>">Visit Us Here</a></p>
				</div>
				<div class="col-md-3">
					<h3>Our Packages</h3>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a title="Maharashtra" href="<?php echo site_url('maharashtra'); ?>">Maharashtra</a></li>
							<li><a title="Kerala" href="<?php echo site_url('kerala'); ?>">Kerala</a></li>
							<li><a title="Goa" href="<?php echo site_url('goa'); ?>">Goa</a></li>
							<li><a title="Himachal" href="<?php echo site_url('himachal'); ?>">Himachal</a></li>
							<li style="display:none;"><a title="Saputara" href="<?php echo site_url('saputara'); ?>">Saputara</a></li>
							<li><a title="Rajashthan" href="<?php echo site_url('rajashthan'); ?>">Rajashthan</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3" style="display:none;">
					<h3>Youth Tours</h3>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a href="<?php echo site_url('ladakh'); ?>">Ladakh</a></li>
							<li><a href="<?php echo site_url('goa'); ?>">Goa</a></li>
							<li><a href="<?php echo site_url('himachal'); ?>">Himachal</a></li>
							<li><a href="<?php echo site_url('maharashtra'); ?>">Maharashtra</a></li>
							<li><a href="<?php echo site_url('kerala'); ?>">Kerala</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2" style="display:none;">
					<h3>Group Tours</h3>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<ul class="fh5co-footer-links">
							<li><a title="Ladakh" href="<?php echo site_url('ladakh'); ?>">Ladakh</a></li>
							<li><a title="Himachal"  href="<?php echo site_url('himachal'); ?>">Himachal</a></li>
							<li><a title="Kerala" href="<?php echo site_url('kerala'); ?>">Kerala</a></li>
							<li><a title="Rajashthan" href="<?php echo site_url('rajashthan'); ?>">Rajashthan</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p style="display:none;">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li  style="display:none;"><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/vinayatours/" target="_blank"><i class="icon-facebook"></i></a></li>
							<li style="display:none;"><a href="#"><i class="icon-linkedin"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>	
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>media/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<!--<script src="<?php //echo base_url(); ?>media/js/bootstrap.min.js"></script>-->	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>media/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url(); ?>media/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo base_url(); ?>media/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo base_url(); ?>media/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url(); ?>media/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>media/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url(); ?>media/js/main.js"></script>	
	
	<!-- Modernizr JS -->
	<script src="<?php echo base_url(); ?>media/js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>media/js/jquery.nivo.slider.js"></script> 	<!--<script type="text/javascript" src="<?php echo base_url(); ?>media/js/bootstrap-datepicker.min.js"></script> -->
	<script type="text/javascript">
	$(document).ready(function () {
		$('#slider').nivoSlider();						/* $('.datepicker').datepick({    format: 'mm/dd/yyyy'}); */ $(".dropdown").hover(                    function() {            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");            $(this).toggleClass('open');                },        function() {            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");            $(this).toggleClass('open');               }    ); /* $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {        e.preventDefault();        $(this).siblings('a.active').removeClass("active");        $(this).addClass("active");        var index = $(this).index();        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");    }); */
	});
	
    </script> 
<script type="text/javascript" src="<?php echo base_url(); ?>media/js/embed.js"></script>
	</body>
</html>

