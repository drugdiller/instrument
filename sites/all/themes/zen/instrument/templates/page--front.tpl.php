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

      <div class="head-row3">
        <img style="margin-left:5px;" src="/<?php print path_to_theme(); ?>/images/e.png">
      </div>

      <div class="head-row4">
        <div class="col1">
          <div>
            <?php print date('d m Y');?>
          </div>
        </div>

        <div class="col2"></div>
      </div>
			<!-- баннеры
      <div class="head-row5" id="custom">
        <div class="block block-block" id="block-block-14">
          <div class="block-top">
            <div class="title"></div>
            <div class="content">
              <a href="#"><img alt="" src="/<?php print path_to_theme(); ?>/images/banner.jpg" /></a>
            </div>
          </div>
        </div>

        <div class="block block-block" id="block-block-15">
          <div class="block-top">
            <div class="title"></div>

            <div class="content">
              <a href="#"><img alt="" src="/<?php print path_to_theme(); ?>/images/banner2.jpg" /></a>
            </div>
          </div>
        </div>

        <div class="block block-block" id="block-block-16">
          <div class="block-top">
            <div class="title"></div>

            <div class="content">
              <a href="#"><img alt="" src="/<?php print path_to_theme(); ?>/images/banner3.jpg" /></a>
            </div>
          </div>
        </div>
      </div>-->
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
								

                <!--<div class="block block-user" id="block-user-0">
                  <div class="block-top">
                    <div class="title">
                      <h3>User login</h3>
                    </div>

                    <div class="content">
                      <form action="/drupal_27410/?q=node&amp;destination=node"
                      accept-charset="UTF-8" method="post" id="user-login-form">
                        <div>
                          <div class="form-item" id="edit-name-wrapper">
                            <label for="edit-name">Username: <span class=
                            "form-required" title=
                            "This field is required.">*</span></label>
                            <input maxlength="60" name="name" id="edit-name" size="15"
                            class="form-text required" type="text" />
                          </div>

                          <div class="form-item" id="edit-pass-wrapper">
                            <label for="edit-pass">Password: <span class=
                            "form-required" title=
                            "This field is required.">*</span></label> <input name=
                            "pass" id="edit-pass" maxlength="60" size="15" class=
                            "form-text required" type="password" />
                          </div><input name="op" id="edit-submit" value="Log in" class=
                          "form-submit" type="submit" />

                          <div class="item-list">
                            <ul>
                              <li class="first"><a href=
                              "http://osc.template-help.com/drupal_27410/?q=user/register"
                              title="Create a new user account.">Create new
                              account</a></li>

                              <li class="last"><a href=
                              "http://osc.template-help.com/drupal_27410/?q=user/password"
                              title="Request new password via e-mail.">Request new
                              password</a></li>
                            </ul>
                          </div><input name="form_build_id" id=
                          "form-e385a1a84f35663bcffe0c3bb654fce3" value=
                          "form-e385a1a84f35663bcffe0c3bb654fce3" type=
                          "hidden" /><input name="form_id" id="edit-user-login-block"
                          value="user_login_block" type="hidden" />
                        </div>
                      </form>
                    </div>
                  </div>
									</div> -->
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