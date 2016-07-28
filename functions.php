<?php
load_theme_textdomain('WEBNUS_TEXT_DOMAIN', get_template_directory().'/languages');
class webnus_description_walker extends Walker_Nav_Menu
{
	
	function start_el(&$output, $item, $depth=0, $args=array(),$current_object_id=0)
	{
		
		$this->curItem = $item;
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		/**
		 * Filter the CSS class(es) applied to a menu item's <li>.
		 *
		 * @since 3.0.0
		 *
		 * @param array  $classes The CSS classes that are applied to the menu item's <li>.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of arguments. @see wp_nav_menu()
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		/**
		 * Filter the ID applied to a menu item's <li>.
		 *
		 * @since 3.0.1
		 *
		 * @param string The ID that is applied to the menu item's <li>.
		 * @param object $item The current menu item.
		 * @param array $args An array of arguments. @see wp_nav_menu()
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
		$is_mega_menu = '';
		
		if('page'  == $item->object)
		{
			$post_obj = get_post( $item->object_id, 'OBJECT' );
			
			$is_mega = get_post_meta($item->object_id,'_is_mega_menu',true);
			
			if(!empty($is_mega) && $is_mega['is_mega_menu'] == 'yes')
						$is_mega_menu .= ' mega ';
		}
		
		
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
		/**
		 * Filter the HTML attributes applied to a menu item's <a>.
		 *
		 * @since 3.6.0
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's <a>, empty strings are ignored.
		 *
		 *     @type string $title  The title attribute.
		 *     @type string $target The target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param object $item The current menu item.
		 * @param array  $args An array of arguments. @see wp_nav_menu()
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
		$attributes = '';
		$item_output = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		if('page'  == $item->object)
		{
			$post_obj = get_post( $item->object_id, 'OBJECT' );
			
			$is_mega = get_post_meta($item->object_id,'_is_mega_menu',true);
			
			if(!empty($is_mega) && $is_mega['is_mega_menu'] == 'yes')
						$item_output .= do_shortcode($post_obj->post_content);
			else
			{
				$item_output .= $args->before;
				$item_output .= '<a'.$attributes. ' data-description="' .$item->description .'">';
				/** This filter is documented in wp-includes/post-template.php */
				if(!empty($item->icon))
				$item_output .= '<i class="'.$item->icon.'"></i>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;
			}
		}
		else{
		$item_output .= $args->before;
		$item_output .= '<a '. $attributes. ' data-description="' .$item->description .'">';
		/** This filter is documented in wp-includes/post-template.php */
		if(!empty($item->icon))
		$item_output .= '<i class="'.$item->icon.'"></i>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		}
		/**
		 * Filter a menu item's starting output.
		 *
		 * The menu item's starting output only includes $args->before, the opening <a>,
		 * the menu item's title, the closing </a>, and $args->after. Currently, there is
		 * no filter for modifying the opening and closing <li> for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string $item_output The menu item's starting HTML output.
		 * @param object $item        Menu item data object.
		 * @param int    $depth       Depth of menu item. Used for padding.
		 * @param array  $args        An array of arguments. @see wp_nav_menu()
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			
			
	}
}
include_once('inc/init.php');
include_once get_template_directory(). '/inc/visualcomposer/init.php';
$webnus_options = new webnus_options();
/******************************/
/*
/*		Theme Customization
/*
/******************************/
add_theme_support( 'woocommerce' );
add_theme_support('post-thumbnails');
//add_filter('show_admin_bar', '__return_false');
add_filter('excerpt_length', 'webnus_excerpt_length', 999);
function webnus_excerpt_length($len) {
    GLOBAL $webnus_options;
    return $webnus_options->webnus_blog_excerpt_len();
}
function webnus_excerpt_more($more) {
    global $post, $webnus_options;
    
    return '... <br><br><a class="readmore" href="' . get_permalink($post->ID) . '">' . $webnus_options->webnus_blog_readmore_text() . '</a>';
}
add_filter('excerpt_more', 'webnus_excerpt_more');
function webnus_limit_content($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
/******************************/
/*
/*		Register Menus
/*
/******************************/
function webnus_register_menus() {
    register_nav_menus(
            array(
                //'header-menu' => __('Header Menu', 'WEBNUS_TEXTDOMAIN'),
                'footer-menu' => __('Footer Menu', 'WEBNUS_TEXTDOMAIN'),
                'header-top-menu' => __('Topbar Menu', 'WEBNUS_TEXTDOMAIN'),
				'leftnav-menu' => __('Left-Nav Menu', 'WEBNUS_TEXTDOMAIN'),
				'onepage-header-menu' => __('Onepage Header Menu', 'WEBNUS_TEXTDOMAIN'),
				
            )
    );
	
}
add_action('init', 'webnus_register_menus');
register_nav_menus( array(
 'header-menu' => 'Header Menu',
 'footer_who_we_are' => 'Footer Who We Are',
 'footer_quick_links' => 'Footer Quick Links',
) );
/******************************/
/*
/*		Header Assets
/*
/******************************/
include_once get_template_directory() . '/inc/dynamicfiles/dyncss.php';
function webnus_script_loader(){
	
	GLOBAL $webnus_options;
	
	/***************************************/
	/*			JQuery
	/***************************************/
	
	wp_enqueue_script("jquery");
	
	/***************************************/
	/*			Main style.css
	/***************************************/
	
	$main_style_uri = ($webnus_options->webnus_css_minifier())?get_template_directory_uri().'/css/master-min.php':get_template_directory_uri().'/css/master.css';
	wp_register_style( 'main-style', $main_style_uri );
	wp_enqueue_style('main-style');
	
	
	/***************************************/
	/*			Dynamic Css dyncss.php
	/***************************************/
	if ( $GLOBALS['webnus_dyncss'] ) {
		wp_enqueue_style('webnus-dynamic-styles',get_template_directory_uri() . '/css/dyncss.css');
		wp_add_inline_style( 'webnus-dynamic-styles', $GLOBALS['webnus_dyncss']);
	}
	
	/***************************************/
	/*			Google fonts
	/***************************************/
	
	
	
	wp_register_style( 'google_fonts_css', $webnus_options->webnus_get_google_fonts() );
	wp_enqueue_style('google_fonts_css');
	
	
	
	/***************************************/
	/*			Default Google Font
	/***************************************/
	
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'gfont-style', "$protocol://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRoboto+Slab:300,400" );
	
	
	/***************************************/
	/*			Comment Reply JS
	/***************************************/
	
	
	if ( is_singular() && $webnus_options->webnus_allow_comments_on_page() )
		wp_enqueue_script( 'comment-reply' );
	
}
add_action('wp_enqueue_scripts', 'webnus_script_loader');
/******************************/
/*
/*		Footer Assets
/*
/******************************/
function webnus_footer_script_loader(){
	wp_enqueue_script(
            'jcarousel', get_template_directory_uri() . '>/js/jcarousel.js', array( 'jquery' ), null, true
    );
	wp_enqueue_script(
            'doubletab', get_template_directory_uri() . '>/js/doubletaptogo.js', array( 'jquery' ), null, true
    );
	wp_enqueue_script(
            'isotop', get_template_directory_uri() . '>/js/isotope.js', array( 'jquery' ), null, true
    );
	wp_enqueue_script(
            'bootstrap-alert', get_template_directory_uri() . '>/js/bootstrap-alert.js', array( 'jquery' ), null, true
    );
	wp_enqueue_script(
            'bootstrap-dropdown', get_template_directory_uri() . '>/js/bootstrap-dropdown.js', array( 'jquery' ), null, true
    );
	wp_enqueue_script(
            'bootstrap-tab', get_template_directory_uri() . '>/js/bootstrap-tab.js', array( 'jquery' ), null, true
    );
	  	wp_enqueue_script(
            'bootstrap-tooltip', get_template_directory_uri() . '>/js/bootstrap-tooltip.js', array( 'jquery' ), null, true
    );
	wp_enqueue_script(
            'pretty-photo', get_template_directory_uri() . '>/js/jquery.prettyPhoto.js', array( 'jquery' ), null, true
    );
	  
	wp_enqueue_script(
            'easy-pie', get_template_directory_uri() . '>/js/jquery.easy-pie-chart.js', array( 'jquery' ), null, true
    );
	wp_enqueue_script(
            'flex-slider', get_template_directory_uri() . '>/js/jquery.flexslider-min.js', array( 'jquery' ), null, true
    );
    wp_enqueue_script(
            'superslides', get_template_directory_uri() . '/js/jquery.superslides.js', array( 'jquery' ), null, true
    );
    wp_enqueue_script(
            'parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array( 'jquery' ), null, true
    );
    wp_enqueue_script(
            'visible', get_template_directory_uri() . '/js/jquery.visible.min.js', array( 'jquery' ), null, true
    );
    wp_enqueue_script(
            'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), null, true
    );
    wp_enqueue_script(
            'msaonry', get_template_directory_uri() . '/js/jquery.masonry.min.js', array( 'jquery' ), null, true
    );
	wp_enqueue_script(
            'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), null, true
    );
    wp_enqueue_script(
            'validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery' ), null, true
    );	
    wp_enqueue_script(
            'custom_script', get_template_directory_uri() . '/js/brazil-custom.js', array( 'jquery' ), null, true
    );
	
	
	
}
add_action('wp_enqueue_scripts', 'webnus_footer_script_loader');
add_action('wp_enqueue_scripts', 'webnus_api', 10);
function webnus_api() {
	// youtube
	wp_register_script( 'youtube-api', get_template_directory_uri() . '/js/youtube-api.js', array(), false, false);
}
/******************************/
/*
/*		Add Tracking Code Hook
/*
/******************************/
/***************************************/
/*			Page Background 
/***************************************/
function webnus_page_background_override(){
GLOBAL $webnus_page_options_meta;
$meta = $webnus_page_options_meta->the_meta();
if(!empty( $meta )){
	$bgcolor =  isset($meta['webnus_page_options'][0]['background_color'])?$meta['webnus_page_options'][0]['background_color']:null;
	$bgimage =  isset($meta['webnus_page_options'][0]['the_page_bg'])?$meta['webnus_page_options'][0]['the_page_bg']:null;
	$bgpercent =  isset($meta['webnus_page_options'][0]['bg_image_100'])?$meta['webnus_page_options'][0]['bg_image_100']:null;
	$bgrepeat =  isset($meta['webnus_page_options'][0]['bg_image_repeat'])?$meta['webnus_page_options'][0]['bg_image_repeat']:null;
			
			$out = "";
		
			$out .= '<style type="text/css" media="screen">';
			
			$out .='body{ ';
					
				if(!empty($bgcolor)){
					$out .= "background-image:url('');background-color:{$bgcolor};";
				}
				if(!empty($bgimage))
				{
					if($bgrepeat == 1)
						$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat;";
					else if($bgrepeat==2)
						$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat-x;";
					else if($bgrepeat==3)
						$out .=  " background-image:url('{$bgimage}'); background-repeat:repeat-y;";
					else if($bgrepeat==0)
					{
						if($bgpercent)
							$out .=  " background-image:url('{$bgimage}'); background-repeat:no-repeat; background-size:100% auto; ";
						else
							$out .=  " background-image:url('{$bgimage}'); background-repeat:no-repeat; ";
							
					}
				}
		
			
			if($bgpercent == 'yes' && !empty($bgimage)) 
			$out .= 'background-size:cover;-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover; background-attachment:fixed;
					background-position:center; ';
			$out .= ' } </style>';
			
	echo $out;
/***************************************/
/*			End Page Background 
/***************************************/
}
}
function webnus_wphead_action(){
	
	GLOBAL $webnus_options;
	global $post;
	
	echo $webnus_options->webnus_background_image_style();
	echo $webnus_options->webnus_tracking_code();
	echo $webnus_options->webnus_space_before_head();
	if(!is_404() && isset($post))
		webnus_page_background_override(); // referred to up
}
add_action('wp_head', 'webnus_wphead_action');
/******************************/
/*
/*		Add Color Picker
/*
/******************************/
add_action( 'admin_enqueue_scripts', 'webnus_enqueue_color_picker' );
function webnus_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_style( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-core' ,null,null,null,false);
	wp_enqueue_style( 'thickbox' );
	wp_enqueue_script( 'thickbox' );
    wp_enqueue_script( 'my-script-handle', get_template_directory_uri().'/inc/nc-options/color.js', array( 'wp-color-picker' ), false, true );
}
add_action('admin_enqueue_scripts', 'webnus_base64_include_js');
function webnus_base64_include_js(){
	
	
	
    wp_enqueue_script(
            'base64', get_template_directory_uri() . '/js/base64.js', null, null, true
    );
}
/******************************/
/*
/*		Custom Admin Logo
/*
/******************************/
function webnus_custom_login_logo() {
    GLOBAL $webnus_options;
    $logo = $webnus_options->webnus_admin_login_logo();
    if(isset($logo) && !empty($logo))
    {
        echo '<style type="text/css">'.
             'h1 a { background-image:url('.$logo.') !important; }'.
         '</style>';
    }
}
add_action( 'login_head', 'webnus_custom_login_logo' );
	
