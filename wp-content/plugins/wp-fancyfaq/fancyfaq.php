<?php
/* Plugin Name: WP Fancy FAQ
Plugin URI: http://www.bitset.org/
Description: Fancy FAQ is a complete Frequently Asked Question Management plugin for WordPress. It provides an Fancy FAQ custom post type With category taxonomy which can be used to effortlessly add FAQ sections to your website. It's easy to install the plugin and adding new questions and categories. After adding questions you can show the faq items in your "Post", "Page", or in "Widget" of your website using shortcode.
Version: 1.1
Author: BitSet Solution
Author URI: http://www.bitset.org/
License: Commercial
*/

define( 'FANCYFAQ_URL', plugin_dir_url(__FILE__) );
define( 'FANCYFAQ_PATH', plugin_dir_path(__FILE__) );

require_once( FANCYFAQ_PATH . 'fancyfaq.posttype.php' );
require_once( FANCYFAQ_PATH . 'noerror.php' );
require_once( FANCYFAQ_PATH . 'settings.php' );

function fancyfaq_scripts() {
    if (!is_admin()) {
	
	wp_enqueue_script('jquery');
	
	if(get_option('ff_action') == 'toggle'){
		wp_enqueue_script('utility', plugins_url('/js/toggle.js', __FILE__));
	}else{
		wp_enqueue_script('utility', plugins_url('/js/accordion.js', __FILE__));
	}

	wp_enqueue_style ('fancyfaq_style', plugins_url('/css/style.css', __FILE__));
	}
}
add_action('init', 'fancyfaq_scripts', 0);

add_shortcode("fancyfaq", "fancyfaq_display_faq");

function fancyfaq_display_faq($attr, $content) {

    extract(shortcode_atts(array(
                'category' => '',
                'item' => -1,
                'order' => 'ASC'
                    ), $attr));
					
    $plugins_url = plugins_url();

 	$html .= '<div class="sample"><dl class="faqs">';
	
	$tmp = $wp_query;
	$wp_query = new WP_Query('post_type=fancyfaq&orderby=menu_order&posts_per_page=' . $item . '&order=' . $order . '&fancyfaq_cat='.$category);
	if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
	
	$question = get_the_title();
	$answer = get_the_content();

	$html .= '<dt><a href="#nofollow">';
	$html .= $question;
	$html .= '</a></dt><dd>';
	$html .= $answer;
	$html .= '</dd>';

	endwhile;
	wp_reset_query();
	endif;
	
	$html .= '</dl></div>';
	
	$wp_query = $tmp;
	
	if(get_option('ff_showicon') == 'css'){
		$html .= "<style>
					.faqs dt{font-weight:bold;background:transparent;padding:3px 0 15px 30px;position:relative;}
					.faqs dt:after{content:'Q';position:absolute;left:0;top:4px;width:25px;height:25px; background: " . get_option('ff_pbgcolor') . ";color:#fff; font-weight:bold; text-align:center;border-radius:3px;}

					.faqs dd{background:transparent;margin-bottom: 20px;padding:0 0 10px 30px;position:relative;}
					.faqs dd:after{content:'A';position:absolute;left:0;top:4px;width:25px;height:25px; background: " . get_option('ff_abgcolor') . ";color:#fff; font-weight:bold; text-align:center;border-radius:3px;}
				</style>";
				
	}else if(get_option('ff_showicon') == 'image'){
		$html .= "<style>
					.faqs dt{font-weight:bold;background:url(" . FANCYFAQ_URL . "/images/q.gif) 0 4px no-repeat;padding:3px 0 15px 30px;position:relative;}
					.faqs dd{background:url(" . FANCYFAQ_URL . "/images/a.gif) 0 2px no-repeat;margin-bottom: 20px;padding:0 0 10px 30px;position:relative;}
				</style>";
	
	
	}else{
		$html .= "<style>
					.faqs dt{font-weight:bold;background:transparent;}
					.faqs dd{background:transparent;margin-bottom: 20px;padding:0 0 10px 0px;position:relative;}
				</style>";
	}
	
    return $html;
}
?>