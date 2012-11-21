<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

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
			<div id="main">
    		<div id="content">	
					<div class="promo-1">
						<ul>
							<li class="show">
								<img alt="" src="/sites/all/themes/superdiod/img/promo.png" /></li>
							<li>
								<img alt="" src="/sites/all/themes/superdiod/img/promo2.png" /></li>
						</ul>
						
						<div class="phone-icon">
							<img src="/<?php print path_to_theme() ?>/img/phone-icon.gif">
						</div>
						<div class="phone-text">812 923-93-87</div>
						<div class="clear"></div>
						<div class="pdf">
							<a href="/sites/default/files/catalog.pdf">
								<img src="/<?php print path_to_theme() ?>/img/pdf.png">
							</a>
						</div>
						<div class="pdf-link">
							<a href="/sites/default/files/catalog.pdf">ПРАЙС-ЛИСТ</a>
						</div>
						<div class="pdf-size">22 Мб</div>
						
					</div>
					<div class="promo-2">
						<h2>Светодиодное освещение это:</h2>
						<ul>
							<li>Высокое энергосбережение;</li>
							<li>Большой срок службы (до&nbsp;120 тысяч часов);</li>
							<li>Быстрый срок окупаемости (около 3х&nbsp;лет);</li>
							<li>Отсутствие вредных излучений;</li>
							<li>Отсутствие проблем с&nbsp;утилизацией;</li>
							<li>Полный или желаемый спектр излучаемого света;</li>
							<li>Не&nbsp;содержат вредных соединений и&nbsp;веществ;</li>
							<li>Устойчивость к&nbsp;перепадам питания;</li>
							<li>Отсутствие светового мерцания;</li>
							<li>Отсутствие разогрева;</li>
							<li>Высокая световая отдача (большой световой поток, при небольшой мощности);</li>
							<li>Безинерционность;</li>
							<li>Стойкость к&nbsp;коррозии;</li>
							<li>Механическая прочность.</li>
						</ul>
					</div>
				  <div class='clear'></div>
				</div> <!-- /#content -->

    			<aside>
					<div id="sidebar-right">
							<?php if ($main_menu): ?>
						    <nav id="navigation">
								<div class="section">
									<p class="menu-main">Каталог</p>
						    		<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('menu-catalog')), 'heading' => array('text' => t('Secondary menu'), 'level' => 'h2', 'class' => array('element-invisible'))));  ?>
									<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('menu-main')), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'))));  ?>
						    </div>
							</nav> <!-- /.section, /#navigation -->
						<?php endif; ?>
						<?php print render($page['sidebar_right']); ?>
					</div>
				</aside> <!-- /#sidebar-right -->
				<div class="clear"></div>
			</div>
		</div> <!-- /#main, /#main-wrapper -->
		
		<?php if ($is_front ): ?>
		<div class="promo-3">
			<p>Освещение светодиодными светильниками — это новейшие технологии, служащие для комфортного, а главное энергосберегающего освещения дома, производства и других общественных мест. Появившись совсем недавно, как и другая светодиодная техника, светодиодные системы освещения уже успели занять достойное место среди технических новинок и потеснить своих более древних собратьев, галогеновые, ртутные лампы и лампы накаливания. Поэтому не удивительно, что весь цивилизованный мир, и наша страна в том числе, спешно переходит на энергосберегающие светильники. Даже на законодательном уровне приняты меры для того, чтобы все промышленные объекты и частные лица использовали светодиодные led светильники.</p>
		</div>
		<div class="promo-4">
			<img src="/<?php print path_to_theme() ?>/img/promo2.png">
		</div> 
		<div class="promo-5">	
			<h2>Компания «Супердиод»</h2>
			<p>Компания «Супердиод» предлагает большой выбор диодной светотехники. Наше основное направление — светодиодные светильники в СПб для промышленных помещений, офисов, объектов жкх, а также уличное светодиодное освещение. Цена на светодиодные светильники в нашем ассортименте сильно варьируется и зависит в основном от мощности светового потока, поэтому Вы всегда сможете подобрать именно, то что нужно Вам по приемлемой цене. За время работы по продаже, разработке, обслуживанию светодиодного освещения, мы наработали большое количество связей с поставщиками светильников и можем предложить, как отечественную продукцию, так и импортную. Все зависит от конкретных задач.</p>

			<p>Просто свяжитесь с нашими менеджерами, и Вы получите консультацию по всем, интересующим Вас вопросам. Вам предложат оптимальные варианты освещения, подходящие именно в Вашем случае. Это поможет Вам найти «золотую середину» между финансовыми вложениями и эффективностью светового решения. В случае необходимости наши специалисты приедут к Вам на объект, рассчитают и предложат Вам купить светодиодные светильники (led светильники) подходящие для реализации Вашей задачи, а также любую другую светотехнику.</p>
		</div>
		<?php endif; ?>
		<div class="clear"></div>
		<footer>
			<div id="footer">
	  			<?php print render($page['footer']); ?>
			</div>
		</footer> <!-- /#footer -->
	</div>
</div> <!-- /#page, /#page-wrapper -->