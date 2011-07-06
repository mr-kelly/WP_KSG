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
				global $post;
				// TODO: 获取数据库option设置的文章分类...
				$news_posts = get_posts();
				
				foreach( $news_posts as $post ):
					
					// 将array post内的信息转化成全局post变量内容...
					setup_postdata( $post );
					
			?>
			<a href="<?php the_permalink();?>">
				<?php the_title();?>
			</a>
			
			<?php
				
					
					
				endforeach;
			?>
		</div>
		
		<div class="home_news_box">
			News Box 2
		</div>
			
	</div>
	
	<!--
	<div id="container">
		
		首页Container
		
	</div>
	-->
	
<?php
	get_footer();
?>