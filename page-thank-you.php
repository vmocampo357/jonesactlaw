<?php

/*



Template Name: Thank You



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

	<div class="thankyou-heading"><?php if (is_page(6118)) { ?>Congratulations!<?php } else { ?>Free Download Library<?php } ?></div>

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
<?php if (!is_page(6118)) { ?>
    <!--Bredcrums Start-->

	<?php 

  	if ( function_exists('yoast_breadcrumb') ) {

   		yoast_breadcrumb('<div id="breadcrums">','</div>');

  	}

	?> 

<!--Bredcrums End-->  

<?php } ?>   

    <!--Upcoming Webinars-->

    <div class="section">

      <div class="info_wraper">

        

        <div class="col-8">

          <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

       <h4><?php the_title(); ?></h4>

          <div class="abouttext"> <?php the_content(); ?></div>
		<?php if(get_field('download_now_link') != ''): ?>
          <div class="download-btn"><a href="<?php the_field('download_now_link'); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/01/download-btn.png" /></a></div>
        <?php endif; ?>

        </div>

        <div class="col-4">

          <div class="thankyou-image"><?php the_post_thumbnail(); ?></div>

        </div>

        <?php  endwhile; endif; ?>

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