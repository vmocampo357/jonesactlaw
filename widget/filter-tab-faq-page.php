<?php

// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('Filter Tab Widget FAQ Page', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Add Tab Post', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output


?>
<?php  $filter_page_one = 3446; ?>
<div class="controls">
<?php	if( get_field  ('filter' , $filter_page_one ) ): ?>
	<?php while( has_sub_field('filter' , $filter_page_one) ): ?>

 <button class="filter" data-filter=".<?php the_sub_field  ('checkbox' , $filter_page_one); ?> "><?php the_sub_field('page_categor' , $filter_page_one); ?></button>
<?php endwhile; ?>		   
<?php endif; ?>
</div>

<div id="tab_content">
<ul id="Container" class="container">

<?php	if( get_field('filter' , $filter_page_one ) ): ?>
	<?php while( has_sub_field('filter' , $filter_page_one) ): ?>
             <li class="col-4 mix <?php the_sub_field  ('checkbox' , $filter_page_one); ?>">
                	<div class="webint">
                    	<div class="titile-head"><a href="<?php the_sub_field('page_link' , $filter_page_one); ?>"><?php the_sub_field('page_name' , $filter_page_one); ?> </a></div>
                        <div class="text">CATEGORY:<?php the_sub_field('page_categor' , $filter_page_one); ?></div>
                        <a href="<?php the_sub_field('page_link' , $filter_page_one); ?>" class="more">MORE INFO</a>
                    </div>                   
                </li>
<?php endwhile; ?>		   
<?php endif; ?>

</ul>
</div>


<style>
.container .mix{
  display: none;
}

</style>

<script>
$(function(){
  $('#Container').mixItUp();
});
</script>

<?php
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>

<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
