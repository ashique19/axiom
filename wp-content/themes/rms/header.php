<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('title');?></title>
<link href="<?php echo get_stylesheet_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri();?>/css/custom.css" rel="stylesheet" type="text/css" />
<?php wp_head();?>
<link href="<?php echo get_stylesheet_directory_uri();?>/css/devd_menu_style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_stylesheet_directory_uri();?>/js/devd_menu_script.js"></script>
<script>
jQuery(document).ready(function(){
	jQuery('.faqs dt:first() a').addClass('custom_active');
	jQuery('.faqs dd').first().css('display','block');
	jQuery(".faqs a").on("click",function(){
		jQuery('.faqs a').removeClass('custom_active');
		jQuery(this).addClass('custom_active');
	});
});
</script>
</head>
<body <?php body_class();?>>
<div class="wrapper">
<div class="header">
<div class="custom_logo">
<?php
if(is_front_page()){
	if ( get_header_image() != '' ){ ?>
	<a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>"/></a>
	<?php }else{?>
	<a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" /></a>
<?php
	}
}else{
?>
<?php if ( get_theme_mod( 'responsive_inner_logo' ) ) : ?>    
	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
		<img src='<?php echo esc_url( get_theme_mod( 'responsive_inner_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
	</a>
	<?php else : ?>	
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/logo2.png" />
	<?php endif; ?>
<?php
}
?>
</div>
<div class="custom_menu">
<p>
	<?php if ( responsive_free_get_option( 'custom_header_contact_no' ) != '' ) { ?>
		<?php echo responsive_free_get_option( 'custom_header_contact_no' ); ?>
	<?php }else{ ?>
		1-888-412-9634
	<?php } ?>
</p>
<!--<div class="desktop_menu--">
	<?php //wp_nav_menu(array('theme_location' => 'header-menu','container' => '','menu_class' => '', 'menu_id' => ''));?>
</div>-->
<div id="cssmenu" class="mobile_menu--">
	<?php wp_nav_menu(array('theme_location' => 'header-menu','container' => '','menu_class' => '', 'menu_id' => ''));?>
</div>
</div>
</div><!--header-->
