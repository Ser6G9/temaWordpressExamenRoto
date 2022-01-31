</body>
<footer class="blog-footer">
    <div class="contariner">
        <div class="row">
            <div class="col-md-6">
                <?php echo get_bloginfo("description") ?> 
                <?php 
                wp_nav_menu ( 
                    array(
                        'theme_location'  => 'temazo_menu_principal',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNav',
                        'menu_class'      => 'navbar-nav mr-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    )
                ); ?>
            </div>
            <div class="col-md-6">
               Menú
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</html>