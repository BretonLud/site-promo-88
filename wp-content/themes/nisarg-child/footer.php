<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Nisarg
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="site-info">
        <p>6 avenue du Maréchal Juin, 70200 Lure</p>
        <div class="site-footer__commits">
            <p>Derniers commits :</p>
            <div class="site-footer__commit">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('<b>footer_top'))?></b>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>