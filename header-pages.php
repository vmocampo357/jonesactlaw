<?php
/***************************************/
/*			Globalization $woptions
/***************************************/
GLOBAL $webnus_options;
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
?><!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<!-- Basic Page Needs ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<title>
	<?php		/***************************************/	/*			Title Generation Process	/***************************************/	if(is_plugin_active('all-in-one-seo-pack/all_in_one_seo_pack.php'))	{				wp_title( '|', true, 'right' );				}elseif(is_plugin_active('wordpress-seo/wp-seo.php'))	{				wp_title( '|', true, 'right' );			}else{				global $page, $paged;				wp_title( '|', true, 'right' );				bloginfo( 'name' );				$site_description = get_bloginfo( 'description', 'display' );				if ( $site_description && ( is_home() || is_front_page() ) )			echo " | $site_description";		if ( $paged >= 2 || $page >= 2 )			echo ' | ' . sprintf( __( 'Page' ,WEBNUS_TEXT_DOMAIN) . ' %s', max( $paged, $page ) );	}	/***************************************/	/*			End Title Generation Process	/***************************************/		?>
	</title>
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
<!-- Mobile Specific Metas ================================================== -->
<?php
$responsive = $webnus_options->webnus_enable_responsive();
if(1 == $responsive){
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php } else { ?>
<meta name="viewport" content="width=1200,user-scalable=no">
<?php } ?>
<?php if($webnus_options->webnus_fav_icon()): ?>
<link rel="shortcut icon" href="<?php echo $webnus_options->webnus_fav_icon(); ?>">
<?php else: ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<?php endif; ?>
   
 <!-- accests ================================================== -->
 
<link type="text/css" rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" />
  <link type="text/css" rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript">
(function () {
  if (window.jQuery === undefined) {
    document.write('<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/accests/js/jquery-1.11.3.min.js"><\/script>');
  }
}());
  </script>
  
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/accests/js/jquery.cycle2.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/accests/js/main-header.js"></script>
  
  <script>(function(ng,a,g,e){var l=document.createElement(g);l.async=1;l.src =(ng+e);var c=a.getElementsByTagName(g)[0];c.parentNode.insertBefore(l,c);})("https://messenger.ngageics.com/ilnksrvr.aspx?websiteid=",document,"script","191-199-229-196-233-126-113-24");</script>
<style type="text/css">#nGageLH {margin: 0 auto 10px;text-align: center;visibility: hidden;}
</style>
<?php
if (is_page(3312)) { } else { ?> 
<style type="text/css">
#freebook_wrap .infusion-field {
    width: 47% !important;
    float: left;
    margin-right: 5px;
}
#freebook_wrap .infusion-field-input-container {
    margin-top: 5px !important;
}
#freebook_wrap .infusion-submit input[type="submit"] { 
	background: #e90000;
    font-size: 1.1em;
    width: 94.5%;
    font-family: 'Open Sans', sans-serif;
}



#download_book_now .infusion-field {
    width: 47% !important;
    float: left;
    margin-right: 5px;
}
#download_book_now .infusion-field-input-container {
    margin-top: 5px !important;
}
#download_book_now .infusion-submit input[type="submit"] { 
	background: #e90000;
    font-size: 1.1em;
    width: 94.5%;
    font-family: 'Open Sans', sans-serif;
}




.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}



.overlay_book {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  display:none;
  opacity: 1;
}

.popup_book {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 40%;
  position: relative;
}

