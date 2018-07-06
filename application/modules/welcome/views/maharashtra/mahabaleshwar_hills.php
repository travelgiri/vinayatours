<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page_name = $this->uri->segment(1);
?>
<?php $this->load->view('frontendheader');?>
<div class="col-md-12">
					<div id="wrapper" class="wrapper bgded overlay">
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider"> 
		<img src="<?php echo base_url();?>media/images/subpages/mh-subpages1.JPG" alt="Vinaya Tours - Mahableshwar" />
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
<div class="container">
<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading margin_b0 animate-box">
					<h2>Mahabaleshwar - 2 Night 3 Days</h2>
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
						
						<li><strong>Day 1</strong><br/>
						Pick up time As per your destination Mumbai – Mahabaleshwar (250 Kms 9 Hrs Approx) Proceed To Mahabaleshwar By Coach. <br/>
						Overnight Journey To Mahabaleshwar by AC bus.
						</li><br/>
						<li><strong>Day 2</strong>
						Check In Hotel as per Hotel rules. <br/>
						Arrive 6.00 Am At Mahabaleshwar. Morning Free For Leisure By Own, <br/>
						Afternoon Proceed For Pratapghad Darshan (TourTime 3 ½ Hours): Pratapghad Fort, Accent Caves, Watch Tower, Drum Hall, Underground Tunnel, Bhavani Mandir, Shivaji Statue, Pratapghad Garden, Punishment Point, Kabar Of Afzalkhan. <br/>
						(Meal: Lunch & Dinner).
						</li><br/>
						<li><strong>Day 3: Mahabaleshwar Darshan & Panchagani</strong>
						After Breakfast Proceed For Mahabaleshwar darshan  Tour 1 & Panchagani (Tour Time 4 Hours) Covering OldMahabaleshwar, Panchaganga Mandir, Author Seat Point, Eco Point, Hunting Point, Monkey Point, Table Land, Parsi Point & Jam Factory Etc. <br/>
						After Sightseeing Back To The Hotel At Lunch. <br/>
						Overnight Stay At Hotel. <br/>
						(Meal: Morning Breakfast, Lunch & Dinner).
						</li><br/>
						<li><strong>Day 4: Check Out time 8.00 AM </strong>
						After Breakfast Check out from Hotel. <br/>
						Return Journey towards Mumbai.
						<br/>(Tour Program may be interchanged at Mahabaleshwar).
						</li>
						</ul>
						</div>
                        <div class="tab-pane fade" id="tab2warning">
						<ul>
						<li>Mumbai - Mahabaleshwar - Mumbai Travelling by AC Bus</li>
						<li>Accommodation in well appointed room.</li>
						<li>Meal - 2 B/f, 2 Lunch & 2 dinner.</li>
						<li>All sightseeing's by private car.</li>
						<li>All taxes, toll and parking </li>
						<li>Check in 10: 00 AM & Check out 8:00 AM.</li>
						</ul>
						</div>
                        <div class="tab-pane fade" id="tab3warning">
						<ul>
						<li>Personal expenses like soft/hard drinks, laundry etc..</li>
						<li>Pick-Up from Bus Stand & Drop to Bus Stand.</li>
						<li>Monuments & all entry fees..</li>
						<li>Not mentioned in Inclusion.</li><br/>
						<strong>Note : There are possibilities because of rain, Sight seen may change or cancel. It completely depends on weather.</strong>
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