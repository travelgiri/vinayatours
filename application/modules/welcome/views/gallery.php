<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page_name = $this->uri->segment(1);
?>
<?php $this->load->view('frontendheader');?>
<script src="<?php echo site_url('media/js/jssor.slider.min.js');?>" type="text/javascript"></script>
<div class="col-md-12">
					<div id="wrapper" class="wrapper bgded overlay">
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider"> 
		<img src="<?php echo base_url();?>media/images/gallery_banner.jpg" alt="Vinaya Tours - Gallery" />
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
<div class="container" style="">
<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading margin_b0 animate-box subpage_heading">
					<h2>Our Tour Memories</h2>
				</div>
			</div>
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <!-- Indicators -->
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:$Jease$.$Swing,$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Rows: 2,
                $Cols: 6,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 156
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 960;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/1.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/1.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/2.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/2.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/3.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/3.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/4.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/4.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/5.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/5.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/6.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/6.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/7.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/7.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/8.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/8.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/9.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/9.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/10.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/10.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/11.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/11.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/12.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/12.jpg" />
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/13.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/13.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/14.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/14.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/15.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/15.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/16.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/16.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/17.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/17.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/18.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/18.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/19.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/19.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/20.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/20.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/21.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/21.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/22.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/22.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/23.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/23.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/24.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/24.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/25.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/25.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/26.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/26.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/27.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/27.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/28.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/28.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/29.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/29.jpg" />
            </div>
			<div>
                <img data-u="image" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/30.jpg" />
                <img data-u="thumb" src="<?php echo base_url();?>/media/images/gallery/gallery/720x480/30.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:99px;height:66px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewBox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
</div>
<br/>
<?php $this->load->view('frontendfooter');?>