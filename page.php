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
		
		
		<?php
			if (is_page(2)){
				echo 'Page2';
			} else{
				echo 'Not page2'; 
			}
		?>
		
	</div>

<?php
	get_footer();
?>