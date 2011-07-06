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
		
		<?php // jQuery & 其他js ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.6.min.js" />"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				alert('ready');
			});
		</script>
		
		<?php
			wp_head();
		?>
		
	</head>
	<body <?php body_class($class);?>>
		
		<div id="wrapper">

			
			<div id="header">
				<a href="<?php echo home_url( '/' );?>">
					Header
				</a>
				
				<?php
					// KK: 系统的菜单，可以通过后台灵活修改
					wp_nav_menu();
				?>
			</div>
