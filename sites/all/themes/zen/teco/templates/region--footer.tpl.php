<div id="footer">
	<div id="footer-content">
		<?php 
		print theme('links', array(
			'links' => menu_navigation_links('main-menu', 0),
			'attributes' => array(
				'class'=> array(
					'links',
					'site-menu'
					),
					'id' => 'footer-nav'
				)
			)
		);?>
		<?php
		$content = '<ul id="footer-nav">';
		$sql = "SELECT mlid, plid, link_title, link_path
		FROM menu_links
		WHERE plid = 434
		LIMIT 0 , 30";
		$result = db_query($sql);
		foreach ($result as $l) {
			$content .= '<li>'.l($l->link_title, $l->link_path).'</li>';
		}
		$content .= '</ul>';
		print $content;
		?>
	
		<div id="cp">
			© ТЭКО-СЕРВИС 2012<br/><br/>
			<a href="http://www.pronauku.com">Проектирование сайта</a> — Pronauku.com
		</div>
	
		<?php
		$top_menu = menu_navigation_links('menu-top-menu');
		print theme('links', array(
	    	'links' => $top_menu,
	    	'attributes' => array(
	    		'id' => 'footer-nav',
					'class' => 'clearfix',
	    	),
	    	'heading' => array(
	    		'text' => t('Main menu'),
	    		'level' => 'h2',
	    		'class' => array('element-invisible'),
	    	),
			)
		); 
		?>
	</div>
</div>
