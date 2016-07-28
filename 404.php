

<?php

		get_header('pages');

?>




<div class="innerpage_tile">
  <div class="cont"><h3>Page Not Found.</h3></div>
</div>
<?php if( 1 == $webnus_options->webnus_enable_breadcrumbs() ) { ?>

      <div class="breadcrumbs-w"><div class="container"><?php if('webnus_breadcrumbs') webnus_breadcrumbs(); ?></div></div>

<?php } ?>


<section id="main-content" class="container">

<!-- Start Page Content -->

<?php

if( ('left' == $sidebar_pos) || ('both' == $sidebar_pos ) ) get_sidebar('left');

if( $have_sidebar ) {

?>

<section class="<?php  echo('both' == $sidebar_pos )?'col-md-4 alpha omega':'col-md-8 omega'; ?>">

	<article>

<?php 

}

	?>
    <div class="row-wrapper-x info_wraper ">

		  <p>&nbsp;</p><h4>Requested page not found.</h4><p>&nbsp;</p><p>&nbsp;</p>

	</div> <?php


		  if( $have_sidebar ) {

?>

	</article>

</section>	







<?php

}

/*

	RIGHT SIDEBAR

*/



if( ('right' == $sidebar_pos) || ('both' == $sidebar_pos) ) get_sidebar('right');



?>



</section>

<?php get_footer(); ?>