<?php get_header();
$page_id = get_the_ID();
$inner_page_header_image = get_field( 'inner_page_header_image', $page_id );
/* $section1 = get_field("section_1",$page_id);
$section2 = get_field("section_2",$page_id);
$section3 = get_field("section_3",$page_id);
$section4 = get_field("section_4",$page_id);
$section5 = get_field("section_5",$page_id);
$section6 = get_field("section_6",$page_id);
$section7 = get_field("section_7",$page_id);
$section8 = get_field("section_8",$page_id); */
?>
<div class="default_page_content content">
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
<div class="inner_div">
<?php
if(have_posts()):while(have_posts()):the_post();
	the_content();
endwhile;
endif;
?>
</div>
</div>
</div>
<?php get_footer();?>