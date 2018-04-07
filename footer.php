
<div>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="wrap xphoto-footer">
            <div class="col text-center">
                <img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png">
                <ul>
                <?php
                $menus = wp_get_nav_menu_items( 'main-menu' );
                foreach($menus as $menu) : ?>
                    <li><a class="underline" href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a></li>
                <?php endforeach;?>
                </ul>

                <p><small>COPYRIGHT &copy; 2018 JOSEPH ANDREW PHOTOGRAPHY|CINEMATOGRAPHY</small></p>
                <p><small>Designed by xsienes.com</small></p>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
