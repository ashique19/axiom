<?php /*Template Name: Tradelines*/
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

if($page_id == 134){
	$dynamic_class = "content_part";
}else{
	$dynamic_class = "div_22";
}
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
<div class="<?php echo $dynamic_class;?>">
<div class="inner_div">
	<?php if($section1 !=""){echo $section1;}
	if($section2 !=""){?>
<div class="inner_text trade_text">
	<?php echo $section2;?>
</div>
	<?php } ?>
</div>
</div>
<?php if($section3 !="" && $section4 !="" && $section5 !=""){?>
<div class="trade_list">
<div class="inner_div">
<?php if($section3 !=""){?>
<div class="left_part">
	<?php echo $section3;?>
</div>
<?php }
if($section4 !=""){
?>
<div class="right_part">
	<?php echo $section4;?>
</div>
<?php }
if($section5 !=""){
?>
<br style="clear:both" />
	<?php echo $section5;?>
<div class="live_tbl"><div style="width: 150px;float: left;">Spots Available</div><div style="width: 90px;float: left;">Purchase by Date</div><div style="width: 130px;float: left;">Limit, Utilization, &amp; Age</div><div style="width:100px;float: left;">Price</div><div style="width: 200px;float: left;">Post Date (Approx.)</div><div style="width:195px;float: left;">Lender</div><div style="width: 183px;float: left;">Tradeline Code &amp; Address Code</div></div>
	<div class="custom_live_spreadsheet">
	<?php
		echo do_shortcode('[gdoc key="https://docs.google.com/spreadsheets/d/1sMIiyewKnrL9iNNtHbdnSHkxN92yp3Yo1U-RHSxYMKA/edit?usp=sharing" header_rows="2" class="no-datatables"]');
	?>
	</div>
<br /><br />
<?php } ?>
</div>
</div>
<?php
}
?>
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