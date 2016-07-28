<?php

get_header('pages');

GLOBAL $webnus_options;

?>
<style type="text/css">
#inner_wraper {
    padding: 0;
}
#tab1_content, #tab2_content, #tab3_content, #tab4_content, #tab5_content, #tab6_content { display:none; }
.info_wraper h4 { line-height:40px; }
</style>
<script type="text/javascript">
$(window).load(function(e) {
    $("#tab1_link").click(function(e) {
        $("#tab1_content").css('display','block');
		$("#tab2_content").css('display','none');
		$("#tab3_content").css('display','none');
		$("#tab4_content").css('display','none');
		$("#tab5_content").css('display','none');
		$("#tab6_content").css('display','none');
		$("#defaulttab_content").css('display','none');
		$("#tab1_link a").css('background','#3567b1');
		$("#tab2_link a").css('background','#808080');
		$("#tab3_link a").css('background','#808080');
		$("#tab4_link a").css('background','#808080');
		$("#tab5_link a").css('background','#808080');
		$("#tab6_link a").css('background','#808080');
    });
	$("#tab2_link").click(function(e) {
        $("#tab2_content").css('display','block');
		$("#tab1_content").css('display','none');
		$("#tab3_content").css('display','none');
		$("#tab4_content").css('display','none');
		$("#tab5_content").css('display','none');
		$("#tab6_content").css('display','none');
		$("#defaulttab_content").css('display','none');
		$("#tab2_link a").css('background','#3567b1');
		$("#tab1_link a").css('background','#808080');
		$("#tab3_link a").css('background','#808080');
		$("#tab4_link a").css('background','#808080');
		$("#tab5_link a").css('background','#808080');
		$("#tab6_link a").css('background','#808080');
    });
	$("#tab3_link").click(function(e) {
        $("#tab3_content").css('display','block');
		$("#tab1_content").css('display','none');
		$("#tab2_content").css('display','none');
		$("#tab4_content").css('display','none');
		$("#tab5_content").css('display','none');
		$("#tab6_content").css('display','none');
		$("#defaulttab_content").css('display','none');
		$("#tab3_link a").css('background','#3567b1');
		$("#tab1_link a").css('background','#808080');
		$("#tab2_link a").css('background','#808080');
		$("#tab4_link a").css('background','#808080');
		$("#tab5_link a").css('background','#808080');
		$("#tab6_link a").css('background','#808080');
    });
	$("#tab4_link").click(function(e) {
        $("#tab4_content").css('display','block');
		$("#tab1_content").css('display','none');
		$("#tab2_content").css('display','none');
		$("#tab3_content").css('display','none');
		$("#tab5_content").css('display','none');
		$("#tab6_content").css('display','none');
		$("#defaulttab_content").css('display','none');
		$("#tab4_link a").css('background','#3567b1');
		$("#tab1_link a").css('background','#808080');
		$("#tab2_link a").css('background','#808080');
		$("#tab3_link a").css('background','#808080');
		$("#tab5_link a").css('background','#808080');
		$("#tab6_link a").css('background','#808080');
    });
	$("#tab5_link").click(function(e) {
        $("#tab5_content").css('display','block');
		$("#tab1_content").css('display','none');
		$("#tab2_content").css('display','none');
		$("#tab3_content").css('display','none');
		$("#tab4_content").css('display','none');
		$("#tab6_content").css('display','none');
		$("#defaulttab_content").css('display','none');
		$("#tab5_link a").css('background','#3567b1');
		$("#tab1_link a").css('background','#808080');
		$("#tab2_link a").css('background','#808080');
		$("#tab3_link a").css('background','#808080');
		$("#tab4_link a").css('background','#808080');
		$("#tab6_link a").css('background','#808080');
    });
	$("#tab6_link").click(function(e) {
        $("#tab6_content").css('display','block');
		$("#tab1_content").css('display','none');
		$("#tab2_content").css('display','none');
		$("#tab3_content").css('display','none');
		$("#tab4_content").css('display','none');
		$("#tab5_content").css('display','none');
		$("#defaulttab_content").css('display','none');
		$("#tab6_link a").css('background','#3567b1');
		$("#tab1_link a").css('background','#808080');
		$("#tab2_link a").css('background','#808080');
		$("#tab3_link a").css('background','#808080');
		$("#tab4_link a").css('background','#808080');
		$("#tab5_link a").css('background','#808080');
    });
});
</script>
<div class="innerpage_tile">
  <div class="cont"><h3>Library</h3></div>
</div>




<section id="main-content" class="container">

<!-- Start Page Content -->

<div class="row-wrapper-x info_wraper ">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<div class="cont">
<div id="inner_wraper">
<?php 

if ( function_exists('yoast_breadcrumb') ) {

    yoast_breadcrumb('<div id="breadcrums">','</div>');

}

?>
</div>
</div>

		</div>
	</div>
