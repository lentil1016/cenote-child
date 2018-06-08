<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elegantwriting
 */

?>
</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <?php if ( is_active_sidebar( 'footer_widget_left') ||  is_active_sidebar( 'footer_widget_middle') ||  is_active_sidebar( 'footer_widget_right')  ) : ?>
        <div class="footer-widgets-wrapper">
            <div class="container">
                <div class="footer-widget-single">
                    <?php dynamic_sidebar( 'footer_widget_left' ); ?>
                </div>
                <div class="footer-widget-single footer-widget-middle">
                    <?php dynamic_sidebar( 'footer_widget_middle' ); ?>
                </div>
                <div class="footer-widget-single">
                    <?php dynamic_sidebar( 'footer_widget_right' ); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="site-info">
        <div class="container">
            <?php echo esc_html('&copy;') . esc_html(date_i18n(__('Y','elegantwriting'))); ?> <?php bloginfo( 'name' ); ?>

            <!-- Delete below lines to remove copyright from footer -->
            <span class="footer-info-right">
            <?php echo __(' | WordPress Theme by', 'elegantwriting') ?> <a href="<?php echo esc_url('https://superbthemes.com/', 'elegantwriting'); ?>"><?php echo __(' Superbthemes', 'elegantwriting') ?></a> | <a rel="sitemap" href="https://lentil1016.cn/sitemap.xml"><img alt="XML Sitemap Feed" style="border-width:0" src="https://lentil1016.cn/wp-content/themes/elegantwriting-child/img/xml-sitemaps-htext-15.png"/></a> | <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br />本博客作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">知识共享署名-非商业性使用-相同方式共享4.0国际许可协议</a>进行许可。
            </span>
            <!-- Delete above lines to remove copyright from footer -->
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
