<?php GLOBAL $webnus_options; 







// Close  head line if woocommerce available	



//if( isset($post) ){



	//if( 'product' == get_post_type( $post->ID )){



		//echo '</section>';



//	}



// } ?>







    <div id="footer_w" class="wrapper">



      <div id="footer" class="cont">



        <div class="logo_cont"></div>



        <div class="sec sec1 sec1-left">

          <h4> WHO WE ARE </h4>

          <?php wp_nav_menu( array( 'theme_location' => 'footer_who_we_are', 'container'  => false, 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>

        </div>



        <div class="sec sec1">

          <h4> QUICK LINKS </h4>

          <?php wp_nav_menu( array( 'theme_location' => 'footer_quick_links', 'container'  => false, 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>

        </div>



        <div class="sec sec2" id="custom_id">



          <h4> NEW ORLEANS OFFSHORE INJURY LAWYER </h4>



          <div>



            <div> The Young Firm



              &nbsp;&nbsp;|&nbsp;&nbsp;



              400 Poydras Street, Ste. 2090   New Orleans, LA 70130 </div>



            <div> Toll Free: (866) 938-6113



              &nbsp;&nbsp;|&nbsp;&nbsp;



              Fax: 504-680-4101 </div>



          </div>



        </div>



        <div class="sec sec1 sec-social-media">



          <h4 class="nospace"> CONNECT WITH US </h4>



          <div class="sn_cont"> <a href="https://www.facebook.com/theyoungfirm" class="sn fb" target="_blank"></a> <a href="https://twitter.com/jonesactlaw" class="sn tw" target="_blank"></a> <a href="https://www.linkedin.com/in/timothy-young-6b87b9a7" class="sn li" target="_blank"></a> <a href="https://plus.google.com/+Jonesactlaw/posts" class="sn gp" target="_blank"></a>



            <div class="clear"></div>



          </div>



        </div>



        <div class="clear"></div>



      </div>



    </div>



	



  </div>



















<span id="scroll-top"><a class="scrollup"><i class="fa-chevron-up"></i></a></span> </div>



<?php



echo $webnus_options->webnus_space_before_body();







// sticky menu



GLOBAL $webnus_options;



$is_sticky = $webnus_options->webnus_header_sticky();



$scrolls_value = $webnus_options->webnus_header_sticky_scrolls();



$scrolls_value = !empty($scrolls_value) ? $scrolls_value : 150;



if( $is_sticky == '1' ) :



	echo '<script type="text/javascript">



			jQuery(document).ready(function(){ 



			jQuery(function() {



				var header = jQuery("#header");



				var navHomeY = header.offset().top;



				var isFixed = false;



				var scrolls_pure = parseInt("' . $scrolls_value . '");



				var $w = jQuery(window);



				$w.scroll(function(e) {



				var scrollTop = $w.scrollTop();



				var shouldBeFixed = scrollTop > scrolls_pure;



				if (shouldBeFixed && !isFixed) {



				header.addClass("sticky");



				isFixed = true;



				}



				else if (!shouldBeFixed && isFixed) {



				header.removeClass("sticky");



				isFixed = false;



				}



				e.preventDefault();



				});



			});



			});



		</script>';



endif;



wp_footer(); ?>


<script type="text/javascript">
$(document).ready(function(e) {
	$(window).on('resize', function(){
		if ($( document ).width() <=880 ){
			$("#custom_id").removeClass("sec2");
			$("#custom_id").addClass(" sec1");
		}
		if ($( document ).width() >= 881 ){
			$("#custom_id").removeClass("sec1");
			$("#custom_id").addClass(" sec2");
		}
    });
	if ($( document ).width() <=880 ){
		$("#custom_id").removeClass("sec2");
		$("#custom_id").addClass(" sec1");
	}
	if ($( document ).width() >= 881 ){
		$("#custom_id").removeClass("sec1");
		$("#custom_id").addClass(" sec2");
	}
});
</script>
</body>



</html>