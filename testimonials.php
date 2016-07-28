<?php 

/**

 * Template Name: Testimonials Main

 */

get_header('pages'); ?>



    <!--Inner Page Title-->

    <div class="innerpage_tile">

    	<div class="cont"><h3>What Our Clients Say About Us</h3></div>

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

            <div class="section">

            	<div class="info_wraper">

					<?php  if(have_posts()):

                        while( have_posts() ): the_post();

                        ?>

                            <h4> <?php the_title();?> </h4>

                            <?php the_content(); ?>

                            <?php

                        endwhile;

                    endif;

                    ?>

              	</div>

                    

               

                

                

                <div class="clear"></div>

            </div>

            

        </div>

    </div>

    <!--Page Content End-->

    

    

    <!--Real Struggles-->

    <div class="struggleWrap">

        <div class="cont">

        	<div class="inttitle">Real Struggles, Real Solutions.</div>

            <p>These career offshore workers came to see us worried about their futures. Listen to how we helped them get things back on track.</p>

            

            <div class="clientVideos">

            <?php

				$r = new WP_Query( array(

				   'posts_per_page' => 3,

				   'no_found_rows' => true, /*suppress found row count*/

				   'post_status' => 'publish',

				   'post_type' => 'Testimonials',

				   'category_name'    => 'Testimonials videos',

				   'ignore_sticky_posts' => true,

				   'orderby' => 'post_date',

				   'order' => 'DESC',

				) );

          if ($r->have_posts()) :

            while ( $r->have_posts() ) : $r->the_post(); ?>

            

            <div class="col-4">

                	<div class="struggleint">

                    	<div class="videobox"><iframe width="100%" height="215" src="<?php echo get_field("testimonials_videos"); ?>" allowfullscreen=""></iframe></div>

                    	<div class="clientinfo">

                        	<div class="clientName"><?php the_title(); ?></div>

                            <div class="clientCm">OFFSHORE COOK</div>

                            <p><?php the_content(); ?></p>

                        </div>

                    </div>

                </div>

			

			<?php endwhile;

				wp_reset_postdata();

           endif; ?>

           

           <div class="clear"></div>

            </div>

            

        </div>

    </div>

    

    

    <!--Testimonials List-->

    <div class="cont">

    	<div class="testimonialList">

        	<div class="inttitle">Will You be as Satisfied as Our Clients Have Been?</div>

            

            <ul class="testiList">

            <?php

				$r = new WP_Query( array(

				   'posts_per_page' => 6,

				   'no_found_rows' => true, /*suppress found row count*/

				   'post_status' => 'publish',

				   'post_type' => 'Testimonials',

				   'category_name'    => 'testimonials',

				   'ignore_sticky_posts' => true,

				   'orderby' => 'post_date',

				   'order' => 'DESC',

				) );

		if ($r->have_posts()) :

            while ( $r->have_posts() ) : $r->the_post(); ?>

                <li class="col-6">

                	<div class="testint">

                    	<div class="testCont"><?php echo substr(get_the_content(), 0, 247); ?>.

                        <a href="<?php the_permalink(); ?>">Read More</a>

                        </div>

                        

                        <div class="aboutClient">

                            <?php the_post_thumbnail(); ?>

                            <div>Jim and Jane Pilla

                            <span>Foristell, MO</span>

                            </div>

                             <div class="clear"></div>

                        </div>

                        

                    </div>

                </li>

         <?php endwhile;

				wp_reset_postdata();

           endif; ?>

               <div class="clear"></div>

            </ul>

            

            

            <div class="btnbox"><a href="#">VIEW MORE TESTIMONIALS</a></div>

            

        </div>

    </div>

    

    <!--Concerns About-->

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

    <!--Concerns About-->



<?php get_footer(); ?>



<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