<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<div class="cont">
<div id="inner_wraper">
<div class="section">
<div class="col-8">
<div class="info_wraper">
<h4>Research Your Case and Get Answers With Our Informational Articles</h4>
<p>Check out our Maritime Article Library, packed with information and features covering critical topics related to maritime personal injuries and protecting your future after an injury.</p>
<p>Have a question about a certain legal issue and would like more information? Call us at 504-680-4100 or Live Chat with us to schedule your complimentary claim evaluation today. You can also visit our Resource Center to immediately download books and other helpful materials..</p>
</div>
</div>
<div class="col-4">
<div id="form_wrap">
<div class="border"></div>
<div class="icon"><img src="http://www.jonesactlaw.com/wp-content/uploads/2015/10/testimonial-icon.png" alt="" /></div>
<div id="testimonial_wrap">
<div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
<div class="item">
<p>&#8220;After the initial visit that I had with The Young Firm, with Timothy Young, I felt better. I felt more at ease, and I just felt in my heart that I had picked the right company to represent me. [But] in the beginning, I did fear about certain companies not wanting to hire me because of my back injury.&#8221;</p>
<p><a class="more" href="http://www.jonesactlaw.com/testimonials/johnson/">Read More</a></p>
</div>
<div class="item">
<p>&#8220;We are Jim and Jane and we are clients of Tim Young. Tim took our case when nobody else would and has worked tirelessly, along with his assistant Lise, to acquire a fair settlement for us. I am happy to say we reached a settlement this past October and are quite pleased.&#8221;</p>
<p><a class="more" href="http://www.jonesactlaw.com/testimonials/jim-and-jane/">Read More</a></p>
</div>
<div class="item">
<p>&#8220;I never thought I would be put in a situation like this. That’s all I wanted to do was get myself better so I can get back to work. At this point in time it wasn’t happening. I was only getting worse instead of better. I didn’t want to ever be in a lawyer’s office, and I never thought that I would have to ever..&#8221;</p>
<p><a class="more" href="http://www.jonesactlaw.com/testimonials/jimmy/">Read More</a></p>
</div>
<div class="item">
<p>&#8220;After my injury, I researched different attorneys online, but wasn&#8217;t sure who to hire. Then I came across Tim of The Young Firm. He offered tons of free, helpful info which also included what to look for when hiring a maritime attorney.&#8221;</p>
<p><a class="more" href="http://www.jonesactlaw.com/testimonials/drilling-rig-injury-made-me-stressed-and-nearly-homeless/">Read More</a></p>
</div>
</div>
</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
</div>

		</div>
	</div>
</div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<div class="cont">
<div id="inner_wraper">
<p><!--On Demand Webinars--></p>
<div class="section">
<div class="sort_head">SORT ARTICLES BY CLAIM TYPE</div>
<div id="tabnav">
<ul class="nav">
<li class="col-2" id="tab1_link"><a href="javascript:void(0)">Read These First</a></li>
<li class="col-2" id="tab2_link"><a href="javascript:void(0)">Getting Medical Treatment</a></li>
<li class="col-2" id="tab3_link"><a href="javascript:void(0)">Paying Your Bills</a></li>
<li class="col-2" id="tab4_link"><a href="javascript:void(0)">Returning To Work</a></li>
<li class="col-2" id="tab5_link"><a href="javascript:void(0)">Understanding Your Claim</a></li>
<li class="col-2" id="tab6_link"><a href="javascript:void(0)">Other Helpful Articles</a></li>
</ul>
<div class="clear"></div>
</div>
<div id="tab_content">
<div id="defaulttab_content">
<?php
echo do_shortcode('[ajax_load_more post_type="library" posts_per_page="9" max_pages="0" button_label="View More Articles" scroll="false"]');
?>
</div>
<div id="tab1_content">
<?php
	echo do_shortcode('[ajax_load_more post_type="library" posts_per_page="9" max_pages="0" category="read-these-first" button_label="View More Articles" scroll="false"]');
?>
</div>
<div id="tab2_content">
<?php
	echo do_shortcode('[ajax_load_more post_type="library" posts_per_page="9" max_pages="0" category="getting-medical-treatment" button_label="View More Articles" scroll="false"]');
?>
</div>
<div id="tab3_content">
<?php
	echo do_shortcode('[ajax_load_more post_type="library" posts_per_page="9" max_pages="0" category="paying-your-bills" button_label="View More Articles" scroll="false"]');
?>
</div>
<div id="tab4_content">
<?php
	echo do_shortcode('[ajax_load_more post_type="library" posts_per_page="9" max_pages="0" category="returning-to-work" button_label="View More Articles" scroll="false"]');
?>
</div>
<div id="tab5_content">
<?php
	echo do_shortcode('[ajax_load_more post_type="library" posts_per_page="9" max_pages="0" category="understanding-your-claim" button_label="View More Articles" scroll="false"]');
?>
</div>
<div id="tab6_content">
<?php
	echo do_shortcode('[ajax_load_more post_type="library" posts_per_page="9" max_pages="0" category="other-helpful-articles" button_label="View More Articles" scroll="false"]');
?>
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>

		</div>
	</div>
</div></div></div>
</div>
</section>
<div class="clear"></div>
<div id="concern_wrap">
    	<div class="cont">
           <div class="col-6">
           		<?php $blue_footer_fields_left_image	=	get_field('blue_footer_fields_left_image', 'option'); ?>
            	<img src="<?php echo $blue_footer_fields_left_image['url']; ?>" alt="<?php echo $blue_footer_fields_left_image['alt']; ?>">
           </div>
           <div class="col-6">
				<div class="textwidget">
                	 <?php echo get_field('blue_footer_fields_right_content', 'option'); ?>
               	</div>
            	<a href="<?php echo get_field('blue_footer_fields_button_link', 'option'); ?>" class="send-btn">Send Me My Free Copy</a>                
			</div>
    	</div>
        <div class="clear"></div>
  	</div>
</section>

<?php 



  get_footer();



  ?>
  <script src="http://www.jonesactlaw.com/wp-content/themes/brazil-wp/js/jquery-1.9.1.min.js"></script>
<script src="http://www.jonesactlaw.com/wp-content/themes/brazil-wp/js/owl.carousel.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({ 
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
  });
 
});
  </script>