/******************************/
/*
/*		Images Size
/*
/******************************/
$portfolio_image_width = $webnus_options->webnus_portfolio_image_width();
$portfolio_image_height = $webnus_options->webnus_portfolio_image_height();
add_image_size("portfolio_full", $portfolio_image_width, $portfolio_image_height, true);
// Theme Thumbs
add_image_size("home_lfb", 420 ,237, true);
add_image_size("blog2_thumb", 420,390, true);
add_image_size("lfb_thumb", 140,110, true);
add_image_size("latestfromblog", 590,260, true);
add_image_size("blog_timeline",380,302, true);
add_image_size("portfolio_thumb",720,549, true);
/*
 *ICONFONTS SCRIPT AND CSS ADDED 
 */
add_action( 'admin_enqueue_scripts', 'webnus_iconfonts_enqueue' );
function webnus_iconfonts_enqueue( $hook_suffix ) {
    	
   wp_enqueue_style(
            'iconfonts-style', get_template_directory_uri() . '/inc/iconfonts/style.css', null, null
    );
  wp_enqueue_style(
            'iconfonts-style-gen', get_template_directory_uri() . '/inc/iconfonts/custom.css', null, null
   );
 
}
if (!isset($content_width))
    $content_width = 940;
if (false)
    wp_link_pages(); 
