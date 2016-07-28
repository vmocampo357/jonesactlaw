<?php
/*

Template Name: Sign Up

*/
?>
<!--Header Start-->
<?php
get_header('pages');
?>
<!--Header End--> 

<!--Inner Page Title-->
<div class="thankyou-wrap">
  <div class="cont">
    <div class="col-5">
	<div class="thankyou-heading">Free Download Library</div>
    </div>
    <div class="col-7">
      <div class="library-image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/01/library-image.png"></div>
    </div>
  </div>
  <div class="clear"></div>
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
    <!--Upcoming Webinars-->
    <div class="section">
      <div class="info_wraper">       
        <div class="col-8">
        <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
        <h4><?php the_title(); ?></h4>
        <div class="signup-image"><?php the_post_thumbnail(); ?></div>
        <?php the_content(); ?>
		 <?php  endwhile; endif; ?>
        </div>
        <div class="col-4">
          <div id="form_wrap" class="greybg">
             <div class="border"></div>
             <div class="form_wrap">
                <?php echo do_shortcode('[gravityform id=1 title=false description=false tabindex=49]'); ?>
             </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--On Demand Webinars-->     
  </div>
</div>
<!--Page Content End-->   
<!--Footer-->
<?php get_footer(); ?>
<!--Footer End-->
</div>