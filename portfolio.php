<?php

/*

Template Name: Portfolio

*/


get_header('pages');

GLOBAL $webnus_options;
ob_start();
$global_terms_array = array();
?>
<section class="latest-works <?php echo 'col'. $webnus_options->webnus_portfolio_columns(). '-w '; echo $webnus_options->webnus_portfolio_space() ?>">   	
<hr class="vertical-space1">
<div class="icon-top-title aligncenter">
<?php
if(have_posts()):
	while(have_posts()):
		the_post();
		the_content();
	endwhile;
endif;
wp_reset_query();
?>
<?php 
if( 1 == $webnus_options->webnus_portfolio_isotope_enable() ){

?>
<nav class="primary clearfix">
<div class="portfolioFilters">
<a href="#" class="selected" data-filter="*">All</a>
{term_filter}


</div>	
</nav>
<?php } ?>

</div>
<hr class="vertical-space2">
<div class="portfolio  <?php echo $webnus_options->webnus_portfolio_layout(); ?>">
<?php

$args = array(
	'orderby'=>'date',
	'order'=>'desc',
	'post_type'=>'portfolio',
	'nopaging ' => true,
	'posts_per_page'=>-1
	
); 
query_posts($args);

if (have_posts()) : while (have_posts()) : the_post();

//get Filter Terms
$terms = get_the_terms( get_the_ID(), 'filter' );
if(!is_array($terms)) $terms=array();
?>
<figure class="portfolio-item  <?php foreach ($terms as $term) { echo strtolower(preg_replace('/\s+/', '-', $term->slug)). ' '; } ?> ">
<div class="img-item"><?php get_the_image( array( 'meta_key' => array( 'thumbnail', 'thumbnail' ), 'size' => 'portfolio_thumb' ) ); ?>
<div class="zoomex2"><h6><?php the_title(); ?><br><small><?php echo get_the_date('d M Y');?></small></h6>
<a href="<?php $large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
$large_image = $large_image[0]; echo $large_image; ?>" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="<?php the_permalink(); ?>" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
</figure>
<?php

	$terms = get_the_terms(get_the_id(), 'filter' );
	
	
	if ($terms && ! is_wp_error($terms)) :
		
		foreach ($terms as $term) {
			
			if(!isset($global_terms_array[$term->slug]))
				$global_terms_array[$term->slug] = $term->name;
		}
		
	endif;




endwhile; endif;
?>
      <!-- end-portfolio-item-->
         

      <!-- end-portfolio-item-->
			 </div>	
</section>

<?php 

$category_str = '';
 if(count($global_terms_array) > 0)
 {
	foreach($global_terms_array as $slug=> $name)
	 $category_str .= '<a href="#" class="" data-filter=".' . strtolower(preg_replace('/\s+/', '-', $slug)) . '">' . $name . '</a>';
	
 }
 
 $output = ob_get_contents();
 
 $output = str_replace('{term_filter}', $category_str, $output);
 
 ob_end_clean();
 echo $output;
 wp_reset_query(); // Reset the Query Loop 
get_footer();

?>