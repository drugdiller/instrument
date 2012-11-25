<div id="shell">
	<div id="header">
		<?php if ($logo): ?>
		  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
		<?php endif; ?>
	  <?php
		$top_menu = menu_navigation_links('menu-top-menu');
		print theme('links', array(
	    	'links' => $top_menu,
	    	'attributes' => array(
	    	'id' => 'top-nav',
				'class' => 'clearfix',
	    ),
	    	'heading' => array(
	    	'text' => t('Main menu'),
	    	'level' => 'h2',
	    	'class' => array('element-invisible'),
	    ),
		)); 
		?>
		<div id='adr'><?php print variable_get('address_setting'); ?></div>
		<?php if ($main_menu): ?>
			<?php
			print theme('links__system_main_menu', array(
		    	'links' => $main_menu,
		    	'attributes' => array(
		    	'id' => 'main-nav',
		    ),
		    	'heading' => array(
		    	'text' => t('Main menu'),
		    	'level' => 'h2',
		    	'class' => array('element-invisible'),
		    ),
			)); 
			?>
		<?php endif; ?>
		<?php   
			$block = module_invoke('search', 'block_view', 'search');
  		print render($block); 
		?>
	</div>
	<div id="main" class="clearfix">
		<div id="subnav">
			<h2 class="block-title"><a href="/solutions" class="active-trail active-trail active">Предлагаем решения</a></h2>
			<?php
			$content = '<ul class="menu">';
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
			<?php print render($page['sidebar_first']); ?>
		</div>
		<div id="content">
			<?php print render($page['highlighted']); ?>
			<a id="main-content"></a>
			<?php print render($title_prefix); ?>
			<?php print $messages; ?>
			<?php print render($tabs); ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?>
			  <ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>
			
			<ul id="my_slider">
				<li>
					<a href="/node/2"><img alt="" src="/sites/all/themes/zen/teco/images/index_1.png" /></a></li>
				<li>
					<a href="/node/2"><img alt="" src="/sites/all/themes/zen/teco/images/index_2.png" /></a></li>
			</ul>
			
			<?php print render($page['content']); ?>
			<?php print $feed_icons; ?>
		</div>
		<div id="sidebar">
			<?php print render($page['sidebar_second']); ?>	
		</div> 
	</div>
</div>
<?php print render($page['footer']); ?>
