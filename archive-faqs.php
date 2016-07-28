<?php 


get_header('pages'); ?>

<!--Inner Page Title-->



<div class="innerpage_tile">

  <div class="cont">

    <h3>Frequently Asked Questions </h3>

  </div>

</div>

<!--Inner Page Title Ends--> 



<!--Page Content Start-->

<div class="cont faq">

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

      <div class="col-8">

        <div class="info_wraper">

          <div id="cfaq" class="innfaq">

            <?php

				$r = new WP_Query( array(

				   'posts_per_page' => 10,

				   'no_found_rows' => true, /*suppress found row count*/

				   'post_status' => 'publish',

				   'post_type' => 'faqs',

				   'ignore_sticky_posts' => true,

				   'orderby' => 'post_date',

				   'order' => 'DESC',

				) );

          if ($r->have_posts()) :

            while ( $r->have_posts() ) : $r->the_post(); ?>

            	<div class="question">

              <h4 class=""><span class="icon2"></span><?php the_title(); ?></h4>

              <div class="answer"><?php echo get_the_excerpt();  ?>

                <div class="arrow_cont"><a href="<?php the_permalink(); ?>" class="arrow">Read More</a></div>

              </div>

            </div>

			<?php endwhile;

				wp_reset_postdata();

           endif; ?>

            

          </div>

        </div>

      </div>

      <div class="col-4">

        <div id="form_wrap">

          <div class="border"></div>

          <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/contact-icon.png" /></div>

          <div class="form_wrap">

            <div class="title">Your Question Not Listed Here?</div>

            <p>Fill out the form below to get your answer and a free review of your case.</p>

              <?php echo do_shortcode('[gravityform id=2 title=false description=false]'); ?>

            </div>

          </div>

        </div>

      </div>

      <div class="clear"></div>

    </div>

    

    <!--On Demand Webinars-->

    <div class="section">

      <div class="sort_head">SORT BY QUESTION CATEGORY</div>

      <div id="tabnav">

        <ul class="nav">

          <li class="col-2"><a href="<?php echo site_url(); ?>/category/getting-medical-treatment/">Getting Medical treatment</a></li>

          <li class="col-2"><a href="<?php echo site_url(); ?>/category/paying-your-bills/">Paying Your Bills</a></li>

          <li class="col-2"><a href="<?php echo site_url(); ?>/category/getting-back-to-work/">Returning to Work</a></li>

          <li class="col-2"><a href="<?php echo site_url(); ?>/category/how-your-claim-works/">How Does your Claim Work</a></li>

          <li class="col-2"><a href="<?php echo site_url(); ?>/category/maintenance-cure-claims/">MAINTENANCE & CURE</a></li>

        </ul>

        <div class="clear"></div>

      </div>

      <div id="tab_content">

       	<?php 
	   
	   		echo do_shortcode('[ajax_load_more post_type="faqs" posts_per_page="9" max_pages="0" button_label="View More Questions" scroll="false"]');

		?>

        

       <div class="clear"></div>

        

      </div>

    </div>

  </div>

</div>

<!--Page Content End--> 



<!--Concerns About-->

<div id="concern_wrap">

  <div class="cont">

    <div class="col-6" align="center"> <img src="<?php echo get_template_directory_uri(); ?>/images/calculator.png" alt="" /> </div>

    <div class="col-6">

      <h3>Rate Your Claim</h3>

      <p>Should you file suit? What's the chance of success if you do? What sort of challenges will you face if you file a claim, and can you overcome these challenges? Simply answer a few questions about your situation and we will give you our honest view of the strengths and possible weaknesses of your claim to help you decide what next steps to take.</p>

      <a href="<?php echo site_url(); ?>/your-claim-calculator/" class="goto-btn">GO TO CALCULATOR</a> </div>

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