.popup_book h2 {
    margin: 15px 0;
    color: #333;
    font-size: 1em;
    font-family: Tahoma, Arial, sans-serif;
    font-weight: bold;
    border-bottom: 1px solid #CCC;
    padding-bottom: 5px;
    display: inline-block;
}
.popup_book .close_book {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup_book .close_book:hover {
  color: #06D85F;
}
.popup_book .content_book {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup_book{
    width: 70%;
  }
}
@media (max-width: 767px) {
	#freebook_wrap .cont .col-6, #freebook_wrap .cont .col-3 { width:100% !important; }
	#freebook_wrap .cont .infusion-field { width:98% !important; }
}
</style>

<?php } ?>
<?php if(is_page(3401)){ ?>
<script> 
    $( document ).ready(function() {
        $('.testimg').parents().eq(5).addClass("call-to-action-section margin-top-30 full-row");
    });
</script>
<?php } ?>
<script type="text/javascript">
$(window).load(function(){
	$('#left_area_img1').click(function(){
		$("#left").animate({right:0});
		$('#left_area_img1').css('display','none');
		$('#left_area_img2').css('display','block');
		//jQuery('#left_area_img2').css('margin-left', -48);
		//jQuery("#left_area_img2").animate({'margin-left':-48});
		//jQuery('.area_left').css('width', 261);
		//jQuery('.left_area').css('width', 261); 
	});
	$('#left_area_img2').click(function(){
		$("#left").animate({right:-407});
		$('#left_area_img1').css('display','block');
		$('#left_area_img2').css('display','none');
		//jQuery('.left_area').css('width', 49);
		//jQuery('#left_area_img1').css('margin-left', 0);
		//jQuery('#left_area_img1').animate({'margin-left': 0});
	});
	$("#download_form .infusion-field-input-container").attr("placeholder", "Your Email Address");
});
</script>
<script type="text/javascript">
$( document ).ready(function() {
	var emailpattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	$( "#left form" ).submit(function( event ) {
		if($( "#left form #inf_field_FirstName" ).val()==''){
			alert("Please Enter Name");
			$( "#left form #inf_field_FirstName" ).focus();
			return false;
		} else if (emailpattern.test($( "#left form #inf_field_Email" ).val())==false) {
			alert("Please Enter a valid Email");
			$( "#left form #inf_field_Email" ).focus();
			return false;
		} else {
			window.open('http://www.jonesactlaw.com/files/Understanding_Your_Offshore_Injury.pdf', '_blank');
		}
	});
});
$( document ).ready(function() {
	var emailpattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	$( "#download_form form" ).submit(function( event ) {
		if (emailpattern.test($( "#download_form form #inf_field_Email" ).val())==false) {
			alert("Please Enter a valid Email");
			$( "#download_form form #inf_field_Email" ).focus();
			return false;
		} else {
			window.open('http://www.jonesactlaw.com/files/Understanding_Your_Offshore_Injury.pdf', '_blank');
		}
	});
});
$( document ).ready(function() {
	var emailpattern2 = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	$( "#light .dialogue_box_offers form" ).submit(function( event ) {
		if(emailpattern2.test($( "#light .dialogue_box_offers form #inf_field_Email" ).val())==false){
			alert("Please Enter valid Email");
			$( "#light .dialogue_box_offers form #inf_field_Email" ).focus();
			return false;
		} else {
			window.open('http://www.jonesactlaw.com/files/Understanding_Your_Offshore_Injury.pdf', '_blank');
		}
	});
});
$(window).load(function(){
	$('#subpages_header_button').click(function(){
		$("#download_book_now").css('display','block');
	});
	$('.close_book').click(function(){
		$("#download_book_now").css('display','none');
	});
	var emailpattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	$( "#download_book_now form" ).submit(function( event ) {
		if($( "#download_book_now form #inf_field_FirstName" ).val()==''){
			alert("Please Enter Name");
			$( "#download_book_now form #inf_field_FirstName" ).focus();
			return false;
		} else if (emailpattern.test($( "#download_book_now form #inf_field_Email" ).val())==false) {
			alert("Please Enter a valid Email");
			$( "#download_book_now form #inf_field_Email" ).focus();
			return false;
		} else {
			window.open('http://www.jonesactlaw.com/files/Understanding_Your_Offshore_Injury.pdf', '_blank');
		}
	});
});
</script>
<?php 
if (is_page(3312)) { ?>
<script type="text/javascript">
$( document ).ready(function() {
	var emailpattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	$( "#freebook_wrap form" ).submit(function( event ) {
		if($( "#freebook_wrap form #inf_field_FirstName" ).val()==''){
			alert("Please Enter First Name");
			$( "#freebook_wrap form #inf_field_FirstName" ).focus();
			return false;
		} else if($( "#freebook_wrap form #inf_field_LastName" ).val()==''){
			alert("Please Enter Last Name");
			$( "#freebook_wrap form #inf_field_LastName" ).focus();
			return false;
		} else if($( "#freebook_wrap form #inf_field_Address2Street1" ).val()==''){
			alert("Please Enter Address");
			$( "#freebook_wrap form #inf_field_Address2Street1" ).focus();
			return false;
		} else if($( "#freebook_wrap form #inf_field_City2" ).val()==''){
			alert("Please Enter City");
			$( "#freebook_wrap form #inf_field_City2" ).focus();
			return false;
		} else if($( "#freebook_wrap form #inf_field_State2" ).val()==''){
			alert("Please Enter State");
			$( "#freebook_wrap form #inf_field_State2" ).focus();
			return false;
		} else if($( "#freebook_wrap form #inf_field_ZipFour2" ).val()==''){
			alert("Please Enter Zip");
			$( "#freebook_wrap form #inf_field_ZipFour2" ).focus();
			return false;
		} else if(emailpattern.test($( "#freebook_wrap form #inf_field_Email" ).val())==false){
			alert("Please Enter valid Email");
			$( "#freebook_wrap form #inf_field_Email" ).focus();
			return false;
		} else if($( "#freebook_wrap form #inf_field_ZipFour2" ).val()==''){
			alert("Please Enter Zip Code");
			$( "#freebook_wrap form #inf_field_ZipFour2" ).focus();
			return false;
		}
	});
});
</script>
<?php } ?>
<script>
$(function() {
	  jQuery(document).ready(function($) {
		  setTimeout(function () {
			document.getElementById('light').style.display='block';
			document.getElementById('fade').style.display='block';
		}, 5000);
	  });
});
</script>
<link href="http://vjs.zencdn.net/5.6.0/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script>
 
 
    
    
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','../www.google-analytics.com/analytics.js'/*tpa=http://www.google-analytics.com/analytics.js*/,'ga');
 
 ga('create', 'UA-1399663-116', 'auto', {'name':'ua1', 'allowLinker':'true'});
 ga('ua1.require', 'displayfeatures');
 ga('ua1.require', 'linkid');
 ga('http://www.jonesactlaw.com/ua1.send', 'pageview');
 
 ga('create', 'UA-38841917-1', 'auto', {'name':'ua2', 'allowLinker':'true'});
 ga('ua2.require', 'displayfeatures');
 ga('ua2.require', 'linkid');
 ga('http://www.jonesactlaw.com/ua2.send', 'pageview');
 
 ga('create', 'UA-45899426-1', 'auto', {'name':'ua7', 'cookieDomain':'http://www.jonesactlaw.com/www.jonesactlaw.com', 'allowLinker':'true'});
 ga('ua7.require', 'displayfeatures');
 ga('ua7.require', 'linkid');
 ga('http://www.jonesactlaw.com/ua7.send', 'pageview');
 
 
 
 var fwmEvent=function(e){var r=['ua1','ua2','ua7'],a=1==arguments.length?arguments[0].split(","):Array.prototype.slice.call(arguments);a.forEach(function(e,r){a[r]=e.replace(/'/g,"").trim()});for(var n=0;n<r.length;n++){var t=[r[n]+".send","event"],l=$.merge(t,a);ga.apply(null,l)}};
 
</script>
<?php wp_head();  ?>
</head>
<style type="text/css">
.liveChatFloatingButton { z-index:999; }
.cont {  }
</style>
<!-- CSS + JS ================================================== -->
   <link type="text/css" rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/accests/css/page-header.css" />  
  
<?php if (is_page_template( array('page-about-us.php','page-case-results.php','page-sign-up.php','page-thank-you.php','page-reports.php','page-claim-work.php','page-our-team.php','faq.php','testimonials.php','template-claim-calculator.php')) || is_post_type_archive('case-results')|| is_singular(array('attorneys','sign-up')) || is_page(3391)|| is_post_type_archive('faqs')|| is_post_type_archive('video')|| is_post_type_archive('testimonials')|| is_post_type_archive('library'))  { ?>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/accests/css/main-templates.css" />
<?php }else{ ?>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/accests/css/main.css" />
<?php } ?>
 
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
        
        
        <?php
			$enable_disable_offer	=	get_field('enable_disable_offer','options');
			if ($enable_disable_offer	==	'Enable') {
    	?>
            <div class="area_left" id="left">
                <div class="left_area">
                <img id="left_area_img1" src="http://www.jonesactlaw.com/wp-content/uploads/2016/03/image1.jpg" alt="Free Consultation" width="49" height="240"  />
                <img id="left_area_img2" src="http://www.jonesactlaw.com/wp-content/uploads/2016/03/image2.jpg" alt="Free Consultation" width="49" height="240" style="display:none;"/>
                </div>
                <div class="border"></div>
                <?php
                    $sel_details	=	mysql_query("SELECT * FROM wp_sl_offers_detail ORDER BY sl_offer_id DESC LIMIT 1");
                    while($row_out_details	=	mysql_fetch_array($sel_details)) {
                        echo $row_out_details['sl_offer_code'];	
                    }
                ?>
            </div>
		<?php } ?>
        
        
<?php
if(get_post_type()=='post' || get_post_type()=='page' || get_post_type()=='employee' || get_post_type()=='faq' || get_post_type()=='portfolio' || get_post_type()=='case-results' || get_post_type()=='faqs' || get_post_type()=='library' || get_post_type()=='news' || get_post_type()=='practice-areas' || get_post_type()=='reports' || get_post_type()=='testimonials' || get_post_type()=='video' || get_post_type()=='attorneys' || get_post_type()=='sign-up') {
	$cur_page_id_pop	=	get_the_ID();
	$pop_query	=	mysql_query("SELECT * FROM wp_pop_offers_which_page WHERE pop_offer_w_pageid	=	$cur_page_id_pop ORDER BY pop_offer_w_id DESC LIMIT 1");
	$pop_offer_id;
	while ($row_out_pop	=	mysql_fetch_array($pop_query)){
		$pop_offer_id	=	$row_out_pop['pop_offer_id'];
	}
	
	if ($pop_offer_id!='') {
	
?>
<div id="light" class="white_content">
	<div class="dialogue_box_offers">
    	<?php
			$pop_details	=	mysql_query("SELECT * FROM wp_pop_offers_detail WHERE pop_offer_id	=	$pop_offer_id");
			while($row_out_details_pop	=	mysql_fetch_array($pop_details)) {
				echo $row_out_details_pop['pop_offer_code'];	
			}
		?>
    </div>
	<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" class="close_pop">X</a>
</div>
<div id="fade" class="black_overlay"></div>
<?php }
}
?>
<div id="download_book_now" class="overlay_book" style="z-index: 99999999999999999999;">
	<div class="popup_book">
        <h2>Book Download Wizard</h2>
        <a class="close_book" href="#">&times;</a>
        <div class="content_book" id="form_append_new">
            <form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/820bd838e2f571d0a5364c31338d83ae" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="820bd838e2f571d0a5364c31338d83ae" /><input name="inf_form_name" type="hidden" value="Header offer Form" /><input name="infusionsoft_version" type="hidden" value="1.51.0.57" /><div class="infusion-field"><label for="inf_field_FirstName">First Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div>
<div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Download Now" /></div></form><script type="text/javascript" src="https://tschedule.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=e370abe00d8ff5e4b9a050d36c0821cd"></script>
        </div>
	</div>
</div>
<a href="javascript:StartNgageChat();"><div class="liveChatFloatingButton">LIVE CHAT</div></a>
 <div id="main_cont">
 <!--Header Start-->
    <div id="innerEs_header">
    <div id="header_menu_contE">
      <div id="header_menu_cont2E" class="contE">
        <a href="<?php echo site_url(); ?>/"><div class="logo-inner"></div></a>
        <div class="booktopbx">
        	<div class="col-7">
        		<!--<div class="bookwrap"> <img src="<?php bloginfo('template_url');?>/accests/images/book-icon.png" /> </div>-->
                <div class="bookwrap">
                	<h3><?php echo get_field('header_offer_fields_heading', 'options'); ?></h3>
                    <?php $header_offer_fields_image	=	get_field('header_offer_fields_image', 'options'); ?>
                    <img src="<?php echo $header_offer_fields_image['url']; ?>" alt="<?php echo $header_offer_fields_image['alt']; ?>" />
                </div>
        	</div>
            <div class="col-5">
            	<div class="copybox">
                  <div class="title">Download Your Free Copy Now</div>
                  <a href="javascript:void(0)" id="subpages_header_button">Download Now </a>
                  <div class="clear"></div>
                </div>
        	</div>
            <!--<div class="col-6">
            <div class="copybox">
          <div class="title">Download Your Free Copy Now</div>
          <div id="download_form">
          	<?php //echo get_field('header_offer_fields_form', 'options'); ?>
          </div>
        </div>
        	</div>-->            
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div id="innermenu_wraperE">
        <div class="contE"> 
        <p id="menu-title"">MENU</p>
        <a href="#" class="icon"></a>
		<div class="clear"></div>
          <div id="header_menu_cont3E">
                         <?php
						 	$backup_owp = $wp_query;
							$wp_query = NULL;
							$wp_query = new WP_Query(array('post_type' => 'post'));
							 wp_nav_menu( array( 'theme_location' => 'header-menu', 'container'  => false, 'items_wrap' => '<ul>'.get_search_form().'%3$s</ul>' ) ); 
							 $wp_query = $backup_owp;
						 ?>
                <div class="clear"></div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="subpage_nav"></div>
  </div>
     <!--Header End-->