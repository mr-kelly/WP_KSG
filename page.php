<?php
	get_header();
?>

	<div>
		<?php
			// 初始化post的内容变量..
			the_post();
			
			
			
			the_title();
			
			the_content();
		?>
		
		
	</div>

<?php
	get_footer();
?>