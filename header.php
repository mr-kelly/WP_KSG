<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			<?php
				// 页面标题
				wp_title( '|', true, 'right');
				
				// 网站名称
				bloginfo('name');
				
				// 如果是首页显示站点简介...
				$site_description = get_bloginfo('description', 'display');
				if ( is_home() || is_front_page() ) {
					echo " - $site_description";	
				}
				
				// 标题添加页码
				global $page, $paged;
				if ( $paged >= 2 || $page >= 2 ) {
					echo ' - ' . sprintf(_( 'Page %s', 'seasungame' ), max( $paged, $page ));
				}
				
			?>
		</title>
		
		<meta name="generator" content="Editor">
		<meta name="author" content="Kingsoft">
		
		

		
		<?php // Kelly: 基准CSS ?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/base.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		
		
		
		<?php wp_enqueue_script('jquery'); // Wordpess jquery 1.6.1 ?>
		<?php
			wp_head();
		?>
		
		
		<?php // jQuery & 其他js ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.backgroundPosition.js"></script>
		<script type="text/javascript">
			
			// 变量申明
			var home_window_pos=-200;
			
			// jQuery document.ready
			jQuery(document).ready(function(){
			// 初始化后加载的效果等
				// #home_window 图片自动播放
				jQuery('#home_window').css("display", "none");
				jQuery('#home_window').fadeIn(1000);
				setInterval('home_window_move()', 1000);
				
				//jQuery('.home_news_box').css("display", "none");
				//jQuery('.home_news_box').fadeIn(1000);
				//jQuery('.home_news_box').stop().animat({opacity: 100}, 500);
			});
			
			// functions
			function home_window_move(){   // 控制图片   #home_window 处
				jQuery('#home_window').stop().animate({backgroundPosition: '('+ home_window_pos + 'px 0px)'}, 100);
				home_window_pos-=200;
			}
			
		</script>
		

		
	</head>
	<body <?php body_class($class);?>>
		
		<div id="wrapper">

			
			<div id="header">
				
				<div id="logo">
					<a href="<?php echo home_url( '/' );?>">
						LOGO,返回首页
					</a>
				</div>
				
				<?php
					// KK: 系统的菜单，可以通过后台灵活修改
					wp_nav_menu();
				?>
			</div>
