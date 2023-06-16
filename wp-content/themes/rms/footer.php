<div class="footer">
	<div class="inner_div">
		<?php if ( get_theme_mod( 'responsive_logo' ) ) : ?>    
			<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
				<img src='<?php echo esc_url( get_theme_mod( 'responsive_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
			</a>
		<?php else : ?>	
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/foot-logo.png" />
		<?php endif; ?>
		<div class="foot-right">
			<?php dynamic_sidebar("Footer Widget");?>
		</div>
	</div>
</div>
</div>
<?php wp_footer();?>
</body>
</html>