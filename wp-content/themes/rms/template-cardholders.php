<?php /*Template Name: Card Holders*/
get_header();
$page_id = get_the_ID();
$inner_page_header_image = get_field( 'inner_page_header_image', $page_id );
$section1 = get_field("ch_section_1",$page_id);
$section2 = get_field("ch_section_2",$page_id);
$section3 = get_field("ch_section_3",$page_id);
$section4 = get_field("ch_section_4",$page_id);
$section5 = get_field("ch_section_5",$page_id);
$section6 = get_field("ch_section_6",$page_id);
$section7 = get_field("ch_section_7",$page_id);
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
<div class="div_22 cardholder_div">
<div class="inner_div">
<div class="left_part">
<?php echo $section1;?>
</div>
<div class="right_part">
<?php echo $section2;?>
</div>
</div>
</div>
<div class="carddiv_list">
<div class="inner_div">
<div class="left_part">
<?php echo $section3;?>
</div>
<div class="right_part">
<?php echo $section4;?>
</div>
<br style="clear:both" />
<?php echo $section5;?>
</div>
</div>
<div class="div_3 div_33 card_div">
<div class="inner_div">
<?php echo $section6;?>
</div>
</div>
<div class="div_4 div_44 testi_monial">
<div class="inner_div">
<?php
	$page_id_89 = get_post($page_id);
	$content = $page_id_89->post_content;
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]>', $content);
	echo $content;
?>
</div>
</div>
<div class="div_3 get_started">
<div class="inner_div">
<?php echo $section7;?>
</div>
</div>
</div>
<?php get_footer();?>