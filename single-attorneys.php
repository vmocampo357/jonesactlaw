<?php

/******************/



/**  Single Post



/******************/

?>

<!--Header Start-->

<?php

get_header('pages');

?>

<!--Header End--> 

<!--Inner Page Title-->

    <div class="thankyou-wrap">

    	<div class="cont">

        <div class="col-3">

        <div class="thankyou-heading">Our Team</div>

        </div>        

        <div class="col-9">

        <div class="result-image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/01/blog-title-image.png"></div>

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

            

            <div class="attorneys-wrap">                                                

            <ul class="team-list">

            <?php if( have_posts() ): while( have_posts() ): the_post(); ?> 

            <div class="attorneys-heading"><?php the_title(); ?></div>

            <li>

            <div class="col-3">

            <div class="innerbook">

                    	<div class="imageBox"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>

                        <div class="bookcontetn2">

                        <a href="<?php the_permalink(); ?>" class="booktitle"><?php the_field('attorney_designation'); ?></a>                        

                        </div>

                        <div class="address"><?php the_field('address'); ?></div>                       

                        </div>

            </div>

           <div class="col-9">

            <p><?php the_content(); ?></p>

            </div>

            <div class="clear"></div>

            </li>

            <?php endwhile; endif; ?> 

            <?php wp_reset_query(); ?>                      

            </ul>

            

            <ul class="team-list">

            <?php if( have_rows('additional_detail') ): while ( have_rows('additional_detail') ) : the_row(); ?> 

            <li>

            <div class="col-3">

            <div class="innerbook_attorney">

                    	<div class="imageBox"></div>

                        <div class="bookcontetn2"></div>

                        <div class="designation"><?php the_sub_field('title'); ?></div>                        

            </div>

            </div>

           <div class="col-9">

            <p><?php the_sub_field('detail'); ?></p>

            </div>

            <div class="clear"></div>

            </li>

            <?php endwhile; endif; ?>                       

            </ul>

                       

            </div>

        </div>

    </div>

    <!--Page Content End-->

    

    <!--Concerns About-->

    <div id="concern_wrap">

  <div class="cont">

    <div class="concern">

      <div class="concern-heading">Our Team Can Get You The Compensation You Deserve</div>

<div class="heading">If you're ready to let go of the burden of figuring all this out, we're happy to take over from here.<br>

Give us a call today: <span>(866) 703-2520</span>.

<p></p>

<div class="concern-btn"><a href="<?php echo site_url(); ?>/contact-us/">CONTACT US NOW</a></div>

</div>

      <div class="clear"></div>

    </div>

  </div>

  </div>

    <!--Concerns About--> 

  

  <!--Footer-->

  <?php get_footer(); ?>

  <!--Footer End-->

 </div>