<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

// get the tools menu
//$menu = get_register('menu');

?>

<div class="clearfloat"></div>

<div id="layout_footer">
	<?php
		echo elgg_view('footer/links');
	?>
	<p class="footer_legal_links">
		Powered by Elgg, the leading open source social networking platform
	</p>
	<p class="footer_powered_by_links">
		<a href="http://www.elgg.org" target="_blank">
			<img src="<?php echo $vars['url']; ?>_graphics/powered_by_elgg_badge_drk_bckgnd.gif" border="0" />
		</a>

		<a href="http://www.php.net" target="_blank">
			<img src="<?php echo $vars['url']; ?>mod/wlug_theme/img/php_powered.png" border="0" />
		</a>

		<a href="http://www.mysql.com" target="_blank">
			<img src="<?php echo $vars['url']; ?>mod/wlug_theme/img/mysql_powered.png" border="0" />
		</a>

		<a href="http://httpd.apache.org" target="_blank">
			<img src="<?php echo $vars['url']; ?>mod/wlug_theme/img/apache_powered.png" border="0" />
		</a>

		<a href="http://en.wikipedia.org/wiki/Linux" target="_blank">
			<img src="<?php echo $vars['url']; ?>mod/wlug_theme/img/linux_powered.png" border="0" />
		</a>
	</p>
</div><!-- /#layout_footer -->

<div class="clearfloat"></div>

</div><!-- /#page_wrapper -->
</div><!-- /#page_container -->
<!-- insert an analytics view to be extended -->
<?php
	echo elgg_view('footer/analytics');
?>
</body>
</html>