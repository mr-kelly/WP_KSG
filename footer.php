		<div id="footer">
			<div id="site-info">
				Goto
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->
		</div>
		<?php
			/* Always have wp_footer() just before the closing </body>
	 		* tag of your theme, or you will break many plugins, which
	 		* generally use this hook to reference JavaScript files.
	 		*/
			//wp_footer();
		?>
	</body>
</html>
