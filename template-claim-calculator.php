<?php
/*

Template Name: Your Claim Calculator

*/
?>
<!--Header Start-->
<?php
get_header('pages');
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(document).ready(function() {		
	$(document).on("click", ".opener", function() {
		$(this).prev('.dialog_popup').fadeIn();
		$(".claim-calc-inner").css({'background-color': 'rgba(3, 93, 171, 0.75)'});
		$(".claim-calc-inner").css({'pointer-events': 'none'});
		$(".dialog_popup").css({'pointer-events': 'auto'});
	});	
	$(document).on("click", ".close_popup", function() {
		$(this).parent('.dialog_popup').fadeOut();
		$(".claim-calc-inner").css({'background-color': '#FFF'});
		$(".claim-calc-inner").css({'pointer-events': 'auto'});
	});	
});
</script>
<!--Header End--> 
<!--Inner Page Title-->
    <div class="thankyou-wrap">
    	<div class="cont">
        <div class="col-5">
        <div class="thankyou-heading">Rate Your Claim Calculator</div>
        </div>        
        <div class="col-7">
        <div class="result-image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/01/result-image.png"></div>
        </div>
        <div class="clear"></div>
        </div>
    </div>
    <!--Inner Page Title Ends-->
    
    <!--Page Content Start-->
    <div class="cont">
    	<div id="inner_wraper">
        	 <!--Bredcrums Start-->
			<?php 
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<div id="breadcrums">','</div>');
            }
            ?> 
    		<!--Bredcrums End-->
            <?php while(have_posts()): the_post(); ?>
				<div class="col-md-8 content-claim-calc"><?php the_content(); ?></div>
                <div class="col-md-4">
                	<img class="calc-img" src="http://dev.esidev1.info/lawfirm/emarkitinc/jonesactlaw/wp-content/uploads/2016/01/abc.jpg" alt="" style="float: right;width: 80%; margin-right:-17px;" />
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="col-md-12 claim-calc">
                	<div class="col-md-12 claim-calc-inner">
                    	<?php echo do_shortcode('[chained-quiz 1]'); ?>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
			<?php endwhile; ?>
            
        </div>
    </div>
    <!--Page Content End-->
    
   <!--Concerns About-->
    <div id="concern_wrap">
    	<div class="cont">
        	<div class="col-6">
            	<img class="tragedy-book" src="<?php echo get_template_directory_uri(); ?>/images/tragedy-book.png" alt="" />
            </div>
            
            <div class="col-6">
            	<h3>You Have Serious Concerns About Your Future.</h3>
                <p>Learn how our clients dealt with those same concerns.
                <br /><br />
                Download "From Tragedy to Triumph: A Collection of Client Success Stories."</p>
                
                <div class="corn_form">
                	<?php echo do_shortcode('[gravityform id=4 title=false description=false ]');?>
                </div>	
                
            </div>
            
            <div class="clear"></div>
        </div>
    </div>
    <!--Concerns About-->
  
  <!--Footer-->
  <?php get_footer(); ?>
  <!--Footer End-->
 </div>