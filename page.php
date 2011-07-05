<?php
	get_header();
?>

	<div>
		
		Single page...
		
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