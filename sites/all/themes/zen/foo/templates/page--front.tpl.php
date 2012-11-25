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
	<?php print render($page['highlighted']); ?>
	  <a id="main-content"></a>
	  <?php print $messages; ?>
	  <?php print render($tabs); ?>
	  <?php print render($page['help']); ?>
	  <?php if ($action_links): ?>
	    <ul class="action-links"><?php print render($action_links); ?></ul>
	  <?php endif; ?>
	  <?php print render($page['content']); ?>
	  <?php print $feed_icons; ?>
	<div id="main-featured-cycle" style="position: relative; ">
	  <div id="featured-cycle" style="position: relative; ">
		<?php
		// выводим по одной картинке из каждого продукта с опцией публиковать на главной
		$sql = "SELECT node.nid AS nid, 
		node.created AS node_created, 
		'node' AS field_data_field_img_node_entity_type
		FROM {node} node
		WHERE 
		(( (node.status = '1') 
		AND (node.type IN  ('product')) 
		AND (node.status = '1') 
		AND (node.promote <> '0') ))
		ORDER BY node_created DESC
		LIMIT 10 OFFSET 0";
		
		$result = db_query($sql);
		foreach ($result as $record) {
		  $n = node_load($record->nid);
		 // print_r($n);
		  $fid = $n->field_img['und'][0]['fid'];
		  $file = file_load($fid);
		  $variables = array(
		    'path' => $file->uri,
		    'style_name' => 'main',
		    //'attributes' => array('style' => 'position: absolute;'),
		  );
		  print theme('image_style', $variables);
		}
		?>
	  </div>
	</div>
  </div>
</div>
<?php print render($page['footer']); ?>