		<div id="footer">
			<div id="site-info">
				
				版权所有 
				
				<a href="<?php echo home_url('/wp-admin/');?>">
					&copy;
				</a> 
				
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
				
			</div><!-- #site-info -->



				<?php
					wp_footer();
				?>


		</div>
		
	</body>
</html>
