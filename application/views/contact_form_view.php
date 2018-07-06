<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('frontendheader');?>
<div class="col-md-12">
					<div id="wrapper" class="wrapper bgded overlay">
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider"> 
		<img src="<?php echo base_url();?>media/images/contactus_banner.jpg" alt="Vinaya Tours - Contact Us" />
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
					<h2>Contact Us</h2>
				</div>
			</div>
    <div class="row">
		
		<div class="col-md-12" style="margin-top:40px;">
		
		<!--<div class="col-lg-5 mb-4">-->

            <!--Form with header-->
<form action="<?php echo site_url('contact-us/submit');?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="user_name">Your Name</label>
      <input type="text" class="form-control" id="user_name" placeholder="Name" name="user_name">
    </div>
    <div class="form-group col-md-6">
      <label for="user_email">Email address</label>
      <input type="email" class="form-control" id="user_email" placeholder="Email" name="user_email">
    </div>
  </div>
  <div class="form-row">
	  <div class="form-group col-md-6">
		<label for="tour_place">Which Place you wish to Visit?</label>
		<input type="text" class="form-control" id="tour_place" placeholder="" name="tour_place">
	  </div>
	  
	  <div class="form-group col-md-3">
		<label for="tour_start_date">Start Date of Tour</label>
		<input type="text" class="form-control datepicker" id="tour_start_date" placeholder="" name="tour_start_date">
	  </div>
	  <div class="form-group col-md-3">
		<label for="tour_end_date">End Date of Tour</label>
		<input type="text" class="form-control datepicker" id="tour_end_date" placeholder="" name="tour_end_date">
	  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputState">Message</label>
    <textarea class="form-control" rows="5" id="comment"  name="comment"></textarea>
    </div>
    <div class="form-group col-md-2">
      <label for="number_of_adults">Number of Adults</label>
      <input type="text" class="form-control" id="inputCity"  name="number_of_adults">
    </div>
    
    <div class="form-group col-md-2">
      <label for="number_of_child">Number of child</label>
      <input type="text" class="form-control" id="number_of_child" name="number_of_child">
    </div>
	
	<div class="form-group col-md-2">
      <label for="child_age">Child age</label>
      <select id="child_age" name="child_age" class="form-control">
        <option selected>Below 5</option>
        <option>Below 12</option>
      </select>
	  <br/>
	  <button type="submit" class="btn btn-primary">Submit Enquiry</button>
    </div>
	
  </div>
  
</form>
            <!--Form with header-->

        <!--</div>-->
        <!--Grid column-->

        <!--Grid column-->
        
        </div>
		<div class="col-lg-12 col-md-12" style="margin-top:55px;">
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                    <p>Akruti Trade Centre,<br> Rd Number 7, Kondivita, Andheri East, <br/>Mumbai, Maharashtra 400069</p>
                    
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p>+91 8424057936, 
					<br/>+91 9833085709
					<br> Mon - Fri, 10:00-07:00
					</p>
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <p>mdwtourism@gmail.com</p>
                </div>
            </div>

        </div>
		
		
    </div>
</div>



<?php $this->load->view('frontendfooter');?>