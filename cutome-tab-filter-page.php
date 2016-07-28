
<?php
/* Template Name: Filter Tab Page */

/***************************************/
/*			Globalization $woptions
/***************************************/


GLOBAL $webnus_options;

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
?><!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php
	
	/***************************************/
	/*			Title Generation Process
	/***************************************/
	if(is_plugin_active('all-in-one-seo-pack/all_in_one_seo_pack.php'))
	{
		
		wp_title( '|', true, 'right' );
			
	}elseif(is_plugin_active('wordpress-seo/wp-seo.php'))
	{
		
		wp_title( '|', true, 'right' );
		
	}else{
		
		global $page, $paged;
		
		wp_title( '|', true, 'right' );
		
		bloginfo( 'name' );
		
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page' ,WEBNUS_TEXT_DOMAIN) . ' %s', max( $paged, $page ) );
	}
		/***************************************/
	/*			End Title Generation Process
	/***************************************/
		
		
?></title>
<?php 

if(is_plugin_inactive('all-in-one-seo-pack/all_in_one_seo_pack.php') && is_plugin_inactive('wordpress-seo/wp-seo.php'))
{
?>
	<meta name="description" content="<?php
	/***************************************/
	/*			Description Meta Tag Generator
	/***************************************/
		
		
		global $page_seo_meta;
		
		$seo_meta = !empty($page_seo_meta)?$page_seo_meta->the_meta():null;

		if( !empty( $seo_meta ) && !empty( $seo_meta['webnus_seo_options'][0]['seo_desc'] ) )
		{
				
			echo($seo_meta['webnus_seo_options'][0]['seo_desc']);
			
		}else{
		
		
			if ( is_single() ) {
			
				single_post_title('', true); 
				
			} else {
			
				bloginfo('name'); echo " - "; bloginfo('description');
				
			}
			
			
		}
		
/***************************************/
/*			End Description Meta Tag Generator
/***************************************/

?>">
<meta name="keywords" content="<?php

/***************************************/
/*			Keywords Meta Tag Generator
/***************************************/

	global $page_seo_meta;
	
	$seo_meta = !empty($page_seo_meta)?$page_seo_meta->the_meta():null;
	
	if( !empty($seo_meta) && !empty($seo_meta['webnus_seo_options'][0]['seo_keyword']) )
	{
	
		echo($seo_meta['webnus_seo_options'][0]['seo_keyword']);
		
	}

/***************************************/
/*			End Keywords Meta Tag Generator
/***************************************/


?>" />
<?php } //end of all in one seo installation check ?>
<meta name="author" content="<?php 

if( !is_single() )
	echo get_bloginfo('name');
else {
	global $post;
	
	if(isset($post) && is_object($post))
	{
		
			
		$flname = get_the_author_meta('first_name',$post->post_author). ' ' . get_the_author_meta('last_name',$post->post_author);
		$flname = trim($flname);
		if (empty($flname)) 
			the_author_meta('display_name',$post->post_author);
		else 
			echo $flname;
		
	}
	
}


?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Specific Metas
  ================================================== -->
<?php

$responsive = $webnus_options->webnus_enable_responsive();

if(1 == $responsive){
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php } else { ?>
<meta name="viewport" content="width=1200,user-scalable=no">
<?php } ?>


	<!-- Modernizer
  ================================================== -->

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.11889.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.js" type="text/javascript"></script>
	<![endif]-->
		<!-- HTML5 Shiv events (end)-->
	<!-- MEGA MENU -->
 	
	
	<!-- Favicons
  ================================================== -->
<?php if($webnus_options->webnus_fav_icon()): ?>
<link rel="shortcut icon" href="<?php echo $webnus_options->webnus_fav_icon(); ?>">
<?php else: ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<?php endif; ?>

<!-- accests
  ================================================== -->
<link type="text/css" rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" />
  <link type="text/css" rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" />
  
  
 
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript">
(function () {
  if (window.jQuery === undefined) {
    document.write('<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/accests/js/jquery-1.11.3.min.js"><\/script>');
  }
}());
  </script>
  
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/accests/js/jquery.cycle2.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/accests/js/main.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/accests/js/filter.js"></script>
</head>

	<!-- CSS + JS
  ================================================== -->
<?php wp_head();  ?>

<link type="text/css" rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/accests/css/main.css" />


<?php
/*
 * Codes for transparent header
 * 
*/

GLOBAL $webnus_page_options_meta;

$transparent_header = '';

if(!is_search())
{

$transparent_header_meta = isset($webnus_page_options_meta)?$webnus_page_options_meta->the_meta():null;

$transparent_header =(isset($transparent_header_meta) && is_array($transparent_header_meta) && isset($transparent_header_meta['webnus_page_options'][0]['webnus_transparent_header']))?$transparent_header_meta['webnus_page_options'][0]['webnus_transparent_header']:null;



}

