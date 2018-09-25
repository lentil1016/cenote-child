<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cenote
 */

?>
		</div><!-- .tg-container -->
	</div><!-- #content -->

	<?php
	// Show related post if enabled.
	if ( true === get_theme_mod( 'cenote_single_enable_related_post', true ) && is_single() ) {
		get_template_part( 'template-parts/related/related', 'post' );
	}
	?>
	<footer id="colophon" class="site-footer tg-site-footer <?php cenote_footer_class(); ?>">
		<div class="tg-footer-top">
			<div class="tg-container">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div><!-- .tg-footer-top -->

		<div class="tg-footer-bottom">
			<div class="tg-container">
				<div class="tg-footer-bottom-container tg-flex-container">
					<div class="tg-footer-bottom-left">
                        <div class="site-info">Copyright 2018 Lentil's Home All Right Reserved. Theme By <a href="https://themegrill.com/themes/cenote">ThemeGrill</a>. Proudly powered by <a href="https://wordpress.org">WordPress</a></br><a rel="sitemap" href="https://lentil1016.cn/sitemap.xml"><img alt="XML Sitemap Feed" style="border-width:0" src="https://lentil1016.cn/wp-content/themes/cenote-child/img/xml-sitemaps-htext-15.png"/></a> | <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0;padding-top: 2px;" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a> | 本博客作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">知识共享署名-非商业性使用-相同方式共享4.0国际许可协议</a>进行许可。</div>
					</div><!-- .tg-footer-bottom-left -->
					<div class="tg-footer-bottom-right">
					</div><!-- .tg-footer-bottom-right-->
				</div><!-- .tg-footer-bootom-container-->
			</div>
		</div><!-- .tg-footer-bottom -->
	</footer><!-- #colophon -->

</div><!-- #page -->
<?php
do_action( 'cenote_after_footer' );
wp_footer();
?>

</body>
</html>
