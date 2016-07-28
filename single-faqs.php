 <?php



/******************/



/**  Single Post



/******************/

get_header('pages');

 ?>

 

 <section id="headline">

    <!--Inner Page Title-->

    <div class="thankyou-wrap">

    	<div class="cont">

        <div class="col-3">

        <div class="thankyou-heading">Maritime Law FAQs</div>

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



 <section class="container page-content" >



    <?php 



	if( 'none' != $webnus_options->webnus_blog_singlepost_sidebar() )



	if( 'left' == $webnus_options->webnus_blog_singlepost_sidebar() ){ 



		get_sidebar('bleft');

	}

	?>

	<section id="single-content" class="<?php echo ( 'none' == $webnus_options->webnus_blog_singlepost_sidebar()  )?'col-md-12':'col-md-12'?> omega ">

		<?php if( have_posts() ): while( have_posts() ): the_post();  ?>

       <div style="text-align:center">

		

        </div>

      <article class="blog-single-post">

		<?php

		GLOBAL $webnus_options;

		$post_format = get_post_format(get_the_ID());



		$content = get_the_content();

		?>

	  <?php 

		  ?>

        <div <?php post_class('post'); ?>>

        <h1><?php the_title() ?></h1>

          <div class="postmetadata">

            <h6 class="blog-author">

            	 <?php

           	 	if(1 == $webnus_options->webnus_blog_meta_category_enable()){ ?>

            	 <strong><?php _e('in','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_category(', ') ?> 

            	 <?php } ?>

            	 </h6>

          </div>

			<?php 

			if( 'quote' == $post_format  ) echo '<blockquote>';

			echo apply_filters('the_content',$content); 

			if( 'quote' == $post_format  ) echo '</blockquote>';

			?>

          <br class="clear">

			  <?php the_tags( '<div class="post-tags"><i class="fa-tags fa-rotate-90"></i>', '', '</div>' ); ?><!-- End Tags -->

			 <div class="next-prev-posts">

			 <?php $args = array(



					'before'           => '',



					'after'            => '',



					'link_before'      => '',



					'link_after'       => '',



					'next_or_number'   => 'next',



					'nextpagelink'     => '&nbsp;&nbsp; '.__('Next Page','WEBNUS_TEXT_DOMAIN'),



					'previouspagelink' => __('Previous Page','WEBNUS_TEXT_DOMAIN').'&nbsp;&nbsp;',



					'pagelink'         => '%',



					'echo'             => 1



				); 

				 wp_link_pages($args);

				?>

			 </div><!-- End next-prev post -->

         <div class="avtr_custom col-md-6">



    <div class="avtr-container">

		<div class="image">

          <img src="<?php echo site_url(); ?>/wp-content/uploads/2016/01/admin-50percent.jpg" alt="">

      	</div><!--image-->

		<div class="name">

			<p>by <a href="http://www.jonesactlaw.com/attorneys/timothy-j-young/">Timothy J. Young</a></p>

        		<p class="summary">Maritime accident attorney in New Orleans with over 20 years experience representing those injured at sea.</p>

		</div><!--/name-->

	</div><!--/container-->

	<div class="social-container">    

		<h3>Connect With Me</h3>    

		<div class="custom_socials">

			<a href="https://www.facebook.com/theyoungfirm" target="_blank"><i class="fa fa-facebook"></i></a>

			<a href="https://twitter.com/jonesactlaw" target="_blank"><i class="fa fa-twitter"></i></a>

			<a href="https://plus.google.com/106537262875348205367/posts" target="_blank"><i class="fa fa-google-plus"></i></a>

		</div><!--custom-socials-->

	</div><!--social-container-->   

</div>

    <div class="clear"></div>

        </div>

		<?php 

		  ?>

      </article>

      <?php 

       endwhile;

		 endif;

      //comments_template(); ?>

    </section>

    <!-- end-main-conten -->

    <div class="white-space"></div>

  </section>

     <!--Concerns About-->

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
  	</div>

    <!--Concerns About-->

  <?php 

  get_footer();

  ?>