$transparent_header_class = (!empty($transparent_header))?'transparent-header-w':'';

?>	
<body <?php body_class('default-header '. $transparent_header_class); ?>>

<div id="main_cont">
    <!--Header Start-->
    <div id="inner_header">
    <div id="header_menu_cont">
	
      <div id="header_menu_cont2" class="cont">
        <div class="logo-inner"></div>
        <div class="booktopbx">
        	<div class="col-6">
        		<div class="bookwrap"> <img src="<?php bloginfo('template_url');?>/accests/images/book-icon.png" /> </div>
        	</div>
            <div class="col-6">
            <div class="copybox">
          <div class="title">Download Your Free Copy Now</div>
          <div id="download_form">
            <form>
              <input type="text" name="" placeholder="Your Email Address" />
              <input type="submit" value="GO" />
            </form>
          </div>
        </div>
        	</div>            
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
	  
       
	   <div id="innermenu_wraper" class="page-menu">
        <div class="cont"> <a href="#" class="icon"></a>
          <div id="header_menu_cont3">
		  <div id="header_menu-custome">
		  <li class="search_cont"> <a href="#" class="search"></a>
                <form class="search_form" action="search.html">
                  <input type="text" name="search" placeholder="Search">
                </form>
                <div class="clear"></div>
              </li>
           <?php ubermenu( 'main' , array( 'theme_location' => 'header-menu' ) ); ?>
	   
           <!-- <ul id="header_menu">
              <li> <a href="#">Home</a> </li>
              <li class="sub"> <a href="#">Cases We Handle</a>
                <ul>
                  <li><a href="#"> Item 1 </a></li>
                  <li><a href="#"> Item 2 </a></li>
                </ul>
              </li>
              <li class="sub"> <a href="#">People We Help</a>
                <ul>
                  <li><a href="#"> Item 1 Item 1 Item 1 </a></li>
                  <li><a href="#"> Item 2 </a></li>
                </ul>
              </li>
              <li class="sub"> <a href="#">Client Stores</a>
                <ul>
                  <li><a href="#"> Item 1 </a></li>
                  <li><a href="#"> Item 2 </a></li>
                </ul>
              </li>
              <li class="sub"> <a href="#">About Us</a>
                <ul>
                  <li><a href="#"> Item 1 </a></li>
                  <li><a href="#"> Item 2 </a></li>
                </ul>
              </li>
              <li> <a href="#">FAQ</a> </li>
              <li class="sub"> <a href="#">Free Info</a>
                <ul>
                  <li><a href="#"> Item 1 </a></li>
                  <li><a href="#"> Item 2 </a></li>
                </ul>
              </li>
              <li> <a href="#" class="">CONTACT US</a> </li>
              <li class="search_cont"> <a href="#" class="search"></a>
                <form class="search_form" action="search.html">
                  <input type="text" name="search" placeholder="Search">
                </form>
                <div class="clear"></div>
              </li>
            </ul> -->
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- get_header(); end -->
<section id="headline" style="<?php

/// To change the title bar background color
if(!empty($titlebar_bg)) echo ' background-color:'.$titlebar_bg.';'; 

/// To change the title bar text color 


 ?>">
    <div class="container">
      <h3 style="<?php /* TEXT COLOR OF TITLE */ if(!empty($titlebar_fg)) echo ' color:'.$titlebar_fg.';'; if(!empty($titlebar_fs)) echo ' font-size:'.$titlebar_fs.';';  ?>"><?php the_title(); ?></h3>
      
    </div>
</section>
<?php if( 1 == $webnus_options->webnus_enable_breadcrumbs() ) { ?>
      <div class="breadcrumbs-w"><div class="container"><?php if('webnus_breadcrumbs') webnus_breadcrumbs(); ?></div></div>
<?php } ?>


<section id="main-content" class="container">
<!-- Start Page Content -->
<?php
/*
	LEFT SIDEBAR
*/

if( ('left' == $sidebar_pos) || ('both' == $sidebar_pos ) ) get_sidebar('left');
if( $have_sidebar ) {
?>
<section class="<?php  echo('both' == $sidebar_pos )?'col-md-4 alpha omega':'col-md-8 omega'; ?>">
	<article>
	
<?php 
}
	
	echo '<div class="row-wrapper-x">';
		  if( have_posts() ): while( have_posts() ): the_post();
			the_content();
		  endwhile;
		  endif;
	echo '</div>';
// wp_link_pages();
// if ( comments_open() )
// comments_template(); 


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


</div> <!-- main cont -->
<?php get_footer(); ?>