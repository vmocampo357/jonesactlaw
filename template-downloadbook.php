<?php
/* 
 Template Name: Download Free Book
*/

		get_header('pages');

?>

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



<!-- get_header(); end -->
<?php if(is_page(3391)){ ?>
<div class="innerpage_tile">
  <div class="cont"><h3>Maritime Video Library</h3></div>
</div>
<?php }else{ ?>
<section id="headline" style="<?php
/// To change the title bar background color

if(!empty($titlebar_bg)) echo ' background-color:'.$titlebar_bg.';'; 

/// To change the title bar text color 
 ?>">
    <div class="container">
      <h3 style="<?php /* TEXT COLOR OF TITLE */ if(!empty($titlebar_fg)) echo ' color:'.$titlebar_fg.';'; if(!empty($titlebar_fs)) echo ' font-size:'.$titlebar_fs.';';  ?>"><?php the_title(); ?></h3>
    </div>
</section>
<?php } ?>
<?php if( 1 == $webnus_options->webnus_enable_breadcrumbs() ) { ?>

      <div class="breadcrumbs-w"><div class="container"><?php if('webnus_breadcrumbs') webnus_breadcrumbs(); ?></div></div>

<?php } ?>

<?php if(is_page(3366)){ ?>

	<section id="headline">

    <!--Inner Page Title-->

    <div class="thankyou-wrap">

    	<div class="cont">

        <div class="col-3">

        <div class="thankyou-heading">Contact Us For A Free Case Review</div>

        </div>

        

        <div class="col-9">

        <div class="result-image"><img src="<?php bloginfo('template_url');?>/accests/images/blog-title-image.png"></div>

        </div>

        <div class="clear"></div>

        </div>

    </div>

      

    </div>

</section>

<section id="headline">

<div class="container">

<?php 

  if ( function_exists('yoast_breadcrumb') ) {

   yoast_breadcrumb('<div id="breadcrums">','</div>');

  }

?>

    <!--Bredcrums End-->

</div>

</section>

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

	

	echo '<div class="row-wrapper-x info_wraper ">';

		  if( have_posts() ): while( have_posts() ): the_post();

			the_content(); ?>
			
            <?php $var_num = ''; ?>
			<script type="text/javascript">
//			var btn_mum;
				function downloadFile(pdf_file, btn_num) {
					console.log(btn_num);
					formGenerate(btn_num);
					$("#download_book_now").css('display','block');
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
							window.open(pdf_file, '_blank');
						}
					});				
				}
				$(window).load(function(){
					$('.close_book').click(function(){
						$("#download_book_now").css('display','none');
						$("#popup_book").css('display','display');
					});
				});
			</script>
                        
            <div id="download_book_now" class="overlay_book">
                <div class="popup_book">
                    <h2>Book Download Wizard</h2>
                    <a class="close_book" href="#">&times;</a>
                    <div class="content_book" id="form_append_new">
                    <script type="text/javascript" src="https://tschedule.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=e370abe00d8ff5e4b9a050d36c0821cd"></script>
                    <script type="text/javascript">
					function formGenerate(btn_num){
						//console.log(btn_num);
						if (btn_num	==	1) {
						//console.log(btn_num);
                        var pop_body	=	'<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/5b2d292774b5c1227fa1d94569c44b4c" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="5b2d292774b5c1227fa1d94569c44b4c" /><input name="inf_form_name" type="hidden" value="Download Now POPUP form UYOI" /><input name="infusionsoft_version" type="hidden" value="1.50.0.38" /><div class="infusion-field"><label for="inf_field_FirstName">Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div><div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Download Now" /></div></form>'; }


						
						
						if (btn_num == 2) {
							var pop_body	=	'<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/d2941c19996b49ebc38792c2dcdeebb5" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="d2941c19996b49ebc38792c2dcdeebb5" /><input name="inf_form_name" type="hidden" value="Download Now POPUP form FTT" /><input name="infusionsoft_version" type="hidden" value="1.50.0.38" /><div class="infusion-field"><label for="inf_field_FirstName">First Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div><div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Submit" /></div></form>';}							
						
						if (btn_num == 3) {
							var pop_body	=	'<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/5b35018146d0e39ee23f9a6d8b6f8851" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="5b35018146d0e39ee23f9a6d8b6f8851" /><input name="inf_form_name" type="hidden" value="Download Now POPUP form CWOI" /><input name="infusionsoft_version" type="hidden" value="1.50.0.38" /><div class="infusion-field"><label for="inf_field_FirstName">First Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div><div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Submit" /></div></form>';	}					
						
						if (btn_num == 4) {
							var pop_body	= '<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/dadfa0385a03409bb20b33d650aa917c" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="dadfa0385a03409bb20b33d650aa917c" /><input name="inf_form_name" type="hidden" value="Download Now POPUP form SAMI" /><input name="infusionsoft_version" type="hidden" value="1.50.0.38" /><div class="infusion-field"><label for="inf_field_FirstName">First Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div><div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Submit" /></div></form>'; }					
						
						if (btn_num == 5) {
							var pop_body	= '<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/7557007eb49a1c67b2b6ac1bc1c28f07" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="7557007eb49a1c67b2b6ac1bc1c28f07" /><input name="inf_form_name" type="hidden" value="Download Now POPUP form SMCL" /><input name="infusionsoft_version" type="hidden" value="1.50.0.38" /><div class="infusion-field"><label for="inf_field_FirstName">First Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /> </div><div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Submit" /></div></form>'; }	
						
						if (btn_num == 6) {
							var pop_body	= '<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/6dbf47dd66557e0d5439baf4e5d105de" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="6dbf47dd66557e0d5439baf4e5d105de" /><input name="inf_form_name" type="hidden" value="Download Now POPUP form MCW" /><input name="infusionsoft_version" type="hidden" value="1.50.0.38" /><div class="infusion-field"><label for="inf_field_FirstName">First Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div><div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Submit" /></div></form>'; }
						
						if (btn_num == 7) {
							var pop_body	= '<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/a99005b789bba632e6537b2dda5b44da" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="a99005b789bba632e6537b2dda5b44da" /><input name="inf_form_name" type="hidden" value="Download Now POPUP form 8DCW" /><input name="infusionsoft_version" type="hidden" value="1.50.0.38" /><div class="infusion-field"><label for="inf_field_FirstName">First Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div><div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Submit" /></div></form>'; }
						
						if (btn_num == 8) {
							var pop_body	= '<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/166e29f7994994aba5937ac403856a29" class="infusion-form" method="POST"><input name="inf_form_xid" type="hidden" value="166e29f7994994aba5937ac403856a29" /><input name="inf_form_name" type="hidden" value="Download Now POPUP form UYOIA" /><input name="infusionsoft_version" type="hidden" value="1.50.0.38" /><div class="infusion-field"><label for="inf_field_FirstName">First Name *</label><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" /></div><div class="infusion-field"><label for="inf_field_Email">Email *</label><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" /></div><div class="infusion-submit"><input type="submit" value="Submit" /></div></form>'; }
							$('#form_append_new').html(pop_body);
					}
                            </script>
                    </div>
                </div>
            </div>
            
            
            <div class="cont">
    	<div id="inner_wraper">

          <div class="section">
            	<ul class="freebooksList">
                	<li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><img src="http://www.jonesactlaw.com/wp-content/uploads/2016/01/book-1.jpg" alt="" /></div>
                        <div class="bookcontetn">
                        <a href="#" class="booktitle">Understanding Your Offshore Injury</a>
                        <p>An easy-to-understand guide about maritime law that covers basic laws that protect maritime workers; gives definitions of common terms; and explains the medical tests used to help diagnose offshore injuries.</p>
                        </div>
                        <a href="javascript:void(0)" onclick="return downloadFile('http://www.jonesactlaw.com/files/Understanding_Your_Offshore_Injury.pdf', 1);" class="downbtn">DOWNLOAD NOW</a>
                        <a href="http://www.jonesactlaw.com/reports/employees-guide-to-maritime-injury-law/" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>
                    <li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><img src="http://www.jonesactlaw.com/wp-content/uploads/2016/01/book-10.jpg" alt="" /></div>
                        <div class="bookcontetn">
                        <a href="#" class="booktitle">Understanding Your Offshore Injury: Audiobook</a>
                        <p>This audiobook contains more than an hour of important training on the Jones Act and maritime law. This is training that captains across the U.S. request for their crews.</p>
                        </div>
                        <a href="javascript:void(0)" onclick="return downloadFile('http://www.jonesactlaw.com/files/Understanding-Your-Offshore-Audiobook--full-.mp3', 8);" class="downbtn">DOWNLOAD NOW</a>
                        <a href="http://www.jonesactlaw.com/reports/understanding-your-offshore-injury-audiobook/" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>                 
                    <li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><img src="http://www.jonesactlaw.com/wp-content/uploads/2016/01/book-2.jpg" alt="" /></div>
                        <div class="bookcontetn">
                        <a href="#" class="booktitle">From Tragedy to Triumph</a>
                        <p>This book contains first-person stories from previous clients who, like you, suffered an offshore injury and came to our firm for help. You may be surprised by how similar your story is to theirs.</p>
                        </div>
                        <a href="javascript:void(0)" onclick="return downloadFile('http://www.jonesactlaw.com/files/From-Tragedy-to-Triumph.pdf', 2);" class="downbtn">DOWNLOAD NOW</a>
                        <a href="http://www.jonesactlaw.com/from-tragedy-to-triumph/" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>
                    
                    <li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><img src="http://www.jonesactlaw.com/wp-content/uploads/2016/01/book-3.jpg" alt="" /></div>
                        <div class="bookcontetn">
                        <a href="#" class="booktitle">Coping with an Offshore Injury: A Guidebook for Spouses</a>
                        <p>Often times the wife/girlfriend who provides the foundation of support to keep the family going. This book provides guidance on how she can support her significant other.</p>
                        </div>
                        <a href="javascript:void(0)" onclick="return downloadFile('http://www.jonesactlaw.com/files/Coping_With_an_Offshore_Injury_WEB.pdf',3);" class="downbtn">DOWNLOAD NOW</a>
                        <a href="http://www.jonesactlaw.com/sign-up/coping-with-an-injury/" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>
                    
                    <li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><img src="http://www.jonesactlaw.com/wp-content/uploads/2016/01/book-4.jpg" alt="" /></div>
                        <div class="bookcontetn">
                        <a href="#" class="booktitle">Secrets About Medical Issues Surrounding Your Offshore Injuries</a>
                        <p>This guide addresses injuries that DON’T come up in common medical tests. Understand your health &amp; injuries and make sure you are properly diagnosed.</p>
                        </div>
                        <a href="javascript:void(0)" onclick="return downloadFile('http://www.jonesactlaw.com/files/Secrets-to-Medical-Issues.pdf', 4);" class="downbtn">DOWNLOAD NOW</a>
                        <a href="http://www.jonesactlaw.com/your-injury-may-be-more-serious-than-you-think/" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>
                    
                    <li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><img src="http://www.jonesactlaw.com/wp-content/uploads/2016/01/book-5.jpg" alt="" /></div>
                        <div class="bookcontetn">
                        <a href="#" class="booktitle">Secrets to Maintenance & Cure Laws</a>
                        <p>Learn how to get your maintenance increased, how to pick your own doctor and get the company to pay for it, how to document your expenses to get them paid for. </p>
                        </div>
                        <a href="javascript:void(0)" onclick="return downloadFile('http://www.jonesactlaw.com/files/Secrets-to-Maintenance-and-Cure.pdf', 5);" class="downbtn">DOWNLOAD NOW</a>
                        <a href="http://www.jonesactlaw.com/sign-up/secrets-to-maintenance-and-cure-laws-your-company-may-not-want-you-to-know/" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>
                    
                    <li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><img src="http://www.jonesactlaw.com/wp-content/uploads/2016/01/book-6.jpg" alt="" /></div>
                        <div class="bookcontetn">
                        <a href="#" class="booktitle">Maintenance & Cure Worksheet</a>
                        <p>If you are injured offshore, your employer is legally obligated to pay for your medical & living expenses. This worksheet will help you create an expense sheet to provide to your employer.</p>
                        </div>
                        <a href="javascript:void(0)" onclick="return downloadFile('http://www.jonesactlaw.com/files/Maintenance-And-Cure-Worksheet.pdf', 6);" class="downbtn">DOWNLOAD NOW</a>
                        <a href="http://www.jonesactlaw.com/reports/maintenance-and-cure-download/" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>
                    
                    <li class="col-3">
                    	<div class="innerbook">
                    	<div class="imageBox"><img src="http://www.jonesactlaw.com/wp-content/uploads/2016/01/book-71.jpg" alt="" /></div>
                        <div class="bookcontetn">
                        <a href="#" class="booktitle">8 Documents that Can Win Your Jones Act Case</a>
                        <p>This report briefly discusses 8 documents that can help win a maritime case. Learn more about why witness statements, accident reports, vessel logs, and more are crucial to winning your case.</p>
                        </div>
                        <a href="javascript:void(0)" onclick="return downloadFile('http://www.jonesactlaw.com/files/8-Reports-That-Could-Win-Your-Case.pdf', 7);" class="downbtn">DOWNLOAD NOW</a>
                        <a href="http://www.jonesactlaw.com/reports/8-documents/" class="orderbtn">ORDER MY HARD COPY</a>
                        </div>
                    </li>
                                          
                    <div class="clear"></div>
                </ul>
            </div>
