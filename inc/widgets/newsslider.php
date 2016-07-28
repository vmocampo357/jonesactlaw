<?php
//include_once str_replace("\\","/",get_template_directory()).'/inc/init.php';
class WebnusPostSliderWidget extends WP_Widget{

	function __construct(){

		$params = array(
		'description'=> 'Webnus Post Slider Widget',
		'name'=> 'Webnus-Post Slider'
		);

		parent::__construct('WebnusPostSliderWidget', '', $params);

	}

	public function form($instance){


		extract($instance);
		?>
		<p>
		<label for="<?php echo $this->get_field_id('title') ?>">Title:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('title') ?>"
		name="<?php echo $this->get_field_name('title') ?>"
		value="<?php if( isset($title) )  echo esc_attr($title); ?>"
		/>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('count') ?>">Posts Count: </label>
		<input type="text"
		
		class="widefat"
		id="<?php echo $this->get_field_id('count') ?>"
		name="<?php echo $this->get_field_name('count') ?>"
		
		value="<?php if( isset($count) )  echo esc_attr($count); ?>"/>
		</p>
		
		<?php 
	}
	
	
	public function widget($args, $instance){
		//36587311
		extract($args);
		extract($instance);
		?>
		<?php echo $before_widget; ?>
		<?php 
		if(!empty($title))
		echo $before_title.$title.$after_title; 
		
		?>
			<div class="postslider">
			<?php
			$query = new WP_Query( 'posts_per_page=3' );
			$output = '';
			$output .= '<div class="flexslider"><ul class="slides">';
			if($query->have_posts()){
				while($query->have_posts()) 
				{
					$query->the_post();
					
					$output .= '<li><a href="'.get_permalink().'">';
					$output .= get_the_image( array( 'meta_key' => array( 'thumbnail', 'thumbnail' ), 'size' => 'home_lfb' ,'echo'=>false) );
					$output .= '<p>'.get_the_title() . '</p>';
					$output .= '</a></li>';
					
				}
			}
			wp_reset_query();
			$output .= '</ul></div>';
			echo $output;
			?>
			<div class="clear"></div>
			</div>	 
		  <?php echo $after_widget; ?><!-- Disclaimer -->
		<?php 
	} 
}

add_action('widgets_init','register_webnus_postslider_widget'); 
function register_webnus_postslider_widget(){
	
	register_widget('WebnusPostSliderWidget');
	
}

