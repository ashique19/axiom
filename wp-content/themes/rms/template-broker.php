<?php /*Template Name: Broker*/
get_header();
$page_id = get_the_ID();
$inner_page_header_image = get_field( 'inner_page_header_image', $page_id );
$section1 = get_field("section_1",$page_id);
$section2 = get_field("section_2",$page_id);
$section3 = get_field("section_3",$page_id);
$section4 = get_field("section_4",$page_id);
$section5 = get_field("section_5",$page_id);
$section6 = get_field("section_6",$page_id);
$section7 = get_field("section_7",$page_id);
$section8 = get_field("section_8",$page_id);
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
<div class="div_22 broker-div">
<div class="inner_div">
<?php echo $section1;?>
</div>
</div>
</div>
<div class="brokers_list">
<div class="inner_div">
<div class="left_part">
<?php echo $section3;?>
<?php echo do_shortcode('[contact-form-7 id="160" title="Broker"]');?>
</div>
<div class="right_part">
<?php echo $section4;?>
</div>
</div>
<div class="div_3 div_33">
<div class="inner_div">
<?php if($section6 !=""){echo $section6;}?>
</div>
</div>
<?php if($section7 != "" && $section8 != ""){?>
<div class="div_4 div_44">
<div class="inner_div">
<div class="text_box">
	<?php echo $section7;?>
</div>
<div class="text_box">
	<?php echo $section8;?>
</div>
</div>
</div>
<?php } ?>
</div>
<?php get_footer();?>