<?php






/**
 * 主题设置  Theme Settings
 * 金山西山居主题, 后台模板<管理选项>...
 * 			
 * 		让后台的<控制板>菜单下出现<西山居设置>，并提供设置选项...
 * 
 */
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
	 * 设置页面html显示...
	 */
	function setting_page_display() {
		// 接下来是HTML标签，直接显示...	
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
 
