<footer class="main-footer">
    <div class="content-footer">
        <?php
        $args2 = array(
            'theme_location' => 'bottom-menu',
            'container_class' => 'bottom-menu',
            'menu_class' => 'b-menu__list',
            'depth' => 1
        );
        wp_nav_menu($args2);
        ?>
        <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link">
                    loftschool <?php echo date('Y') ?></a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<?php wp_footer() ?>
</body>
</html>
