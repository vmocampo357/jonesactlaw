<?php

get_header('pages'); ?>


<br class="clear">



    <section class="container search-results" >

	<section id="headline">



        <div class="container search_results">
    
    
    
          <h3><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h3>
    
    
    
        </div>



  	</section>

    <hr class="vertical-space2">



	



	<!-- begin-main-content -->



    <section class="col-md-12">



     <?php



	 if(have_posts()):



		while( have_posts() ): the_post();



			get_template_part('parts/blogloop','search');



		endwhile;



	 else:



		get_template_part('parts/blogloop-none');



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



    <br class="clear">



  </section>



<?php get_footer(); ?>