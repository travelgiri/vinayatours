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
					<h2>Chandigarh Manali - 6 Night 7 Days</h2>
				</div>
			</div>
    <div class="row">
    	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-warning">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active tab1"><a href="#tab1warning" data-toggle="tab">Itenary</a></li>
                            <li class="tab2"><a href="#tab2warning" data-toggle="tab">Inclusion</a></li>
                            <li class="tab2"><a href="#tab3warning" data-toggle="tab">Exclusion</a></li>
                            <li class="tab4"><a href="#tab4warning" data-toggle="tab">Hotels</a></li>
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
                        <div class="tab-pane fade in active" id="tab1warning">Warning 1</div>
                        <div class="tab-pane fade" id="tab2warning">Warning 2</div>
                        <div class="tab-pane fade" id="tab3warning">Warning 3</div>
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