<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page_name = $this->uri->segment(1);
?>
<?php $this->load->view('frontendheader');?>
<div class="col-md-12">
					<div id="wrapper" class="wrapper bgded overlay">
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider"> 
		<img src="<?php echo base_url();?>media/images/subpages/Rajasthan 1024x300.jpg" alt="Vinaya Tours - Rajashthan"/> 
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
<div class="container supage">
<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading margin_b0 animate-box subpage_heading">
					<h2>Mount Abu - 2 Night 3 Days</h2>
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
						
						<li><strong>Day 1: Ambaji Sightseeing</strong><br/>
						Sightseeing<br/> Ambaji Temple and Gabbar.
						Over Night stay at Hotel.
						</li><br/>
						<li><strong>Day 2: Mount Abu Sightseeing</strong>
						After Breakfast move to Nakki lake, Addhardevi, Delwara Temple, Bhramkumari Om Shanti Bhawan, Guru Shikher, Sun Set Point etc.<br/>
						Over Night stay at Hotel.
						</li><br/>
						<li><strong>Day 3: Check Out</strong>
						After Breakfast Check out. 
						Tour ends with sweet memory.
						</li>
						</ul>
						</div>
                        <div class="tab-pane fade" id="tab2warning">
						<ul>
						<li>Stay in a Deluxe room with all amenities.</li>
						<li>2 Breakfast, 2 Dinner</li>
						<li>Sightseeing by Private car.</li>
						<li>1 Day Ambaji Sightseeing by car</li>
						<li>1 Day Mount Abu Sightseeing by car</li>
						</ul>
						</div>
                        <div class="tab-pane fade" id="tab3warning">
						<ul>
						<li>International/Domestic airfare & train fare.</li>
						<li>Any meals other than those specified.</li>
						<li>Expenses of personal nature such as tips, telephone calls, laundry,liquor etc.</li>
						<li>Entrance fees, jungle fees, adventure sports, pony rides, monuments fees during sightseeing.</li>
						<li>Any other item not specified.</li>
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