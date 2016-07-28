<?php

get_header('pages');

GLOBAL $webnus_options;

?>

<section id="headline">
    <!--Inner Page Title-->
    <div class="thankyou-wrap">
    	<div class="cont">
        <div class="col-3">
        <div class="thankyou-heading">Maritime Law Blog</div>
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

<?php 

if( 1 == $webnus_options->webnus_blog_page_title_enable() )

{

?>

 <section id="headline">

    <div class="container">

      <h3><?php

					if ( is_day() ) :

						printf('<small>'. __( 'Daily Archives', 'WEBNUS_TEXT_DOMAIN' ) . ':</small> %s', get_the_date() );

					elseif ( is_month() ) :

						printf('<small>'. __( 'Monthly Archives', 'WEBNUS_TEXT_DOMAIN' ) . ':</small> %s', get_the_date( _x( 'F Y', 'monthly archives date format', 'WEBNUS_TEXT_DOMAIN' ) ) );

					elseif ( is_year() ) :

						printf('<small>'. __( 'Yearly Archives', 'WEBNUS_TEXT_DOMAIN' ) .':</small> %s', get_the_date( _x( 'Y', 'yearly archives date format', 'WEBNUS_TEXT_DOMAIN' ) ) );

						

					elseif ( is_category() ):

						printf(  '%s', single_cat_title( '', false ) );

					elseif ( is_tag() ):

						printf('<small>'. __( 'Tag', 'WEBNUS_TEXT_DOMAIN' ) .':</small> %s', single_tag_title( '', false ) );



					else :

						echo $webnus_options->webnus_blog_page_title();

					endif;

				?></h3>

    </div>

  </section>

<?php

}

?>



    <section class="container page-content" >

	<?php

	if( 'none' != $webnus_options->webnus_blog_sidebar() )

	if( 'left' == $webnus_options->webnus_blog_sidebar() || 'both' == $webnus_options->webnus_blog_sidebar() ){

		get_sidebar('bleft');

	}

	?>

	<!-- begin-main-content -->

    <section class="<?php echo ( 'both' == $webnus_options->webnus_blog_sidebar() )? 'col-md-4 alpha omega':( ('none' != $webnus_options->webnus_blog_sidebar() )?'col-md-8': 'col-md-12 omega') ?>">

     <?php

    $args = array( 'category_name' => 'featured' );

	 query_posts($args);	

	 if(have_posts()):

		while( have_posts() ): the_post();

			

			if( 'both' == $webnus_options->webnus_blog_sidebar() )

			{

				get_template_part('parts/blogloop','bothsidebar');

			}

			else{

				switch( $webnus_options->webnus_blog_template() )

				{

					case 1:

						get_template_part('parts/blogloop');

						break;

					case 2:

						get_template_part('parts/blogloop','type2');

						break;

					default:

						get_template_part('parts/blogloop');

						break;

					

					

				}

			}

		endwhile;

	 else:

		get_template_part('blogloop-none');

	 endif;

	 wp_reset_query();

	 $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

	 $idObj = get_category_by_slug('featured'); 

  	 

	 $id=array();

  	 if($idObj)

  	 $id = $idObj->term_id;

	 

	 query_posts(array('category__not_in' => array( $id ), 'paged'=>$paged));

	 

	 if(have_posts()):

		while( have_posts() ): the_post();

			

			if( 'both' == $webnus_options->webnus_blog_sidebar() )

			{

				get_template_part('parts/blogloop','bothsidebar');

			}

			else{

				switch( $webnus_options->webnus_blog_template() )

				{

					case 1:

						get_template_part('parts/blogloop');

						break;

					case 2:

						get_template_part('parts/blogloop','type2');

						break;

					default:

						get_template_part('parts/blogloop');

						break;

					

					

				}

			}

		endwhile;

	 else:

		get_template_part('blogloop-none');

	 endif;

	 wp_reset_query();

	 ?>

       

      <br class="clear">

   

	  <?php 

		if(function_exists('wp_pagenavi'))

		{

			wp_pagenavi();

		}

	  ?>

      <div class="white-space"></div>

    </section>

    <!-- end-main-content -->

	<?php 

	if( 'none' != $webnus_options->webnus_blog_sidebar() )

	if( 'right' == $webnus_options->webnus_blog_sidebar() || 'both' == $webnus_options->webnus_blog_sidebar() ){ 

		if(is_home() || is_archive('news')){
			get_sidebar('scrolling');
		}else{
			get_sidebar('bright');
		}
	}

	?>

    <br class="clear">

  </section>



  <?php 

  get_footer();

  ?>
<script>  
  $(document).ready(function() {

  $(window).scroll(function () {
    // what is the y position of the scroll?
    var y = $(window).scrollTop();    
    // whether that's below the start of article?
    if (y >= 410 && y <= 3800) {
      // if so, add the fixed class
      $('.fixed-sidebar').addClass('fixed');
    } else {
      // otherwise, remove it
      $('.fixed-sidebar').removeClass('fixed');
    }
  });
});
</script>