</div>
</div>
            
            
            <div id="freebook_wrap" style="background:none !important;">
    	<div class="cont">
        	<div class="col-6">
            	<div class="book_head">Get Your Free Set of Hard Copies Today</div>
				<p>Complete the form below to get the most comprehensive collection of literature about Jones Act law and Maritime injury.</p>
            	<div class="img"><img src="http://www.jonesactlaw.com/wp-content/themes/brazil-wp/images/hardcopy-icon.png" alt=""></div>
            </div>
            
            <div class="col-6" style="margin-top: 50px;">
                 <form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/df8e3e0d320854d640bf6d7c8a369340" class="infusion-form" method="POST">
    <input name="inf_form_xid" type="hidden" value="df8e3e0d320854d640bf6d7c8a369340" />
    <input name="inf_form_name" type="hidden" value="Library Free Downloads" />
    <input name="infusionsoft_version" type="hidden" value="1.50.0.41" />
    <div class="infusion-field">
        <label for="inf_field_FirstName">First Name *</label>
        <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" />
    </div>
    <div class="infusion-field">
        <label for="inf_field_LastName">Last Name *</label>
        <input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" type="text" />
    </div>
    <div class="infusion-field">
        <label for="inf_field_Address2Street1">Address *</label>
        <input class="infusion-field-input-container" id="inf_field_Address2Street1" name="inf_field_Address2Street1" type="text" />
    </div>
    <div class="infusion-field">
        <label for="inf_field_City2">City *</label>
        <input class="infusion-field-input-container" id="inf_field_City2" name="inf_field_City2" type="text" />
    </div>
    <div class="infusion-field">
        <label for="inf_field_State2">State *</label>
        <input class="infusion-field-input-container" id="inf_field_State2" name="inf_field_State2" type="text" />
    </div>
    <div class="infusion-field">
        <label for="inf_field_ZipFour2">Zip *</label>
        <input class="infusion-field-input-container" id="inf_field_ZipFour2" name="inf_field_ZipFour2" type="text" />
    </div>
    <div class="infusion-field">
        <label for="inf_field_Email">Email *</label>
        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" />
    </div>
    <div class="infusion-field">
        <label for="inf_field_Phone1">Phone</label>
        <input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" type="text" />
    </div>
    <div class="infusion-submit">
        <input type="submit" value="ORDER MY COPIES" />
    </div>
</form>
<script type="text/javascript" src="https://tschedule.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=e370abe00d8ff5e4b9a050d36c0821cd"></script>               
            </div>
            
            <div class="clear"></div>
        </div>
    </div>
            
            
            
            <?php

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



<?php get_footer(); ?>

<?php if(is_page(3391)){ ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
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

<?php } ?>