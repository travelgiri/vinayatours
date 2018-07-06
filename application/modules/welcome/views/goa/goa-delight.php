<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page_name = $this->uri->segment(1);
?>
<?php $this->load->view('frontendheader');?>
<div class="col-md-12">
					<div id="wrapper" class="wrapper bgded overlay">
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider"> 
		<img src="<?php echo base_url();?>media/images/subpages/Goa 1024x300.jpg" alt="Vinaya Tours - Goa"/> 
	</div>
	<div id="htmlcaption" class="nivo-html-caption" style="display:none;"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
</div>
  <section id="breadcrumb" class="hoc clear" style="display:none;">
<ul>
<li><a href="http://www.os-templates.com/free-website-templates">Home</a></li>
<li><a href="">About Us</a></li> 
</ul>
<h6 class="heading">About Us</h6>
</section>
</div>
				</div>
<div class="container subpage">
<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading margin_b0 animate-box subpage_heading">
					<h2>Goa - 3 Night 4 Days</h2>
				</div>
			</div>
    <div class="row">
    	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-warning package_details_panel">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active tab1"><a href="#tab1warning" data-toggle="tab">Itenary</a></li>
                            <li class="tab2"><a href="#tab2warning" data-toggle="tab">Inclusion</a></li>
                            <li class="tab3"><a href="#tab3warning" data-toggle="tab">Exclusion</a></li>
                            <li class="tab4"><a href="#tab4warning" data-toggle="tab" style="display:none;">Hotels</a></li>
                            <li class="dropdown" style="display:none;">
                                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4warning" data-toggle="tab">Warning 4</a></li>
                                    <li><a href="#tab5warning" data-toggle="tab">Warning 5</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1warning">
						<ul>
						
						<li><strong>Day 1: Arrive at Goa</strong><br/>
						Our representative will pick you and then proceed towards Hotel. <br/>
						Checks into the hotel, after freshen-up free time for leisure activities. <br/>
						Night halt at hotel/resort
						</li>
						<li><strong>Day 2: North Goa Sightseeing's (Non AC Couch)</strong>
						After b/f, Proceed for sightseeing at North Goa that includes Candolim beach, Baga beach, Anjuna beach, and Fort Aguada Light House. <br/>
						Night halt at Goa.
						</li>
						<li><strong>Day 3: South Goa Sightseeing's (Non AC Coach)</strong>
						Proceed for sightseeing at South Goa that includes Miramar Beach, old GOA Church, Mangeshi Temple. 1 Hr. <br/>
						Boat Cruise Ride. <br/>
						Night halt at Goa.
						</li>
						<li><strong>Day 4: Depart from Goa</strong>
						After breakfast check out from the hotel/ resort. <br/>
						Back with sweet memories!!!
						</li>
						</ul>
						</div>
                        <div class="tab-pane fade" id="tab2warning">
						<ul>
						<li>Air conditioned spacious rooms</li>
						<li>Meal as Per Plan - 3 Breakfast and 3 Dinner</li>
						<li>North Goa sightseeing BY Non AC Coach.</li>
						<li>South Goa sightseeing BY Non AC Coach.</li>
						<li>1 hr Boat cruise included</li>
						<li>Pick up / drop from air port / railway station / bus stand (Rs.450/- one way extra for transfer from Margao Railway Station)</li>
						<li>Welcome Drink on Arrival</li>
						<li>Free use of our swimming Pool (with proper swim wear)</li>
						<li>TV with cable connection</li>
						<li>24 hrs running hot and cold water</li>
						<li>All Taxes</li>
						</ul>
						</div>
                        <div class="tab-pane fade" id="tab3warning">
						<ul>
						<li>Porter charges, laundry, jetty charges, water sports and adventure activities. </li>
						<li>Mineral Water, soft and hard drinks, personal expenses.</li>
						<li>Any sightseeing or entry to park or monument or museum or anything not included in the inclusion list.</li>
						<li>Not mentioned in Inclusion.</li>
						<li>Air, bus & train tickets.</li>
						<li>Any Airfare / Train fare to the arrival or from the departure point.</li>
						</ul>
						</div>
                        <div class="tab-pane fade" id="tab4warning">Warning 4</div>
                        <div class="tab-pane fade" id="tab5warning" style="display:none;">Warning 5</div>
                    </div>
                </div>
            </div>
        </div>
        
	</div>
</div>
<br/>
<?php $this->load->view('frontendfooter');?>