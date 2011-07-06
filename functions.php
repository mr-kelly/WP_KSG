<?php
	/**
	 *  用于首页，读取 option设置的新闻, 放入div news_box...
	 */
	function news_box_reader( $option = null ) {
		global $post;
				// TODO: 获取数据库option设置的文章分类...
		$news_posts = get_posts( $option );
?>
		<ul class="news_box_list">
<?php
		foreach( $news_posts as $post ):
					
					// 将array post内的信息转化成全局post变量内容...
			setup_postdata( $post );
					
?>
			
			<li class="news_box_item">
				<a href="<?php the_permalink();?>">
					<?php the_title();?>
				</a>
			</li>
			
<?php										
		endforeach;
		
?>
		</ul>
<?php
	}










/**
 * 主题设置  Theme Settings
 * 金山西山居主题, 后台模板<管理选项>...
 * 			
 * 		让后台的<控制板>菜单下出现<西山居设置>，并提供设置选项...
 * 
 */

 // 定义一个常量, 用于读取存放在数据库的option...
define( 'THEME_OPTION_KEY', 'seasungame_options');

class ThemeSetting {

	/**
	 * 设置页面初始化
	 */
	function init() {
		
		// 如果是页面修改提交了... (即POST状态)
		if  ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
			
			// TODO: 修改主题设置 
			
			// 如果成功修改选项，设置一个状态变量告诉HTML页面
			$_POST['success'] = true;
		}
		
		add_dashboard_page('西山居设置', '西山居设置', 'edit_themes', basename(__FILE__), 
							array('ThemeSetting', 'setting_page_display'));	
	
	}
	/**
	 *  专有函数读取option设置.   特点是如果没有该option设置会自动判断并创建它..
	 */
	function get_theme_options() {
		
		$options = get_option( THEME_OPTION_KEY );
		
		// 如果从来没有option数据记录.(即第一次), 创建它.
		if ( !is_array($opions)) {
			$options = array();
			
			update_option( THEME_OPTION_KEY, $options );
		}
		
		return $options;
		
	}
	
	/**
	 * 设置页面html显示...
	 */
	function setting_page_display() {
		// 读取设置
		$options = ThemeSetting::get_theme_options();
		
		// 接下来是HTML标签，直接显示...	
		//print_r( $options );
?>
		<div class="wrap">
			
			<?php // 一个装B的设置图标  ?>
			<div id="icon-options-general" class="icon32"><br></div>
			
			<h2>金山西山居网站设置</h2>
			
			
					<?php
					    // 主题设置资料修改成功后，出现提示...
					    if ( isset( $_POST['success'] )):
					?>
					<div id="setting-error-settings_updated" class="updated settings-error">
						<p>
							<strong>提交之后出现的提示...</strong>
						</p>
					</div>
					<?php
						endif;
					?>
			
			
			<form method="post">


				<table class="form-table">
					<tbody>
						<tr valign="top">
							<th scope="row">
								<label>新闻盒子A 显示分类</label>
							</th>
							<td>
								<select>
									<option>可选设置</option>
									<option>可选设置</option>
								</select>
							</td>
						</tr>
						
						<tr valign="top">
							<th scope="row">
								<label>新闻盒子B 显示分类</label>
							</th>
							<td>
								<input type="text" />
							</td>
						</tr>
						
					</tbody>
				</table>
				
				<p class="submit">
					<input type="submit" name="submit" id="submit" class="button-primary" value="保存更改" />
				</p>
			</form>
		</div>
<?php
		
	}
	
}
 
 
 
 add_action( 'admin_menu', array('ThemeSetting', 'init'));
 
