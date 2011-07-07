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
		
		

		
		<!-- // Kelly: 基准CSS -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/base.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		
		
		
		<?php wp_enqueue_script('jquery'); // Wordpess jquery 1.6.1 ?>
		<?php
			wp_head();
		?>
		
		
		<!-- // jQuery & 其他js过程 -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.backgroundPosition.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
		
		<!-- 主页的 JS -- TODO: 将此JS写入文件 判断页面为主页时加载此JS -->
		<script type="text/javascript">
			
			// php申明 js变量
			<?php  // 获取图片相关信息
				$home_window_bg_path = get_template_directory_uri();
				$home_window_bg_path = $home_window_bg_path.'/images/slide_show.JPG';  // 背景图片
				$arr = getimagesize($home_window_bg_path);
				//echo $arr[3];
				$strarr = explode("\"",$arr[3]);
				//$strarr[1]是宽     $strarr[3]是高;
				echo 'var home_window_width = '.$strarr[1].';';
			?>
			
			
			// 变量申明
			var home_window_pos = -960;   // 负的1格图片宽度
			
			
			// jQuery document.ready   根据元素是否存在来设置元素
			jQuery(document).ready(function(){
			
				if (jQuery('#home_window').size()){    // #home_window 作为标识A 如果存在  则为首页
					// #home_window 图片自动播放
					jQuery('#home_window').css("display", "none");
					jQuery('#home_window').fadeIn(1000);
					setInterval('home_window_move()', 2000);
					
									
					// .home_news_box
					//jQuery('.home_news_box').css("display", "none");
					//jQuery('.home_news_box').fadeIn(1000);
					//jQuery('.home_news_box').stop().animat({opacity: 100}, 500);
					//jQuery('.home_news_box:eq(0)').fadeOut(1000);
					//jQuery('.home_news_box').addGlow({ textColor: 'white', haloColor: '#aaa', radius: 100 });
				
				
				} else{
					alert('not mainpage');
				}


				      
				// 初始化后的事件
				// .news_box_item 事件
				jQuery('.news_box_item').mouseover(function(){
					//jQuery('.news_box_item_content').remove();
					//jQuery(this).append('<div class="news_box_item_content"></div>');
					//jQuery('.news_box_item_content').css("height", "0");
					//jQuery('.news_box_item_content').css("width", "100%");
					jQuery(this).css("font-size", "12pt");
  				});
 				jQuery('.news_box_item').mouseout(function(){
					jQuery(this).css("font-size", "9pt");
  				});

				
			});
			
			// functions
			function home_window_move(){   // 控制图片   #home_window 处
				jQuery('#home_window').stop().animate({backgroundPosition: '('+ home_window_pos + 'px 0px)'}, {duration: 1000, easing: 'easeOutBounce'});
				home_window_pos -= 960;
				if (home_window_pos < -home_window_width){
					home_window_pos = 0;
				}
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
