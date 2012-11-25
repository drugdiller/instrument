<div class="min-width">
  <div id="main">
    <div id="header">
      <div class="head-row1">
        <div class="col1">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img class='logo' src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        </div>
			</div>

      <div class="head-row2">
        <div class="pr-menu">
	        <?php
	        print theme('links__system_main_menu', array(
	          'links' => $main_menu,
	          'attributes' => array(
							'class' => array('links', 'primary-links'),
	          ),
	          'heading' => array(
	            'text' => t('Main menu'),
	            'level' => 'h2',
	            'class' => array('element-invisible'),
	          ),
	        )); ?>				
        </div>			  
      </div>

    </div>

    <div id="cont">
      <div class="cont-inner">
        <div style="width:100%; overflow:hidden">
          <!--This div extremely needed for IE6-->

          <div id="left-col">
            <div class="ind">
              <div class="width">
                <div class="block block-user" id="block-user-1">
                  <div class="block-top">
                    <div class="title">
                      <h3>Каталог</h3>
                    </div>
                    <div class="content">
										  <?php
											$catalog_menu = menu_navigation_links('menu-catalog');
											print theme('links', array(
										    	'links' => $catalog_menu,
										    	'attributes' => array(
													'class' => 'menu',
										    ),
										    	'heading' => array(
										    	'text' => t('Catalog menu'),
										    	'level' => 'h2',
										    	'class' => array('element-invisible'),
										    ),
											)); 
											?>
                    </div>
                  </div>
                </div>
								
								<?php print render($page['sidebar_first']); ?>
								
              </div>
            </div>
          </div>

          <div id="cont-col">
            <div class="ind">
              <!-- start main content -->

							<?php print render($page['highlighted']); ?>
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
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="footer">
    <div class="foot">
      <span>Инструмент+ <?php print date('Y');?></span>
    </div>
  </div>
</div>
