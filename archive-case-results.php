<?php 

/**

 * Template Name: Case Result

 */

get_header('pages'); ?>



   <!--Inner Page Title-->

    <div class="thankyou-wrap">

    	<div class="cont">

        <div class="col-3 custom-width">

        <div class="thankyou-heading">Client Victories</div>

        </div>

        

        <div class="col-9">

        <div class="result-image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/01/result-image.png"></div>

        </div>

        <div class="clear"></div>

        </div>

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

            <div class="section bodypara">

            	<div class="col-8">

                	<div class="info_wraper">

                    <?php  
					$r = new WP_Query( array(

                           'p' => 5998,

                           'post_status' => 'publish',

                        ) );
					if($r -> have_posts()):

					while( $r->have_posts() ): $r->the_post();

						?><h4><?php the_title();?></h4>

                        <p><?php the_content(); ?></p>

				   <?php

                	endwhile;

					endif;

					?>

                	</div>                    

                </div>

                

                <div class="col-4">

                	<div id="form_wrap">

                    	<div class="border"></div>

                     <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/testimonial-icon.png" /></div>

                        <div id="testimonial_wrap">                        

                        	<div id="owl-demo" class="owl-carousel owl-theme">

						 <?php

                        $r = new WP_Query( array(

                           'posts_per_page' => 3,

                           'no_found_rows' => true, /*suppress found row count*/

                           'post_status' => 'publish',

                           'post_type' => 'case-results',

                           'ignore_sticky_posts' => true,

                           'orderby' => 'post_date',

                           'order' => 'DESC',

                        ) );

                        if ($r->have_posts()) :

                        while ( $r->have_posts() ) : $r->the_post(); ?>

                              <div class="item">

                              <p><?php echo get_the_excerpt();  ?></p>

                            <a href="<?php the_permalink(); ?>" class="more">Read More</a></div>

                        <?php endwhile;

						wp_reset_postdata();

                        endif; ?>

                        </div>                        	

                        </div>                                              

                    </div>

                </div>

                <div class="clear"></div>

            </div>

            

            <!--On Demand Webinars-->

            <div class="section">           

			<div class="sort_head">SORT RESULT BY INJURY TYPE</div>

            

            <div class="result">

            <ul class="nav">

            	<li class="col-2"><a href="http://dev.esidev1.info/lawfirm/emarkitinc/jonesactlaw/category/back-injuries/"><img src="<?php echo get_template_directory_uri(); ?>/images/injury-image.png"><span>BACK INJURIES</span></a></li>

                <li class="col-3"><a href="http://dev.esidev1.info/lawfirm/emarkitinc/jonesactlaw/category/neck-and-shoulder-injuries/"><img src="<?php echo get_template_directory_uri(); ?>/images/injury-image2.png"><span>Neck & Shoulder INJURIES</span></a></li>

                <li class="col-3"><a href="http://dev.esidev1.info/lawfirm/emarkitinc/jonesactlaw/category/leg-and-foot-injuries/"><img src="<?php echo get_template_directory_uri(); ?>/images/injury-image3.png"><span>LEG & FOOT INJURIES</span></a></li>

                <li class="col-2"><a href="http://dev.esidev1.info/lawfirm/emarkitinc/jonesactlaw/category/brain-injury/"><img src="<?php echo get_template_directory_uri(); ?>/images/injury-image4.png"><span>BRAIN INJURY</span></a></li>

                <li class="col-2"><a href="http://dev.esidev1.info/lawfirm/emarkitinc/jonesactlaw/category/other-injuries/"><img src="<?php echo get_template_directory_uri(); ?>/images/injury-image5.png"><span>OTHER INJURIES</span></a></li>

                

            </ul>

            <div class="clear"></div>

            </div>

            

            <div id="tab_content">

            <?php
			
			echo do_shortcode('[ajax_load_more post_type="case-results" posts_per_page="9" max_pages="0" button_label="View More Results" scroll="false"]');

			/*$r = new WP_Query( array(

			   'posts_per_page' => 9,

			   'no_found_rows' => true, //suppress found row count

			   'post_status' => 'publish',

			   'post_type' => 'case-results',

			   'ignore_sticky_posts' => true,

			   'orderby' => 'post_date',

    		   'order' => 'DESC',

			) );

if ($r->have_posts()) :

while ( $r->have_posts() ) : $r->the_post(); ?>

   <div class="col-4">

        <div class="webint">

            <div class="titile-head"><a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></div>

            <div class="text">RESULT: <strong><?php echo get_field("result"); ?></strong></div>

            <div class="text">CATEGORY: <a href="#"><?php the_category(); ?></a></div>

            <a href="<?php the_permalink(); ?>" class="more">READ MORE</a>

        </div>                   

   </div>

<?php endwhile; ?>

<?php

// Reset the global $the_post as this query will have stomped on it

wp_reset_postdata();

endif;*/ ?>

		<div class="clear"></div>                               

            </div>           

            </div>

        </div>

    </div>

    <!--Page Content End-->

    

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
            <div class="clear"></div>
    	</div>
  	</div>

    <!--Concerns About-->



<?php get_footer(); ?>



<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>



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