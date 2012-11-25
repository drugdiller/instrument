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
		<div id='adr'>
			<?php print variable_get('address_setting'); ?>
		</div>
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
			<?php if ($title): ?>
			<h2 class="title" id="page-title"><?php print $title; ?></h2>
			<?php endif; ?>
			<?php print render($page['content']); ?>
			<?php print $feed_icons; ?>
		</div>
		<div id="sidebar">
			<?php print render($page['sidebar_second']); ?>	
		</div> 
	</div>
</div>
<?php print render($page['footer']); ?>