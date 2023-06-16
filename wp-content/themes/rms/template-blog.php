<?php /*Template Name: Blog*/
get_header();
$page_id = get_the_ID();
$inner_page_header_image = get_field( 'inner_page_header_image', $page_id );
$section1 = get_field("blog_section_1",$page_id);
$section2 = get_field("blog_section_2",$page_id);
$section3 = get_field("blog_section_3",$page_id);
?>
<div class="content">
<div class="slider">
<div class="slide_content1">
<h2><?php echo get_the_title( $page_id ); ?></h2>
</div>
<?php
if($inner_page_header_image != ''){
	echo '<img src="'.$inner_page_header_image.'"/>';
}
?>
</div>
<div class="content_part blog_part">
<div class="inner_div">
<?php
$args = array('post_type' => 'post', 'post_per_page' => 4);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$content = get_the_content();
		$trimmed_content = wp_trim_words( $content, 40 );
		echo '<li>';
		echo '<h3>'.get_the_title().'</h3>';
		echo '<span>Posted on '.get_the_time("F j, Y").'</span>';
		echo '<p>'.$trimmed_content.'</p>';
		echo '<a href="'.get_the_permalink().'">read more</a>';
		echo '</li>';
	}
	echo '</ul>';
	wp_reset_postdata();
}
/* $post_id_29 = get_post($page_id);
$content = $post_id_29->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo $content; */
?>
</div>
</div>
<div class="div_3 div_33">
<div class="inner_div">
<?php echo $section1;?>
</div>
</div>
<div class="div_4 div_44">
<div class="inner_div">
<div class="text_box">
<?php echo $section2;?>
</div>
<div class="text_box">
<?php echo $section3;?>
</div>
</div>
</div>
</div>
<?php get_footer();?>