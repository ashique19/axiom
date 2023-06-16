<?php get_header();
$page_id = get_the_ID();?>
<div class="content">
<div class="slider">
	<?php putRevSlider("homepage-slider");?>
</div>
<br style="clear:both" />

<div class="div_1">
	<div class="inner_div">
		<?php echo get_field( 'the_process_content', $page_id );?>
	</div>
</div>
<div class="div_2">
	<div class="inner_div">
		<h2><?php echo get_field( 'how_it_works_title', $page_id );?></h2>
		<div class="white_text">
			<?php echo get_field( 'how_it_works_content', $page_id );?>
		</div>
	</div>
</div>
<div class="div_3">
	<div class="inner_div">
		<?php echo get_field( 'take_advantage_content', $page_id );?>
	</div>
</div>
<div class="div_4">
	<div class="inner_div">
		<?php echo get_field( 'how_to_make_money_content', $page_id );?>
		<div class="text_box">
			<?php echo get_field( 'become_a_cardholder_content', $page_id );?>
		</div>
		<div class="text_box">
			<?php echo get_field( 'become_a_broker_content', $page_id );?>
		</div>
	</div>
</div>
</div>
<?php get_footer();?>