if(false){
    posts_nav_link();
    paginate_links();
    the_tags();
    get_post_format(0);
}
if (function_exists('add_theme_support')) {
    add_theme_support('automatic-feed-links');	
    add_theme_support( 'post-formats', array( 'aside','gallery', 'link', 'quote','image','video','audio' ) );
}
/*
OneClick xml importer
*/
if(isset($_POST['webnus_oneclick_importer_all']))
{
add_action('admin_menu', 'webnus_include_all_demo_at_page_loaded');
}
function webnus_include_all_demo_at_page_loaded(){
    	
    
	
	
	
	
	
}
if(isset($_POST['webnus_oneclick_importer_page']))
{
add_action('admin_init', 'webnus_include_page_demo_at_page_loaded');
}
function webnus_include_page_demo_at_page_loaded(){
    	
    
	ob_start();
    if ( ! class_exists( 'WP_Import' ) )
    	include_once get_template_directory() . "/inc/plugins/wordpress-importer/wordpress-importer.php";
	
    $myimporter = new WP_Import();
    $myimporter->import(get_template_directory() . '/inc/dummy-data/dummy2.xml');
	ob_end_clean();
}
if(isset($_POST['webnus_oneclick_importer_templatera']))
{
add_action('admin_init', 'webnus_include_templatera_demo_at_page_loaded');
}
function webnus_include_templatera_demo_at_page_loaded(){
    	
    ob_start();
	
    if ( ! class_exists( 'WP_Import' ) )
    	include_once get_template_directory() . "/inc/plugins/wordpress-importer/wordpress-importer.php";
	
    $myimporter = new WP_Import();
    $myimporter->import(get_template_directory() . '/inc/dummy-data/dummy3.xml');
	
	ob_end_clean();
}
if(isset($_POST['webnus_oneclick_setup_reading']))
{
add_action('admin_init', 'webnus_setup_default_reading_settings');
}
function webnus_setup_default_reading_settings()
{
	
	
	$home = get_page_by_title( 'Home 1 – Business' );
	if(!empty($home))
	{
		update_option( 'page_on_front', $home->ID );
		update_option( 'show_on_front', 'page' );
	}
// Set the blog page
	$blog   = get_page_by_title( 'Blog' );
	if(!empty($blog))
	{
		update_option( 'page_for_posts', $blog->ID );
	}
	
	
}
/*
 * Add Topbar Menu link to Theme option
 * 
 */
