
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
		<meta name="generator" content="Studio 3 http://aptana.com/">
		<meta name="author" content="Administrator">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<!-- Date: 2011-07-05 -->
	</head>
	<body>
		<div id="header">
			
			Header
			
		</div>
