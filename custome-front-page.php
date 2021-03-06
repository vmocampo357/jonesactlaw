 <?php







get_header();



/* Template Name: Front Page */



?>



<section>





<?php  $eight_links = 3181; ?>



    <!-- eight links section -->

    <div id="header_w" class="wrapper">

      <div id="header-assests" class="cont">

        <div id="header_title">

          <h3> <?php the_field('title', $eight_links); ?>  </h3>

          <h4> <?php the_field('sub_title', $eight_links); ?>  </h4>

        </div>

        <div id="header_icons" class="cont2"> 

		

		

		<!-- Front page  8 links section -->

		<?php	if( get_field('links' , $eight_links ) ): ?>

		   <?php $i =1; ?>

			<?php while( has_sub_field('links' , $eight_links) ): ?>

				

				<a class="icon icon<?php echo $i; ?>" href="<?php the_sub_field('page_links' , $eight_links); ?>">

					<div class="bg"></div>

					<div class="text"> 

						<?php the_sub_field('name' , $eight_links); ?>

					</div>

				</a>

				<?php $i++ ; ?>

            <?php endwhile; ?>  

		<?php endif; ?>				



		<!--/ front page 8 links section -->

		

          <div class="clear"></div>

        </div>

        <!--<a href="#" id="header_arrow" class="pulse1"></a>--> </div>

    </div>

	<!--/ eight links section -->

	

	

	

	<div class="wrapper bg-white">

		<?php $the_query = new WP_Query( 'page_id=3196' ); 

					while ( $the_query->have_posts() ) :

					$the_query->the_post();

					/*the_title(); */

					the_content();

					endwhile;

					wp_reset_postdata();

					?>

	</div>



	

	



