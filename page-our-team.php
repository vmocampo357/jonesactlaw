<?php



/*







Template Name: Our Team







*/



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



                 <?php if( have_posts() ): while( have_posts() ): the_post(); ?>



                	<div class="team_wraper">                   



                	<?php the_content(); ?>



                    </div>



                  <?php  endwhile; endif; ?> 



                </div>



                



                <div class="col-4">



                	<div id="form_wrap" class="greybg";>



                    	<div class="border"></div>



                        <div class="icon"><img src="<?php bloginfo('template_url');?>/accests/images/team-image.png"></div>



                        <div class="form_wrap">





                        <?php the_field('learn_more_box'); ?>



                         

			<div id="social-media-icons">



                         <?php the_field('social_media_icons'); ?>



						</div>







                        <div class="form-row learn-more-contact"><a href="http://dev.esidev1.info/lawfirm/emarkitinc/jonesactlaw/contact-us/" class="btn">Contact Us Now</a></div>



                        



                        </div>



                    </div>



                </div>



                <div class="clear"></div>



            </div>            



            <!--On Demand Webinars-->



            <div class="attorneys-wrap">           



			<div class="freebook-heading">Our Attorneys</div>



            <ul class="freebooksList"> 



            <?php $attorney = new WP_Query("post_type=attorneys&posts_per_page=4&cat=129&orderby=date&order=asc"); ?>



			 <?php if($attorney->have_posts()) : ?>



                <?php while($attorney->have_posts()): $attorney->the_post(); ?>           



                	<li class="col-3">



                    	<div class="innerbook">



                    	<div class="imageBox"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>



                        <div class="bookcontetn2">



                        <a href="<?php the_permalink(); ?>" class="booktitle"><?php the_title(); ?></a>                        



                        </div>



                        <a href="<?php the_permalink(); ?>" class="downbtn">VIEW PROFILE</a>



                        </div>



                    </li>                    



					<?php endwhile; endif; ?>



                    <?php wp_reset_query(); ?>



                    <div class="clear"></div>



                </ul>



                



            <div class="attorneys-heading">Our Staff</div>          



            <ul class="team-list">



            <?php if( have_rows('staff_detail') ): while ( have_rows('staff_detail') ) : the_row(); ?> 



            <li>



            <div class="col-3">



            <div class="innerbook">



                    	<div class="imageBox">

							<?php if( get_sub_field('picture') ): ?> 

                        		<img src="<?php the_sub_field('picture'); ?>" />

                        	<?php endif; ?>                        

                        </div>



                        <div class="bookcontetn2">



                        <span class="booktitle"><?php the_sub_field('name'); ?></span>                        



                        </div>



                        <div class="designation"><?php the_sub_field('designation'); ?></div>                        



                        </div>



            </div>



           <div class="col-9">



            <p><?php the_sub_field('description'); ?></p>



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



      <?php the_field('contact_wrap'); ?>



      <div class="clear"></div>



    </div>



  </div>



  </div>



    <!--Concerns About--> 



  



  <!--Footer-->



  <?php get_footer(); ?>



  <!--Footer End-->



 </div>