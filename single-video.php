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

        <div class="thankyou-heading">Maritime Law Videos</div>

        </div>        

        <div class="col-9">

        <div class="result-image"><img src="<?php bloginfo('template_url');?>/accests/images/blog-title-image.png"></div>

        </div>

        <div class="clear"></div>

        </div>

    </div>

    </div>

</section>

<?php //} ?>

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