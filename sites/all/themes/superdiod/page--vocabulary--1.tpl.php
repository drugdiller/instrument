<div id="page-wrapper">
	<div id="page">
		<header id="header">
			<div class="section clearfix">
				<div id="site-name">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
				</div>
    	    	
    			<?php print render($page['header']); ?>
			</div>
		</header> <!-- /.section, /#header -->

		<div id="main-wrapper">
			<div id="main" class="clearfix<?php if ($main_menu) { print ' with-navigation'; } ?>">
    			<div id="content">
    			  	<?php if ($page['highlighted']): ?>
    			  	<div id="highlighted"><?php print render($page['highlighted']); ?></div>
    			  	<?php endif; ?>
    			  	<?php print $messages; ?>
    			  	<?php if ($tabs): ?>
    			  	<div class="tabs"><?php print render($tabs); ?></div>
    			  	<?php endif; ?>
    			  	<?php print render($page['help']); ?>
    			  	<?php if ($action_links): ?>
    			  	<ul class="action-links"><?php print render($action_links); ?></ul>
    			  	<?php endif; ?>
    			  	<?php print render($page['content']); ?>
				  	<div class='clear'></div>
					
					<?php $current = taxonomy_term_load(arg(2)); ?>
					<?php if ($current): ?>
					<div class="taxonomy-description">
					<?php echo $current->description; ?>
					</div>
					<?php endif; ?>
				</div> <!-- /.section, /#content -->

    
    			<aside>
					<div id="sidebar-right">
						<?php if ($title && !$is_front ): ?>
    			    		<h1 class="title" id="page-title"><?php print $title; ?></h1>
    			  		<?php endif; ?>
							<?php if ($main_menu): ?>
						    <nav id="navigation">
								<div class="section">
									<p class="menu-main">Каталог</p>
						    		<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('menu-catalog')), 'heading' => array('text' => t('Secondary menu'), 'level' => 'h2', 'class' => array('element-invisible'))));  ?>
									<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('menu-main')), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'))));  ?>
									<div class="phone-icon"><img src="/sites/all/themes/boron/img/phone-icon.gif"></div><div class="phone-text">812 923-93-87</div>
								 	<div class="clear"></div>
									<div class="pdf"><a href="/sites/default/files/catalog.pdf"><img src="/sites/all/themes/boron/img/pdf.png"></a></div><div class="pdf-link"><a href="/sites/default/files/catalog.pdf">ПРАЙС-ЛИСТ</a></div><div class="pdf-size">22 Мб</div>
						    	</div>
							</nav> <!-- /.section, /#navigation -->
						<?php endif; ?>
						<?php print render($page['sidebar_right']); ?>
					</div>
				</aside> <!-- /#sidebar-right -->
			</div>
		</div> <!-- /#main, /#main-wrapper -->
		
		<div class="clear"></div>
		<footer>
			<div id="footer">
	  			<?php print render($page['footer']); ?>
			</div>
		</footer> <!-- /#footer -->
	</div>
</div> <!-- /#page, /#page-wrapper -->
<!--<script type="text/javascript" src="/sites/all/themes/boron/modulargrid.js"></script>-->
