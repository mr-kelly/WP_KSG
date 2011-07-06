<?php
	/**
	 * Home Front Page 静态首页
	 */
	
	get_header();
?>


	<div id="home_window">
		Home Window
	</div>
	
	<div id="home_guide">
		Home Guide...部门...
	</div>
	
	
	<div id="home_news_container">

		<div class="home_news_box">
			News Box 1
			<?php
				// 根据主题设置读取新闻， 该函数在functions.php哦...
				news_box_reader( null );
			?>
		</div>
		
		<div class="home_news_box">
			News Box 2
			
			<?php
				news_box_reader( null );
			?>
		</div>
		
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