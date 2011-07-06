<?php
	/**
	 * Home Front Page 静态首页
	 */
	 
	 
	// TODO abc
	get_header();
?>

	
	<div id="home_window">
		
	</div>
	
	<div id="home_guide">
		Home Guide...部门...
	</div>
	
	
	<div id="home_news_container">
		<?php foreach( range(1,4) as $i ): ?>
		<div class="home_news_box">
			<?php
				// 根据主题设置读取新闻， 该函数在functions.php哦...
				news_box_reader( null );
			?>
		</div>
		<?php endforeach; ?>
		
		
		<div class="clearboth"></div>
	</div>
	
	<!--
	<div id="container">
		
		<div id="home_window">

		</div>
		
	</div>
	-->
	
<?php
	get_footer();
?>