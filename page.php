<?php
		get_header('pages');

?>



<!-- get_header(); end -->
<?php if(is_page(3391)){ ?>
<div class="innerpage_tile">
  <div class="cont"><h3>Maritime Video Library</h3></div>
</div>
<?php }else{ ?>
<section id="headline" style="<?php
/// To change the title bar background color

if(!empty($titlebar_bg)) echo ' background-color:'.$titlebar_bg.';'; 

/// To change the title bar text color 
 ?>">
    <div class="container">
      <h3 style="<?php /* TEXT COLOR OF TITLE */ if(!empty($titlebar_fg)) echo ' color:'.$titlebar_fg.';'; if(!empty($titlebar_fs)) echo ' font-size:'.$titlebar_fs.';';  ?>"><?php the_title(); ?></h3>
    </div>
</section>
<?php } ?>
<?php if( 1 == $webnus_options->webnus_enable_breadcrumbs() ) { ?>

      <div class="breadcrumbs-w"><div class="container"><?php if('webnus_breadcrumbs') webnus_breadcrumbs(); ?></div></div>

<?php } ?>

<?php if(is_page(3366)){ ?>

	<section id="headline">

    <!--Inner Page Title-->

    <div class="thankyou-wrap">

    	<div class="cont">

        <div class="col-3">

        <div class="thankyou-heading">Contact Us For A Free Case Review</div>

        </div>

        

        <div class="col-9">

        <div class="result-image"><img src="<?php bloginfo('template_url');?>/accests/images/blog-title-image.png"></div>

        </div>

        <div class="clear"></div>

        </div>

    </div>

      

    </div>

</section>

<section id="headline">

<div class="container">

<?php 

  if ( function_exists('yoast_breadcrumb') ) {

   yoast_breadcrumb('<div id="breadcrums">','</div>');

  }

?>

    <!--Bredcrums End-->

</div>

</section>

<?php } ?>



<section id="main-content" class="container">

<!-- Start Page Content -->

<?php

/*

	LEFT SIDEBAR

*/



if( ('left' == $sidebar_pos) || ('both' == $sidebar_pos ) ) get_sidebar('left');

if( $have_sidebar ) {

?>

<section class="<?php  echo('both' == $sidebar_pos )?'col-md-4 alpha omega':'col-md-8 omega'; ?>">

	<article>

	

<?php 

}

	

	echo '<div class="row-wrapper-x info_wraper ">';

		  if( have_posts() ): while( have_posts() ): the_post();

			the_content();

		  endwhile;

		  endif;

	echo '</div>';

// wp_link_pages();

// if ( comments_open() )

// comments_template(); 





		  if( $have_sidebar ) {

?>

	</article>

</section>	







<?php

}

/*

	RIGHT SIDEBAR

*/



if( ('right' == $sidebar_pos) || ('both' == $sidebar_pos) ) get_sidebar('right');



?>



</section>


<?php if (is_page (3401)) { ?>

<div id="concern_wrap">

    	<div class="cont">

        	<div class="col-6">

            	<img src="<?php echo get_template_directory_uri(); ?>/images/tragedy-book.png" alt="" />

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

<?php } ?>



<?php get_footer(); ?>

<?php if(is_page(3391)){ ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
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
<?php } ?>

<?php if (is_page(3366)) { ?>
<script>

jQuery(document).ready(function(e) {

  jQuery('.contactWrap p iframe').addClass(' scrolloff'); // set the pointer events to none on doc ready

      jQuery('.contactWrap .col-6 p').on('click', function () {

      jQuery('.contactWrap p iframe').removeClass('scrolloff'); // set the pointer events true on click

  });

 // you want to disable pointer events when the mouse leave the canvas area;

 jQuery(".contactWrap .col-6 p").mouseleave(function () {

    jQuery('.contactWrap p iframe').addClass(' scrolloff'); // set the pointer events to none when mouse leaves the map area

 });

});

</script> 
<?php } ?>