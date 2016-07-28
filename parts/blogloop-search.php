<article id="post-<?php the_ID(); ?>" class="blog-post"> 


<?php





global $webnus_options;





?>


	<?php if( 1 == $webnus_options->webnus_blog_meta_date_enable() ) { ?>



	<?php } ?>


	<div class="col-md-10 omega">


	  <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>


	 <p>


	  <?php 


		echo get_the_excerpt();


	  ?>


	  </p>


	  </div>


	<hr class="vertical-space1">


</article>