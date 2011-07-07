<?php
/**
 * 单独文章模板 (非Page页面)
 */

 get_header();
 
?>
	<div id="container">
		<div id="content">
			<?php
				the_post();
				
				the_title();
				
				the_content();
			?>
		</div>
		
		<?php get_sidebar(); ?>
		
		
	</div>

<?php 
	get_footer();
?>
