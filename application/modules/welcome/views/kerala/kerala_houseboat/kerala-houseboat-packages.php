<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<style>
#box {
  /* width: 300px; */
  height: 200px;
  /* box-shadow: inset 1px 1px 40px 0 rgba(0, 0, 0, 0.45); */
  border-bottom: 2px solid #fff;
  border-right: 2px solid #fff;
  margin: 5% auto 0 auto;
  background: url(http://ianfarb.com/wp-content/uploads/2013/10/nicholas-hodag.jpg);
  background-size: cover;
  border-radius: 5px;
  overflow: hidden;
}

#overlay { 
  background: rgba(0, 0, 0, 0.75);
  text-align: center;
  padding: 15px 0 66px 0;
  opacity: 0.6;
  -webkit-transition: opacity 0.25s ease;
  -moz-transition: opacity 0.25s ease;
  height:200px;
  cursor:pointer;
}

#box:hover #overlay {
  opacity: 0.4;
  font-weight:1000;
}

#plus {
  font-family: Helvetica;
  font-weight: 850;
  color: rgba(255, 255, 255, 0.85);
}


#box:hover #plus h4{
  color:#fed300 !important;
  background:#000;
}


#box:hover #plus span{
  color:#ffffff !important;
}

</style>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('frontendheader');?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="col-md-12">
					<div id="wrapper" class="wrapper bgded overlay">
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider"> 
		<img src="<?php echo base_url();?>media/images/subpages/vinaya-tours-kerala4.jpg?25112017"  alt="" />
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
					<h2>Kerala Houseboat</h2>
				</div>
			</div>
    <div class="well well-sm" style='display:none;'>
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
	
    <div id="products" class="row list-group col-md-12 col-xs-12 col-lg-12 col-sm-12" >
	<div style="display:none;" class='col-xs-12 col-lg-3 col-md-3 sidebar other_package_details'>
	<h3>Check Backwater Resort Packages</h3>
		<div class="textwidget">
			<img class="group list-group-image" src="<?php echo base_url();?>media/images/subpages/Kerala 358x358 1.jpg" alt="" />
		</div>
		<div class="other_packages_info">
		<h4>Rs.19,000(for couple) starting</h4>
		<ul>
		<li>5 Night 6 Days</li>
		<li>Visit Munnar, Thekkedy</li>
		</ul>
		</div>
      </div>	
        <div class="item  col-xs-12 col-sm-12 col-lg-4 col-md-4">
		<div id="box" style="background:url('<?php echo base_url();?>media/images/houseboat_package_1.jpg');">
			  <div class="caption caption_detail" id="overlay">
				<a class="anchor_overlay" href="<?php echo site_url('kerala-houseboat-1'); ?>"><div id="plus">
				<span style="display:none;" class="group inner opacity-package-detail-text">
									Kochi - Munnar (2N) - Alleppey (1N) - Kochi</span>
				<h4 class="group inner list-group-item-heading">
								   Kerala - 3 Night 4 Days</h4>
			  </div></a>
			  </div>
		</div>
        </div>
        <div class="item  col-xs-12 col-sm-12 col-lg-4 col-md-4">
		<div id="box" style="background:url('<?php echo base_url();?>media/images/houseboat_package_2.jpg');">
			  <div class="caption caption_detail" id="overlay">
				<a class="anchor_overlay" href="<?php echo site_url('kerala-houseboat-2'); ?>">
				<div id="plus">
				<span style="display:none;" class="group inner opacity-package-detail-text">
									Kochi - Munnar (2N)-Thekkady (1N) -Alleppey (1N) - Kochi</span>
				<h4 class="group inner list-group-item-heading">
								   Kerala - 4 Night 5 Days</h4>
				</div></a>
			  </div>
		</div>
        </div>
		<div class="item col-xs-12 col-sm-12 col-lg-4 col-md-4">
		<div id="box" style="background:url('<?php echo base_url();?>media/images/houseboat_package_3.jpg');">
			  <div class="caption caption_detail" id="overlay">
				<a class="anchor_overlay" href="<?php echo site_url('kerala-houseboat-3'); ?>">
				<div id="plus">
				<span style="display:none;" class="group inner opacity-package-detail-text">
									Kochi - Munnar (2N) - Thekkady (1N) - Alleppey (1N) - Kochi (1N)</span>
				<h4 class="group inner list-group-item-heading">
								   Kerala - 5 Night 6 Days</h4>
			</div></a>
			  </div>
		</div>
        </div>
       
       
        <div class="item  col-xs-12 col-sm-12 col-lg-4 col-md-4">
		<div id="box" style="background:url('<?php echo base_url();?>media/images/houseboat_package_5.jpg');">
			  <div class="caption caption_detail" id="overlay">
				<a class="anchor_overlay" href="<?php echo site_url('kerala-houseboat-4'); ?>"><div id="plus">
				<span style="display:none;" class="group inner opacity-package-detail-text">
									Kochi - Munnar (2N)-Thekkady (1N) -Alleppey (1N) - Kovalam (2N)</span>
				<h4 class="group inner list-group-item-heading">
								   Kerala - 6 Night 7 Days</h4>
								</div></a>
			  </div>
		</div>
        </div>
        <div class="item  col-xs-12 col-sm-12 col-lg-4"  style="display:none;">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Chandigarh Manali</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                6 Night 7 Days</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('frontendfooter');?>