<?php /*Template Name: Client*/
get_header();
$page_id = get_the_ID();
$inner_page_header_image = get_field( 'inner_page_header_image', $page_id );
$section1 = get_field("client_section_1",$page_id);
$section2 = get_field("client_section_2",$page_id);
$section3 = get_field("client_section_3",$page_id);
$section4 = get_field("client_section_4",$page_id);
$section5 = get_field("client_section_5",$page_id);
$section6 = get_field("client_section_6",$page_id);
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
<div class="div_22 direct_client">
<div class="inner_div">
<div class="inner_text">
	<?php echo $section1;?>
</div>
<div class="inner_text">
	<?php echo $section2;?>
</div>
</div>
</div>
<div class="div_1">
<div class="inner_div">
	<?php echo $section3;?>
</div>
</div>
<div class="faq_list">
<div class="inner_div">
<div id="integration-list">
    <?php echo do_shortcode('[fancyfaq order="ASC"/]');?>
</div>
</div>
</div>
<div class="div_3 div_33">
<div class="inner_div">
	<?php echo $section4;?>
</div>
</div>
<div class="div_4 div_44">
<div class="inner_div">
<div class="text_box">
	<?php echo $section5;?>
</div>
<div class="text_box">
	<?php echo $section6;?>
</div>
</div>
</div>
</div>
<?php get_footer();?>