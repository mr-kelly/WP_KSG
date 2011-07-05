
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
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/base.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		
		<?php
		//	wp_meta();
			wp_head();
			
		?>
		
	</head>
	<body <?php body_class($class);?>>
		<div id="header">
			
			Header
			
			<?php
				wp_nav_menu();
			?>
		</div>
