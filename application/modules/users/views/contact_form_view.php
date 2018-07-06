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
<div class="row" style="display:none;">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading margin_b0 animate-box subpage_heading">
					<h2>Contact Us</h2>
				</div>
			</div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php //$attributes = array("class" => "form-horizontal", "name" => "contactform");
           // echo form_open("contact_us/contactform/index", $attributes);?>
		   <form action="<?php echo site_url('users/users/index');?>" method="post">
            <fieldset>
            <legend>Contact Form</legend>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="name" class="control-label">Name</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="email" class="control-label">Email ID</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="email" placeholder="Your Email ID" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="subject" class="control-label">Subject</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="subject" placeholder="Your Subject" type="text" value="<?php echo set_value('subject'); ?>" />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="message" class="control-label">Message</label>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Your Message"><?php echo set_value('message'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                </div>
            </div>
            </fieldset>
			</form>
            <?php // echo form_close(); ?>
            <?php //echo $this->session->flashdata('msg'); ?>
        </div>
		
		<div class="col-md-12">
			<div class='contact_address_wrapper'>
			<div class="visit_us_address"> 
			<span>Visit Us Here:</span><br/>
			Vinaya Tours G-5 Walia Terrace, Naik wadi, Goregaon East.
			400068 Goregaon, Maharashtra
			</div>
			<div class="contact_number">
			<span>Contact: </span><br/>
			<span class="contact_image"></span><b style="margin: 0 0 0 5px;">+91 8424057936</b><br/>
			<span class="mobile_image"></span><b style="margin: 0 0 0 5px;">+91 9833085709</b>
			</div>
			<div class="contact_number">
			<span>Email: </span><br/>
			<span class="email_image"></span><b style="margin: 0 0 0 5px;">&#109;&#100;&#119;&#116;&#111;&#117;&#114;&#105;&#115;&#109;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</b><br/>
			</div>
			</div>
			
        </div>
    </div>
</div>


<?php $this->load->view('frontendfooter');?>