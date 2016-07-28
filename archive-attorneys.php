<?php

get_header('pages');

GLOBAL $webnus_options;

?>



<section id="headline">

  <div class="container">

    <h3>

      <?php

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



				?>

    </h3>

  </div>

</section>

<section class="container" >

  <hr class="vertical-space2">

  <?php 



	if( 'left' == $webnus_options->webnus_blog_sidebar() || 'both' == $webnus_options->webnus_blog_sidebar() ): 



		get_sidebar('bleft');



	endif;



	?>

  

  <!-- begin-main-content -->

  

  <section class="col-md-12 omega">

    <?php

	$the_query = new WP_Query( array( 'post_type' => 'attorneys', 'order'=>'ASC', 'orderby'=>'date') );

 	 if($the_query -> have_posts()):



		while( $the_query -> have_posts() ): $the_query -> the_post();

			get_template_part('parts/loop','attorney');

		endwhile;



	 else:



		get_template_part('blogloop-none');



	 endif;



	



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

  


  <br class="clear">

</section>

</section>

<?php 



  get_footer();



  ?>