function add_webnus_admin_bar_link() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
	$wp_admin_bar->add_menu( array(
	'id' => 'webnus_themeoption_link',
	'title' => __( 'Webnus Theme Option','WEBNUS_TEXT_DOMAIN'),
	'href' => site_url().'/wp-admin/themes.php?page=webnus_theme_options',
	) );
}
add_action('admin_bar_menu', 'add_webnus_admin_bar_link',25);
/*
Woocommerce js error hack
*/
add_action( 'wp_enqueue_scripts', 'webnus_custom_frontend_scripts' );
function webnus_custom_frontend_scripts() {
		if (class_exists('Woocommerce')) {
		global $post, $woocommerce;
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		
		if(file_exists($woocommerce->plugin_path() . '/assets/js/jquery-cookie/jquery.cookie'.$suffix.'.js'))
		{
			rename($woocommerce->plugin_path() . '/assets/js/jquery-cookie/jquery.cookie'.$suffix.'.js', $woocommerce->plugin_path() . '/assets/js/jquery-cookie/jquery_cookie'.$suffix.'.js');
			
			
		}
		wp_deregister_script( 'jquery-cookie' ); 
		wp_register_script( 'jquery-cookie', $woocommerce->plugin_url() . '/assets/js/jquery-cookie/jquery_cookie'.$suffix.'.js', array( 'jquery' ), '1.3.1', true );
}
}
add_action('print_media_templates', 'webnus_print_media_templates'); 
function webnus_print_media_templates(){
  // define your backbone template;
  // the "tmpl-" prefix is required,
  // and your input field should have a data-setting attribute
  // matching the shortcode name
  ?>
  <script type="text/html" id="tmpl-my-custom-gallery-setting">
    <label class="setting">
      <span><?php _e('Gallery Type'); ?></span>
      <select data-setting="webnus_gallery_type">
        <option value="normal"> Normal </option>
        <option value="slider"> Slider </option>
 
      </select>
    </label>
  </script>
  <script>
    jQuery(document).ready(function(){
      // add your shortcode attribute and its default value to the
      // gallery settings list; $.extend should work as well...
      _.extend(wp.media.gallery.defaults, {
        my_custom_attr: 'default_val'
      });
      // merge default gallery settings template with yours
      wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
        template: function(view){
          return wp.media.template('gallery-settings')(view)
               + wp.media.template('my-custom-gallery-setting')(view);
        }
      });
    });
  </script>
  <?php
};
function setViews($postID) {
    $count_key = 'webnus_views';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
    return $count; /* so you can show it */
}
function getViews($postID) {
    $count_key = 'webnus_views';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
	}
    return $count; /* so you can show it */
}
if(function_exists('vc_set_as_theme'))
{
	add_action('init','webnus_set_vc_as_theme');
}
function webnus_set_vc_as_theme()
{
	
	vc_set_as_theme($notifier = false);
	
}
	
	
// Open Graph
add_action('wp_head', 'add_fb_open_graph_tags');
function add_fb_open_graph_tags() {
	if (is_single()) {
		global $post;
		if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
			$thumbnail_id = get_post_thumbnail_id($post->ID);
			$thumbnail_object = get_post($thumbnail_id);
			$image = $thumbnail_object->guid;
		} else {	
			$image = ''; // Change this to the URL of the logo you want beside your links shown on Facebook
		}
		//$description = get_bloginfo('description');
		$description = my_excerpt( $post->post_content, $post->post_excerpt );
		$description = strip_tags($description);
		$description = str_replace("\"", "'", $description);
?>
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php echo $image; ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<?php 	}
}
function my_excerpt($text, $excerpt){
    if ($excerpt) return $excerpt;
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = strip_tags($text);
    $excerpt_length = apply_filters('excerpt_length', 55);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = preg_split("/[\n
	 ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
    } else {
            $text = implode(' ', $words);
    }
    return apply_filters('wp_trim_excerpt', $text, $excerpt);
}
/*
 * MIMETYPE fonts
 * 
 */
 
