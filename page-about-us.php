<?php

/*



Template Name: About Us



*/

?>

<!--Header Start-->

<?php

get_header('pages');

?>

<!--Header End--> 

<!--Inner Page Title-->

<div class="innerpage_tile">

  <div class="cont">

    <div class="col-6">

      <?php the_field('blue_bar_content'); ?>

    <div class="col-6">

      <div class="about-image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/01/about-image.png"></div>

    </div>

  </div>

  <div class="clear"></div>

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

      <?php if( have_posts() ): while( have_posts() ): the_post(); ?>             

        <div class="col-5">

          <div class="aboutimg"> <?php the_post_thumbnail( 'full' ); ?> </div>

        </div>

         <div class="col-7">

          <div class="abouttext"> <?php the_content(); ?></div>

        </div>

        <?php  endwhile; endif; ?>

      </div>

      <div class="clear"></div>

    </div>

    <!--On Demand Webinars-->    

  </div>

</div>

<!--Page Content End--> 



<!---->

<div id="freebook_wrap">

  <div class="cont">

	<?php the_field('freebook-wrap'); ?>

    <div class="clear"></div>

  </div>

</div>



<div class="cont">

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

     <div class="attorneys-heading">Our Team</div>          

         <!--IMAGE HERE-->        

       <div class="attorney-images">

         <div class="team-pic"><img src="<?php bloginfo('template_url');?>/images/JonesActTeam.jpg" /></div>

         <div class="team-btn"><a href="<?php echo get_site_url(); ?>/our-team/"><img src="<?php bloginfo('template_url');?>/images/attorneys-btn.png" /></a></div>

       </div>                  

  </div>

</div>

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