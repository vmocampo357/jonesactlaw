<?php
/*

Template Name: Reports

*/
?>
<!--Header Start-->
<?php
get_header('pages');
?>
<!--Header End--> 
        <!--Inner Page Title-->
    <div class="innerpage_tile">
    	<div class="cont"><h3>Free Download Library</h3></div>
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
            	<div class="col-9">
                	<div class="info_wraper">
                    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                	 <?php the_content(); ?>
                     <?php  endwhile; endif; ?>                    
                    </div>
                    
                </div>
                
                <div class="col-3">
                	<a href="#" class="getcopy"><img src="<?php echo get_template_directory_uri(); ?>/images/book-icon2.png" /> Get A <strong>HARD COPY</strong> of All of These Books Mailed To You
                    <span class="clear"></span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            
            <!--Free Books-->
            <div class="section">
            	<ul class="freebooksList">
                            <?php
			$r = new WP_Query( array(
			   'posts_per_page' => 12,
			   'no_found_rows' => true, /*suppress found row count*/
			   'post_status' => 'publish',
			   'post_type' => 'reports',
			   'ignore_sticky_posts' => true,
			   'orderby' => 'post_date',
    		   'order' => 'DESC',
			) );
				if ($r->have_posts()) :
				while ( $r->have_posts() ) : $r->the_post(); ?>
                	<li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(120,206)); } ?></div>
                        <div class="bookcontetn">
                        <a href="<?php the_permalink(); ?>" class="booktitle"><?php the_title(); ?></a>
                       	<p><?php echo get_the_excerpt();  ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="downbtn">DOWNLOAD NOW</a>
                        <a href="<?php the_permalink(); ?>" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>
       				 <?php endwhile;
						wp_reset_postdata();
                      endif; ?>                                    

                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>
    <!--Page Content End-->
    
    <!--Concerns About-->
    <div id="freebook_wrap">
    	<div class="cont">
        	<div class="col-6">
            	<div class="book_head">Get Your Free Set of Hard Copies Today</div>
				<p>Complete the form below to get the most comprehensive collection of literature about Jones Act law and Maritime injury.</p>
            	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/hardcopy-icon.png" alt="" /></div>
            </div>
            
            <div class="col-6">
                <div class="corn_form">
                	<?php echo do_shortcode('[gravityform id=3 title=false description=false tabindex=49]'); ?>
                </div>	
                
            </div>
            
            <div class="clear"></div>
        </div>
    </div>
    <!--Concerns About--> 
  
  <!--Footer-->
<?php get_footer(); ?>
  <!--Footer End-->
</div>