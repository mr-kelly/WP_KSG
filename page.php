<?php
	get_header();
?>

	<div id="container">
		

		<div id="content">
			<?php
				
				
				
				// 初始化post的内容变量..
				the_post();
				
				
				
				the_title();
				
				the_content();
			?>
		</div>
		
		
		<?php
		
			// if (is_page(2)){
				// echo 'Page2';
			// } else{
				// echo 'Not page2'; 
			// }
		?>
		
		

		<?php
			get_sidebar();
		?>
		
		
		<div class="clearboth"></div>
		
	</div>

<?php
	get_footer();
?>