</section>	

 <!--

 

 <div id="contact_w" class="wrapper">

      <div class="top">

        <div class="cont2">

          <h3><span class="icon"></span> REACH OUT TO US </h3>

          <div class="text"> Fill out the quick contact form below to have your questions answered by the team at  Jones Act Law.com </div>

          <div class="clear"></div>

        </div>

      </div>

      <div class="cont2">

        <form class="mid" target="contact.html" method="post">

          <div class="left">

            <label> FIRST NAME *

              <input type="text" name="first_name" />

            </label>

            <label> EMAIL *

              <input type="text" name="email" />

            </label>

            <label> PHONE *

              <input type="text" name="phone" />

            </label>

          </div>

          <div class="right">

            <label> TELL US YOUR STORY *

              <textarea cols="20" rows="4" name="story"></textarea>

            </label>

            <input type="submit" name="submit" class="btn" value="SUBMIT" />

          </div>

          <div class="clear"></div>

        </form>

        <div class="bottom"> <span>400 Poydras Street Suite 2090 New Orleans, LA 70130</span> &nbsp;|&nbsp; <a href="#" class="arrow">Get Directions</a> &nbsp;|&nbsp; <span>Toll Free: (866) 723-4311</span> &nbsp;|&nbsp; <span>Fax: 504-680-4101</span> </div>

      </div>

    </div>

   

	

    <div id="aboutus_w" class="wrapper">

      <div id="aboutus" class="cont2">

        <h3> We are 100% Focused On Serving the Maritime Worker </h3>

        <div class="text_cont">

          <div class="img"></div>

          <div class="text">

            <h4> Our firm personally handles <span class="i">only</span> Maritime &amp; Jones Act claims on behalf of injured maritime workers. </h4>

            <p> We have helped hundreds of maritime workers put their lives back together after suffering an injury at work. We know how to get you proper and unbiased medical treatment, how to help you obtain enough money to live on while you recover, and how to secure the best future for you and your family. </p>

            <div class="btn_cont"><a href="#" class="btn"> LEARN MORE ABOUT US </a></div>

          </div>

          <div class="clear"></div>

        </div>

      </div>

    </div>

	

    <div id="free1_w" class="wrapper">

      <div id="free1" class="cont2">

        <h3> Free Resources for Offshore Injury Victims </h3>

        <div class="text"> If you're struggling with an offshore injury, these free resources can help navigate you through your situation. Each book offers valuable information specifically written for you. Feel free to download any of these books. </div>

        <div class="item">

          <div class="img img1"></div>

          <h4> Understanding Your Offshore Injury </h4>

          <p> If you're looking for material that is easy-to-understand and spells out maritime law, this is the book for you. “Understanding Your Offshore Injury: Insider Tips from a Jones Act Attorney that Could Protect You &amp; Your Family” discusses basic laws and provisions that protect maritime workers. </p>

          <a href="#" class="arrow"> Download Instantly </a> </div>

        <div class="item">

          <div class="img img2"></div>

          <h4> From Tragedy to Triumph </h4>

          <p> This book contains first-person stories from previous clients who, like you, suffered an offshore injury and came to our firm for help. These are their stories, told by them about their experience with our firm and their injury in general. The stories are both encouraging and enlightening, and you may be surprised by how similar your story is to theirs. </p>

          <a href="#" class="arrow"> Download Instantly </a> </div>

        <div class="clear"></div>

        <div class="btn_cont"> <a href="#" class="btn">VIEW ENTIRE COLLECTION</a> </div>

      </div>

    </div>

	

    <div id="cfaq_w" class="wrapper">

      <div id="cfaq" class="cont2">

        <h3> Questions About Maritime Injuries </h3>

        <div class="text_cont">

          <div class="text"> Here are some of the top questions we've been asked by our clients over the years. If you or your spouse have been injured while working offshore, the questions below may address many initial concerns you may have. </div>

          <a href="#" class="arrow"> Read More in Our FAQ Section </a> </div>

        <div class="question">

          <h4 class="sel"><span class="icon"></span> Should I See The Company Doctor And/Or Let Him Perform A Surgery On Me? </h4>

          <div class="answer"> It is very common for your employer to insist that you be seen by the company doctor if you are injured on the job.  In fact, sometimes this is written as a policy into your employment documents at the time of hire. However, they cannot force you to choose their doctor and there are several reasons you don’t want to go to a company selected doctor for your treatment after a maritime Jones Act injury.

            <div class="arrow_cont"><a href="#" class="arrow">Read More</a></div>

          </div>

        </div>

        <div class="question">

          <h4><span class="icon"></span> Should I Give A Recorded Statement? </h4>

          <div class="answer"> It is very common for your employer to insist that you be seen by the company doctor if you are injured on the job.  In fact, sometimes this is written as a policy into your employment documents at the time of hire. However, they cannot force you to choose their doctor and there are several reasons you don’t want to go to a company selected doctor for your treatment after a maritime Jones Act injury.

            <div class="arrow_cont"><a href="#" class="arrow">Read More</a></div>

          </div>

        </div>

        <div class="question">

          <h4><span class="icon"></span> How Will I Pay My Bills Now That I’m Hurt? </h4>

          <div class="answer"> It is very common for your employer to insist that you be seen by the company doctor if you are injured on the job.  In fact, sometimes this is written as a policy into your employment documents at the time of hire. However, they cannot force you to choose their doctor and there are several reasons you don’t want to go to a company selected doctor for your treatment after a maritime Jones Act injury.

            <div class="arrow_cont"><a href="#" class="arrow">Read More</a></div>

          </div>

        </div>

        <div class="question">

          <h4><span class="icon"></span> How Much Should My Employer Pay Me For My Injury? </h4>

          <div class="answer"> It is very common for your employer to insist that you be seen by the company doctor if you are injured on the job.  In fact, sometimes this is written as a policy into your employment documents at the time of hire. However, they cannot force you to choose their doctor and there are several reasons you don’t want to go to a company selected doctor for your treatment after a maritime Jones Act injury.

            <div class="arrow_cont"><a href="#" class="arrow">Read More</a></div>

          </div>

        </div>

        <div class="btn_cont"> <a href="#" class="btn"> READ MORE FAQS HERE </a> </div>

      </div>

    </div>

    <div id="feat_w" class="wrapper">

      <div id="feat" class="cont2">

        <div class="feat">

          <div class="img img1"></div>

          <h4> Articles </h4>

          <p> This site has hundreds of articles designed to give you a deeper understanding of the process surrounding maritime and Jones Act litigation. Get started. </p>

          <a href="#" class="arrow arrow1"> The Basics of Jones Act Law </a> </div>

        <div class="feat">

          <div class="img img2"></div>

          <h4> Videos </h4>

          <p> We have an extensive video library answering questions about maritime injury, Jones Act law, damages, personal injury awards, and much more. </p>

          <a href="#" class="arrow arrow1"> View Video Library </a> </div>

        <div class="feat">

          <div class="img img3"></div>

          <h4> Free Resources </h4>

          <p> If you're struggling with an offshore injury, these free resources can help navigate you through your situation. Feel free to download any of these books. </p>

          <a href="#" class="arrow arrow1"> Go to Resource Library </a> </div>

        <div class="clear"></div>

      </div>

    </div>

    <div id="testimonials_w" class="wrapper">

      <div id="testimonials" class="cont2">

        <h3> Client Testimonials </h3>

        <div class="text"> How do we treat our clients? Want to know more about our law firm and how we have helped others just like you? Watch what they have to say about us. </div>

        <div class="testimonial-assests">

          <div class="video_cont">

            <iframe width="444" height="249" src="https://www.youtube-nocookie.com/embed/QdFrHUwk4Oo" allowfullscreen></iframe>

          </div>

          <div class="text"> "He was told by his last surgeon he will never be able to make it offshore, and this is a man who was going to school and getting his upgrades in, and really going for his mate's license and eventually going to become a captain.  This was his career. This was what he was going to do the rest of his life. And because of the negligence of the captain, and the selfishness, it's not gonna happen anymore." </div>

          <div class="author"> -Sue &amp; Joe Snyder </div>

        </div>

        <div class="testimonial-assests">

          <div class="video_cont">

            <iframe width="444" height="249" src="https://www.youtube-nocookie.com/embed/67_21pfQ_rg" allowfullscreen></iframe>

          </div>

          <div class="text"> "After the initial visit that I had with The Young Firm, with Timothy Young, I felt better. I felt more at ease, and I just felt in my heart that I had picked the right company to represent me." </div>

          <div class="author"> -Joshua Johnson </div>

        </div>

        <div class="clear"></div>

        <div class="btn_cont"><a href="#" class="btn"> VIEW CLIENT STORIES </a></div>

      </div>

    </div>

    

    

    

    <div id="injury_selector_w" class="wrapper">

      <div id="injury_selector" class="cont">

        <h3> Select Your Position Below </h3>

        <div class="injury_cont2">

          <div class="injury_cont">

            <div class="injury_w">

              <div class="injury">

                <div class="top">I Am An Injured</div>

                <div class="job"> Captain or Pilot </div>

                <div class="arrow_cont"><a href="#" class="arrow arrow2">Learn More</a></div>

              </div>

            </div>

            <div class="injury_w">

              <div class="injury">

                <div class="top">I Am An Injured</div>

                <div class="job"> Crane Operator </div>

                <div class="arrow_cont"><a href="#" class="arrow arrow2">Learn More</a></div>

              </div>

            </div>

            <div class="injury_w">

              <div class="injury">

                <div class="top">I Am An Injured</div>

                <div class="job"> Deckhand </div>

                <div class="arrow_cont"><a href="#" class="arrow arrow2">Learn More</a></div>

              </div>

            </div>

            <div class="injury_w">

              <div class="injury">

                <div class="top">I Am An Injured</div>

                <div class="job"> Driller </div>

                <div class="arrow_cont"><a href="#" class="arrow arrow2">Learn More</a></div>

              </div>

            </div>

            <div class="injury_w">

              <div class="injury">

                <div class="top">I Am An Injured</div>

                <div class="job"> Captain or Pilot1 </div>

                <div class="arrow_cont"><a href="#" class="arrow arrow2">Learn More</a></div>

              </div>

            </div>

            <div class="injury_w">

              <div class="injury">

                <div class="top">I Am An Injured</div>

                <div class="job"> Crane Operator1 </div>

                <div class="arrow_cont"><a href="#" class="arrow arrow2">Learn More</a></div>

              </div>

            </div>

            <div class="injury_w">

              <div class="injury">

                <div class="top">I Am An Injured</div>

                <div class="job"> Deckhand1 </div>

                <div class="arrow_cont"><a href="#" class="arrow arrow2">Learn More</a></div>

              </div>

            </div>

            <div class="injury_w">

              <div class="injury">

                <div class="top">I Am An Injured</div>

                <div class="job"> Driller1 </div>

                <div class="arrow_cont"><a href="#" class="arrow arrow2">Learn More</a></div>

              </div>

            </div>

          </div>

          <div class="clear"></div>

          <div class="arrow_left"></div>

          <div class="arrow_right"></div>

        </div>

      </div>

    </div>

    

    

    

    

    <div id="free2_w" class="wrapper">

      <div id="free2" class="cont2">

        <div class="item">

          <div class="img img1"><img src="<?php bloginfo('template_url');?>/accests/images/free2_img1.png" /></div>

          <h4> Free Webinar </h4>

          <p> Have specific questions you want answered? Join our next webinar. It’s confidential and anonymous and you can hear questions from others that you may not have thought to ask. Sign up today. </p>

          <a href="#" class="arrow"> Sign Up For Our Next Webinar </a> </div>

        

        <div class="clear"></div>

      </div>

    </div>

    <div id="footer_w" class="wrapper">

      <div id="footer" class="cont">

        <div class="logo_cont"></div>

        <div class="sec sec1">

          <h4> WHO WE ARE </h4>

          <ul>

            <li><a href="#"> About Us </a></li>

            <li><a href="#"> Site Map </a></li>

            <li><a href="#"> Contact Us </a></li>

          </ul>

        </div>

        <div class="sec sec1">

          <h4> QUICK LINKS </h4>

          <ul>

            <li><a href="#"> Cases We Handle </a></li>

            <li><a href="#"> People We Help </a></li>

            <li><a href="#"> Client Stories </a></li>

            <li><a href="#"> FAQ </a></li>

            <li><a href="#"> Free Resources </a></li>

          </ul>

        </div>

        <div class="sec sec1">

          <h4> ABOUT THIS SITE </h4>

          <ul>

            <li><a href="#"> Overview </a></li>

            <li><a href="#"> Legal Disclaimer </a></li>

            <li><a href="#"> Privacy Policy </a></li>

          </ul>

        </div>

        <div class="sec sec1">

          <h4> OUR SITES </h4>

          <ul>

            <li><a href="http://jonesactlaw.com/"> JonesActLaw.com </a></li>

            <li><a href="http://theyoungfirm.com/"> TheYoungFirm.com </a></li>

          </ul>

        </div>

        <div class="clear"></div>

        <div class="sec sec3">

          <h4> NEW ORLEANS OFFSHORE INJURY LAWYER </h4>

          <div>

            <div> The Young Firm

              &nbsp;&nbsp;|&nbsp;&nbsp;

              400 Poydras Street, Ste. 2090   New Orleans, LA 70130 </div>

            <div> Toll Free: (866) 666-5129

              &nbsp;&nbsp;|&nbsp;&nbsp;

              Fax: 504-680-4101 </div>

          </div>

        </div>

        <div class="sec sec1">

          <h4 class="nospace"> CONNECT WITH US </h4>

          <div class="sn_cont"> <a href="#" class="sn fb"></a> <a href="#" class="sn tw"></a> <a href="#" class="sn li"></a> <a href="#" class="sn gp"></a>

            <div class="clear"></div>

          </div>

        </div>

        <div class="clear"></div>

      </div>

    </div>

  </div>  -->

<script>

console.log("Uhhh");

//jQuery(document).on("ready",function(e){
	console.log("Uhhh should be working?");
	var first_image = jQuery("#aboutus_w");
	
	console.log(first_image);
	
		first_image.before("<div style='text-align:center;height:301px;width:100%;background-color:white;"+
		"background-image:url(http://www.jonesactlaw.com/wp-content/uploads/2016/05/feature-focused-background-1.png);"+
		"background-repeat:repeat-x;'><a href='http://www.jonesactlaw.com/Future-Focused-Formula'><img src='http://www.jonesactlaw.com/wp-content/uploads/2015/10/feature-focused-banner.png' /></a></div>");
		
		first_image.after("<div style='text-align:center;height:301px;width:100%;background-color:white;"+
		"background-image:url(http://www.jonesactlaw.com/wp-content/uploads/2016/05/promises-repeat.png);"+
		"background-repeat:repeat-x;'><img src='http://www.jonesactlaw.com/wp-content/uploads/2016/05/promises.png' /></div>");
//});

</script>

<?php get_footer(); ?>