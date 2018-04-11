
<div>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="wrap xphoto-footer">
            <div class="col text-center">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="logo" src="<?php echo get_option('logo_url'); ?>">
                </a>

                <?php echo wp_nav_menu();?>

                <p><small><?php echo get_option('footer_text'); ?></small></p>
                <p><small>Designed by xsienes.com</small></p>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
