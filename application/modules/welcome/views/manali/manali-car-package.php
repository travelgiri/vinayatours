<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page_name = $this->uri->segment(1);
?>
<?php $this->load->view('frontendheader');?>
<div class="col-md-12">
					<div id="wrapper" class="wrapper bgded overlay">
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider"> 
		<img src="<?php echo base_url();?>media/images/subpages/vinaya-tours-himachal.jpg?25112017" alt="Vinaya Tours - Himachal" /> 
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
					<h2>Manali - 3 Night 4 Days</h2>
				</div>
			</div>
    <div class="row">
    	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-warning package_details_panel">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active tab1"><a href="#tab1warning" data-toggle="tab">Itenary</a></li>
                            <li class="tab2"><a href="#tab2warning" data-toggle="tab">Inclusion</a></li>
                            <li class="tab2"><a href="#tab3warning" data-toggle="tab">Exclusion</a></li>
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
						<li><strong>Day 01</strong>: Delhi to Manali (550 Kms)
						Arrival in Delhi, Transfer to Manali full day journey on the way visit Pandoh Dam. <br/>
						Hanogi mata Temple. on arrival check in hotel dinner and overnight stay.</li><br/>
						<li><strong>Day 02</strong>: Rohtang Pass / Solang Valley
						After breakfast Manali to snow point palchan, khoti ,ghulaba  mari  Rohtang Pass and on the way back from snow point visit Solang Valley overnight stay. (Up to Snow Line in case Rohtang is closed due to snow fall). <br/>
						Overnight at hotel. <br/>
						<strong>Note:-</strong> Rohtang pass depend upon the NGT Guideline.</li><br/>
						<li><strong>Day 03</strong>: Manali - Kullu - Manikaran (85 km)/ Kullu (45 km) 
						After Breakfast Full day excursion visiting Manikaran. <br/>
						Manikaran has the World’s hottest Sulfur Spring Waters and is a holy place for Hindus & Sikhs alike. <br/>
						Return back to Kullu town en rooted visiting the famous Kullu Shawl Industry. Overnight at hotel in Manali.
						</li><br/>
						<li><strong>Day 04</strong>: Manali to Delhi :( 550 km)
						After Breakfast Check out from the hotel visit local sightseeing of Manali. <br/>
						Hidimba Devi Temple, Tibetan Monastry, Van Vihar, Vashisht Sulphur spring & then depart to Delhi.
						Tour End.
						</li><br/>
						</ul>
						</div>
                        <div class="tab-pane fade" id="tab2warning">
						<ul>
						<li>1 Deluxe Room with All amenities</li>
						<li>3 Morning tea, 3 Breakfast, 3 Dinner</li>
						<li>All Sightseeing By Indigo car.</li>
						<li>Pick-up & Drop From Delhi to Delhi.</li>
						<li>All Taxes.</li>
						<li>Parking charges & Toll Tax.</li>
						</ul>
						
						</div>
                        <div class="tab-pane fade" id="tab3warning">
						<li>International/Domestic airfare & train fare.</li>
						<li>Any meals other than those specified.</li>
						<li>Expenses of personal nature such as tips, telephone calls, laundry,liquor etc.</li>
						<li>Entrance fees, jungle fees, adventure sports, pony rides, monuments fees during sightseeing.</li>
						<li>Any other item not specified.</li>
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