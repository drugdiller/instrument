<div id="container">
  <div id="header">
    <?php if ($main_menu): ?>
      <nav>
        <?php
        print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => array('main-menu'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>
    <?php // print render($page['navigation']); ?>		
    <?php if ($logo): ?>
	  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
	<?php endif; ?>
  </div>
  
  <div id="content">
	<div class="textwide">
	  <?php print render($page['highlighted']); ?>
	  <a id="main-content"></a>
	  <?php print render($title_prefix); ?>
	  <?php if ($title): ?>
	    <h1 class="title" id="page-title"><?php print $title; ?></h1>
	  <?php endif; ?>
	  <?php print render($title_suffix); ?>
	  <?php print $messages; ?>
	  <?php print render($tabs); ?>
	  <?php print render($page['help']); ?>
	  <?php if ($action_links): ?>
	    <ul class="action-links"><?php print render($action_links); ?></ul>
	  <?php endif; ?>
	  <?php print render($page['content']); ?>
	  <?php print $feed_icons; ?>
	</div>
  
    <div class="sidenarrow">	
	<?php
	$user_menu = menu_navigation_links('user-menu'); 
	print theme('links', array(
	  'links' => $user_menu,
	  'attributes' => array(
	    'id' => 'user-menu',
	    'class' => array('links', 'clearfix'),
	  ),
	  'heading' => array(
	    'text' => t('User menu'),
	    'level' => 'h2',
	    'class' => array('element-invisible'),
	  ),
	)); ?>
	</div>
			
	<br style="clear: both;">
  </div>
</div>

<?php print render($page['footer']); ?>
	