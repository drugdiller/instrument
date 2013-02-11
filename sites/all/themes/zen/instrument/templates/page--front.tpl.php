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

      <div class="head-row3" id="fade">
        <img style="margin-left:5px;" src="/<?php print path_to_theme(); ?>/images/e.png">
				<img style="margin-left:5px;" src="/<?php print path_to_theme(); ?>/images/e2.jpg">
      </div>

      <div class="head-row4">
        <div class="col1">
          <div>
            <?php print date('d m Y');?>
          </div>
        </div>

        <div class="col2"></div>
      </div>
			<!-- баннеры-->
      <div class="head-row5" id="custom">
        <div class="block block-block" id="block-block-14">
          <div class="block-top">
            <div class="title"></div>
            <div class="content">
              <a href="/taxonomy/term/4"><img alt="" src="/<?php print path_to_theme(); ?>/images/banner.jpg" /></a>
            </div>
          </div>
        </div>

        <div class="block block-block" id="block-block-15">
          <div class="block-top">
            <div class="title"></div>

            <div class="content">
              <a href="/taxonomy/term/7"><img alt="" src="/<?php print path_to_theme(); ?>/images/banner2.jpg" /></a>
            </div>
          </div>
        </div>

        <div class="block block-block" id="block-block-16">
          <div class="block-top">
            <div class="title"></div>

            <div class="content">
              <a href="/taxonomy/term/8"><img alt="" src="/<?php print path_to_theme(); ?>/images/banner3.jpg" /></a>
            </div>
          </div>
        </div>
      </div>
			<!-- баннеры-->
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
							<div class="content">
								<?php print render($page['content']); ?>
								<img alt="" class="alignleft" src="/<?php print path_to_theme(); ?>/images/img.png" />
								<?php
								$content = '<ul class="pic-list">';
								$query = new EntityFieldQuery();
								$query->entityCondition('entity_type', 'node');
								$query->propertyCondition('status', 1);
								$query->propertyCondition('type', 'news');
								$query->propertyOrderBy('created', 'DESC');
								$query->range(0,3);
								$res = $query->execute();
								$nodes = node_load_multiple(array_keys($res['node']));
								foreach ($nodes as $record) {
									$content .= '<li>';
									$content .= '<span class="date">'.date("d m y", $record->created).' - </span>';
									$content .= l(
										$record->title,
										'node/'.$record->nid, 
										array(
											'attributes' => array(
												'class' => 'news-lnk'
												),
										)
									);
									$content .= '</li>';
								}
								$content .= '</ul>';
								print $content;
								?>
								<div class="clear">&nbsp;</div>
								
							</div>
							<?php print $feed_icons; ?>

              <div id="custom2">
                <div class="block block-block" id="block-block-18">
                  <div class="block-top">
                    <div class="title">
                      <h3>Наши партнеры</h3>
                    </div>
                    <div class="content"><img alt="" src=
                    "/<?php print path_to_theme(); ?>/images/partner.gif" /><img alt="" src=
                    "/<?php print path_to_theme(); ?>/images/partner2.gif" /><img alt="" src=
                    "/<?php print path_to_theme(); ?>/images/partner3.gif" /><img alt="" src=
                    "/<?php print path_to_theme(); ?>/images/partner4.gif" /><img alt="" src=
                    "/<?php print path_to_theme(); ?>/images/partner5.gif" /><img alt="" src=
                    "/<?php print path_to_theme(); ?>/images/partner6.gif" /></div>
                  </div>
                </div>
              </div>
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