add_filter('upload_mimes', 'webnus_custom_font_mimes');
function webnus_custom_font_mimes ( $existing_mimes=array() ) {
 
$existing_mimes['woff'] = 'application/x-font-woff';
$existing_mimes['ttf'] = 'application/x-font-ttf';
$existing_mimes['eot'] = 'application/vnd.ms-fontobject"';
$existing_mimes['svg'] = 'image/svg+xml"';
 return $existing_mimes;
}
 
//Custom post types
function create_posttype_case_results() {
	register_post_type( 'case-results',
		array(
			'labels' => array(
				'name' => __( 'Case Results' ),
				'singular_name' => __( 'Case Result' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'case-results'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_case_results' );
flush_rewrite_rules();
function create_posttype_faqs() {
	register_post_type( 'faqs',
		array(
			'labels' => array(
				'name' => __( 'FAQs' ),
				'singular_name' => __( 'FAQs' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'faqs'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_faqs' );
flush_rewrite_rules();
function create_posttype_library() {
	register_post_type( 'library',
		array(
			'labels' => array(
				'name' => __( 'Library' ),
				'singular_name' => __( 'Library' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'library'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_library' );
flush_rewrite_rules();
function create_posttype_news() {
	register_post_type( 'news',
		array(
			'labels' => array(
				'name' => __( 'News' ),
				'singular_name' => __( 'News' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'news'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_news' );
flush_rewrite_rules();
function create_posttype_practice_areas() {
	register_post_type( 'practice-areas',
		array(
			'labels' => array(
				'name' => __( 'Practice Areas' ),
				'singular_name' => __( 'Practice Area' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'practice-areas'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_practice_areas' );
flush_rewrite_rules();
function create_posttype_reports() {
	register_post_type( 'reports',
		array(
			'labels' => array(
				'name' => __( 'Reports' ),
				'singular_name' => __( 'Reports' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'reports'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_reports' );
flush_rewrite_rules();
function create_posttype_testimonials() {
	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonials' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testimonials'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_testimonials' );
flush_rewrite_rules();
function create_posttype_video() {
	register_post_type( 'video',
		array(
			'labels' => array(
				'name' => __( 'Video' ),
				'singular_name' => __( 'Video' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'video'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_video' );
flush_rewrite_rules();
function create_posttype_attorneys() {
	register_post_type( 'attorneys',
		array(
			'labels' => array(
				'name' => __( 'Attorneys' ),
				'singular_name' => __( 'Attorneys' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'attorneys'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_attorneys' );
flush_rewrite_rules();
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support('post-thumbnails');
}
function enable_comments_custom_post_type() {
 add_post_type_support( 'library', 'comments' );
}
add_action( 'init', 'enable_comments_custom_post_type', 11 );
$post_types = array('attorneys', 'video', 'news', 'reports', 'library' , 'testimonials','sign-up','thank-you');
foreach ( $post_types as $type ) {
add_post_type_support( $type, 'thumbnail' );
}
function create_posttype_signups() {
	register_post_type( 'sign-up',
		array(
			'labels' => array(
				'name' => __( 'Sign-Up' ),
				'singular_name' => __( 'Sign-Up' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'sign-up'),
			'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'create_posttype_signups' );
flush_rewrite_rules();
/*
 * Function that validates a field's length.
 * 
 */
if ( ! function_exists( 'webnus_validate_length' ) ) {
	function webnus_validate_length( $fieldValue, $minLength ) {
		// First, remove trailing and leading whitespace
		return ( strlen( trim( $fieldValue ) ) > $minLength );
	}
}
/* ======================= add widgetes=============================*/
register_sidebar( array(
					'name' => __('Filter Tab FAQ Page Area', 'twentytwelve' ),
					'id' => 'filter-tab-faq-page',
					'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget' => '</aside>',
					'before_title' => '<h3 class="">',
					'after_title' => '</h3>',
				) );
				include "widget/filter-tab-faq-page.php" ; 
				
				register_sidebar( array (
					'name' => __( 'Singles Contact Wrap'),
					'id' => 'single-contact-wrap',
					'description' => __( 'Single Posts Contact Wrap'),
					'before_widget' => '',
					'after_widget' => "",
					'before_title' => '',
					'after_title' => '',
				) );
/* creating shortcode sidebar */
function add_custom_types_to_news( $query ) {
	if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$post_types = array( 'post', 'news' );
		$query->set( 'post_type', $post_types );
		return $query;
	}
}
add_filter( 'pre_get_posts', 'add_custom_types_to_news' );
/*add_filter('the_content','execute_php',100);
function execute_php($html){
     if(strpos($html,"<?php;")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}*/
//[final_results]
function final_results_func($points){ ?>
<div class="col-md-6 results-left">
<p><strong>Complete</strong></p>
<br />
<h2>So, How did You Do?</h2>
<br />
<p>Rating your claim: Remember that the above points are really only basic guidelines and may not apply to your specific situation. Hopefully the answers got you thinking about your claim and how to best protect yourself moving forward. And with many of the answers above, even if you scored low on the questions, there may be ways to minimize or avoid the challenges to your claim.</p>
<!--<p>Thanks for using our calculator! You can download <a target="_blank" style="color:blue;" href="http://www.jonesactlaw.com/wp-content/uploads/2016/07/JAL-Rate-Your-Claim-Calculator-Download.pdf">this PDF</a> version for future use.</p>!-->
<p>Thanks for using our calculator! Submit the form below to get a free, PDF version of the calculator!</p>
<script type="text/javascript" src="https://tschedule.infusionsoft.com/app/form/iframe/ea47e1967bb06c43965f4ca46a743a13"></script>
<form accept-charset="UTF-8" action="https://tschedule.infusionsoft.com/app/form/process/ea47e1967bb06c43965f4ca46a743a13" class="infusion-form" method="POST">
    <input name="inf_form_xid" type="hidden" value="ea47e1967bb06c43965f4ca46a743a13" />
    <input name="inf_form_name" type="hidden" value="Rate Claim Webform" />
    <input name="infusionsoft_version" type="hidden" value="1.55.0.65" />
    <div class="infusion-field">
        <label for="inf_field_FirstName">First Name *</label>
        <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" />
    </div>
    <div class="infusion-field">
        <label for="inf_field_Email">Email *</label>
        <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" />
    </div>
    <div class="infusion-submit">
        <input type="submit" value="Submit" />
    </div>
</form>
<script type="text/javascript" src="https://tschedule.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=e370abe00d8ff5e4b9a050d36c0821cd"></script>

<p>&nbsp;</p>
<a href="javascript:location.reload();" id="start_again">Start Over</a>
</div>
<div class="col-md-6 results-right">
<br />
<h2>Your Score</h2>
<h3><?php echo $points[0]; ?></h3>
<?php if ($points[0] <= 20) { ?>
	<p>&nbsp;</p><p>Some of the answers you gave indicate that you will face multiple challenges in pursuing your claim.  This does not necessarily mean you don’t have a valuable claim.  All it means is that you can expect the company to throw the usual defenses at you while you move forward trying to collect a fair settlement.</p>
<?php } ?>
<?php if ($points[0] > 20 && $points[0] <= 30) { ?>
	<p>&nbsp;</p><p>Moving forward with your claim will likely be a smart move on your part.  While the company may try to challenge some of your claim, other parts are probably well in your favor.  You probably have a lot of money at stake, so be careful moving forward to handle everything properly. </p>
<?php } ?>
<?php if ($points[0] > 30) { ?>
	<p>&nbsp;</p><p>You want to be very careful moving forward.  Your future has probably been very affected by your injury and you may have the basis of a very valuable claim.  A lot is at stake for you, and there are definitely right and wrong ways to handle things to make your future better.   Speak to an attorney as soon as you can.</p>
<?php } ?>
</div> 
<?php
}

add_shortcode( 'final_results', 'final_results_func' );

function form_section_text(){ ?>
<span class="heading"> REACH OUT TO US </span> <span class="color">  Fill out the quick contact form below to have your questions answered by the team at Jones Act Law.com </span> 
<?php
}
add_shortcode( 'form_text', 'form_section_text' );
?>
<?php
/** Step 2 (from text above). */
add_action( 'admin_menu', 'slideout_offer_menu' );
/** Step 1. */
function slideout_offer_menu() {
	add_options_page( 'Slideout Offers', 'Slideout Offers', 'manage_options', 'slideout-offer', 'my_plugin_options' );
}
/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
    <style type="text/css">
		th, td {
			width: 30%;
			text-align: left;
		}
		#sl_offer_name { width:40%;	padding:10px; }
		#sl_offer_code { padding:10px; width:95%; min-height:300px; }
		#success_enterd { display:none; }
	</style>
    <div id="success_enterd" class="updated below-h2"><p>Offer Saved Successfully.</p></div>
    <h2>Add Slideout Offer</h2>
    
    <p>
    <form name="offers_form" id="offers_form" class="offers_form" action="" method="post">
    	<p><input type="text" name="sl_offer_name" id="sl_offer_name" placeholder="Offer Name" /></p>
        <p><textarea name="sl_offer_code" id="sl_offer_code" placeholder="Code taken from infusionsoft.com"></textarea></p>
        <p><button name="sl_offer_submit" id="sl_offer_submit" type="submit" class="button button-primary button-large">Save Offer</button></p>
    <hr />    
    </form>
    </p>
    
    
    <?php
}
if(isset($_POST['sl_offer_submit'])) {
	sl_offer_submit();
}
function sl_offer_submit() {
	$sl_offer_name	=	$_POST['sl_offer_name'];
	$sl_offer_code	=	$_POST['sl_offer_code'];
	$sql_insert	=	"INSERT INTO wp_sl_offers_detail VALUES ('','$sl_offer_name','$sl_offer_code') ";
	mysql_query($sql_insert);
	?>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
	jQuery(document).ready(function( $ ) {
		jQuery("#success_enterd").css("display", "block");
	});
	</script>
    <?php
}
add_action( 'add_meta_boxes', 'meta_box_popup_offer' );
	function meta_box_popup_offer(){
		if(get_post_type()=='post' || get_post_type()=='page' || get_post_type()=='employee' || get_post_type()=='faq' || get_post_type()=='portfolio' || get_post_type()=='case-results' || get_post_type()=='faqs' || get_post_type()=='library' || get_post_type()=='news' || get_post_type()=='practice-areas' || get_post_type()=='reports' || get_post_type()=='testimonials' || get_post_type()=='video' || get_post_type()=='attorneys' || get_post_type()=='sign-up'){
			add_meta_box( 'pop-meta-box-id', 'POPUP Offers', 'meta_box_callback_popup',get_post_type(), 'normal', 'high' );
		}
	}
function meta_box_callback_popup( $post ){
	$post_pop_id	=	get_the_ID();
	echo '<input type="hidden" name="pop_id_post" value="'.$post_pop_id.'">';
	echo '<select name="pop_offer" class="pop_select_box" style="width:50%; margin-right:20px; cursor:pointer;">';
	$query_pop = mysql_query("SELECT * FROM wp_pop_offers_detail");
	while ($row_pop = mysql_fetch_array($query_pop)) {
	   	echo '<option value="'.$row_pop['pop_offer_id'].'">'.$row_pop['pop_offer_name'].'</option>';
	}
	echo '</select>';
	echo '<button name="pop_submit" id="pop_submit" type="submit" class="button button-primary button-large">Assign Selected Offer</button>&nbsp;&nbsp;';
	echo '<button name="pop_remove" id="pop_remove" type="submit" class="button button-primary button-large">Remove Offer</button>';
	
}
if (isset($_POST['pop_submit'])) {
	mysql_query("INSERT INTO wp_pop_offers_which_page VALUES ('','$_POST[pop_offer]','$_POST[pop_id_post]')");
}
if (isset($_POST['pop_remove'])) {
	$rem_page_id_pop	=	$_POST['pop_id_post'];
	mysql_query("DELETE FROM wp_pop_offers_which_page WHERE pop_offer_w_pageid = $_POST[pop_id_post]");
}
/** Step 2 (from text above). */
add_action( 'admin_menu', 'popup_offer_menu' );
/** Step 1. */
function popup_offer_menu() {
	add_options_page( 'POPUP Offers', 'POPUP Offers', 'manage_options', 'popup-offer', 'my_plugin_options_pop' );
}
/** Step 3. */
function my_plugin_options_pop() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
    <style type="text/css">
		th, td {
			width: 30%;
			text-align: left;
		}
		#pop_offer_name { width:40%;	padding:10px; }
		#pop_offer_code { padding:10px; width:95%; min-height:300px; }
		#success_enterd_pop { display:none; }
	</style>
    <div id="success_enterd_pop" class="updated below-h2"><p>Offer Saved Successfully.</p></div>
    <h2>Add POPUP Offer</h2>
    
    <p>
    <form name="offers_form_pop" id="offers_form_pop" class="offers_form_pop" action="" method="post">
    	<p><input type="text" name="pop_offer_name" id="pop_offer_name" placeholder="Offer Name" /></p>
        <p><textarea name="pop_offer_code" id="pop_offer_code" placeholder="Code taken from infusionsoft.com"></textarea></p>
        <p><button name="pop_offer_submit" id="pop_offer_submit" type="submit" class="button button-primary button-large">Save Offer</button></p>
    <hr />    
    </form>
    </p>
    
    
    <?php
}
if(isset($_POST['pop_offer_submit'])) {
	pop_offer_submit();
}
function pop_offer_submit() {
	$pop_offer_name	=	$_POST['pop_offer_name'];
	$pop_offer_code	=	$_POST['pop_offer_code'];
	$sql_insert_pop	=	"INSERT INTO wp_pop_offers_detail VALUES ('','$pop_offer_name','$pop_offer_code') ";
	mysql_query($sql_insert_pop);
	?>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
	jQuery(document).ready(function( $ ) {
		jQuery("#success_enterd_pop").css("display", "block");
	});
	</script>
    <?php
}
if( function_exists('acf_set_options_page_title') ){
    acf_set_options_page_title( __('Offers'), 10 );
}
if( function_exists('acf_add_options_sub_page') ){
    acf_add_options_sub_page( 'Header Offer' );
	acf_add_options_sub_page( 'Blue Footer Offer' );
	acf_add_options_sub_page( 'Slide Offer Enable or Disable' );
}
//[video-offer]
function video_offer_func( $all_video_offer_info ){
	$poster				=	$all_video_offer_info[0];
	$video_url			=	$all_video_offer_info[1];
	$right_heading		=	$all_video_offer_info[2];
	$book_scr			=	$all_video_offer_info[3];
	$detail_video		=	$all_video_offer_info[4];
	//print_r($all_video_offer_info);exit;
	$code_video_offer	=	get_field('code_video_offer');
	return '
	<div class="video_offer">
		<div class="col-md-5">
        	<video id="my-video" class="video-js" controls preload="auto" width="485" height="280" poster="'.$poster.'" data-setup="{}">
				<source src="'.$video_url.'" type=video/flv>
			</video>   
			<script src="http://vjs.zencdn.net/5.6.0/video.js"></script> 
		</div>
		<div class="col-md-1">&nbsp;</div>
		<div class="vof_content_right col-md-6">
			<h3>'.$right_heading.'</h3>
			<p>
				<img src="'.$book_scr.'" alt="Young Firm Book" class="alignleft" style="margin-top:-3px;padding-top: 0 !important;" />
				<span class="p-head">'.$detail_video.'</span>
				<strong style="text-transform: uppercase;">Available for Limited time:</strong>
				'.$code_video_offer.'
			</p>
		</div>
		<br class="clear">
	</div>';
}
add_shortcode( 'video-offer', 'video_offer_func' );
?>