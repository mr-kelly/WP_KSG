		<div id="footer">
			<div id="site-info">
				Goto
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->
			Footer
		<?php
			wp_footer();
		?>
		</div>
	</body>
</html>
