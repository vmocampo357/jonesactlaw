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

        <div class="thankyou-heading">Case Results</div>

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

		<?php 

			if(  $webnus_options->webnus_blog_sinlge_featuredimage_enable() ){



		global $featured_video;

		$meta_video = $featured_video->the_meta();

		if( 'video'  == $post_format || 'audio'  == $post_format)

		{

		$pattern =



		  '\\['                              // Opening bracket



		. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]



		. "(video|audio)"                     // 2: Shortcode name



		. '(?![\\w-])'                       // Not followed by word character or hyphen



		. '('                                // 3: Unroll the loop: Inside the opening shortcode tag



		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash



		.     '(?:'



		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket



		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash



		.     ')*?'



		. ')'



		. '(?:'



		.     '(\\/)'                        // 4: Self closing tag ...



		.     '\\]'                          // ... and closing bracket



		. '|'



		.     '\\]'                          // Closing bracket



		.     '(?:'



		.         '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags



		.             '[^\\[]*+'             // Not an opening bracket



		.             '(?:'



		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag



		.                 '[^\\[]*+'         // Not an opening bracket



		.             ')*+'



		.         ')'



		.         '\\[\\/\\2\\]'             // Closing shortcode tag



		.     ')?'



		. ')'



		. '(\\]?)';  			



			preg_match('/'.$pattern.'/s', $post->post_content, $matches);



			if( (is_array($matches)) && (isset($matches[3])) && ( ($matches[2] == 'video') || ('audio'  == $post_format)) && (isset($matches[2])))



			{

				$video = $matches[0];

				echo do_shortcode($video);

				$content = preg_replace('/'.$pattern.'/s', '', $content);



			}else				



			if( (!empty( $meta_video )) && (!empty($meta_video['the_post_video'])) )



			{

				echo do_shortcode($meta_video['the_post_video']);

			}			



		}else



		if( 'gallery'  == $post_format)



		{

			$pattern =



		  '\\['                              // Opening bracket



		. '(\\[?)'                           // 1: Optional second opening bracket for escaping shortcodes: [[tag]]



		. "(gallery)"                     // 2: Shortcode name



		. '(?![\\w-])'                       // Not followed by word character or hyphen



		. '('                                // 3: Unroll the loop: Inside the opening shortcode tag



		.     '[^\\]\\/]*'                   // Not a closing bracket or forward slash



		.     '(?:'



		.         '\\/(?!\\])'               // A forward slash not followed by a closing bracket



		.         '[^\\]\\/]*'               // Not a closing bracket or forward slash



		.     ')*?'



		. ')'



		. '(?:'



		.     '(\\/)'                        // 4: Self closing tag ...



		.     '\\]'                          // ... and closing bracket



		. '|'



		.     '\\]'                          // Closing bracket



		.     '(?:'



		.         '('                        // 5: Unroll the loop: Optionally, anything between the opening and closing shortcode tags



		.             '[^\\[]*+'             // Not an opening bracket



		.             '(?:'



		.                 '\\[(?!\\/\\2\\])' // An opening bracket not followed by the closing shortcode tag



		.                 '[^\\[]*+'         // Not an opening bracket



		.             ')*+'



		.         ')'



		.         '\\[\\/\\2\\]'             // Closing shortcode tag



		.     ')?'



		. ')'



		. '(\\]?)';  			



			preg_match('/'.$pattern.'/s', $post->post_content, $matches);



			if( (is_array($matches)) && (isset($matches[3])) && ($matches[2] == 'gallery') && (isset($matches[2])))



			{

				$atts = shortcode_parse_atts($matches[3]);



				$ids = $gallery_type = '';

				if(isset($atts['ids']))

				{

					$ids = $atts['ids'];

				}

				if(isset($atts['webnus_gallery_type']))

				{

					$gallery_type = $atts['webnus_gallery_type'];

				}

					echo do_shortcode('[vc_gallery img_size= "full" type="flexslider_fade" interval="3" images="'.$ids.'" onclick="link_image" custom_links_target="_self"]');

				$content = preg_replace('/'.$pattern.'/s', '', $content);

			}

		}else

		if( (!empty( $meta_video )) && (!empty($meta_video['the_post_video'])) )

		{

			echo do_shortcode($meta_video['the_post_video']);

		}

		else

			get_the_image( array( 'meta_key' => array( 'Full', 'Full' ), 'size' => 'Full' ) ); 

		}

		?>

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

            	 /*if(1 == $webnus_options->webnus_blog_meta_author_enable()){

            	 ?>

            	 <strong><?php _e('by','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_author(); ?>

            	 <?php } ?>            	 

            	 <?php if( 1 == $webnus_options->webnus_blog_meta_author_enable() &&  (1 == $webnus_options->webnus_blog_meta_category_enable())) {



            	 ?>

            	 /

            	 <?php } ?>*/

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

    <?php

    /*if( 'none' != $webnus_options->webnus_blog_singlepost_sidebar() ) 

	if( 'right' == $webnus_options->webnus_blog_singlepost_sidebar() ){

		get_sidebar('bright');

	}*/

	?>

    <!-- end-sidebar-->



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