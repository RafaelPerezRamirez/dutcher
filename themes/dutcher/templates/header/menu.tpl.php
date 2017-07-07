<nav class="animationMenu">
    <div class="header-menu text-center">
        <div class="menu-button pointer centrar_alto">
            <span class="span-button-uno"></span>
            <span class="span-button-dos centrar_alto"></span>
            <span class="span-button-tres"></span>
        </div>
        <a href="<?php echo get_home_url(); ?>" class="logo-button centrar_alto">
            <object data="<?php echo assets(); ?>/images/logo2.svg" type="image/svg+xml" class="logo"></object>
        </a>
    </div>
    <div class="links-category">
        <?php
            $args = array(
                'menu_id' => 'menu-header',
            );
            wp_nav_menu( $args);
        ?>
        <div class="inline middle search-button">

        </div>
    </div>
</nav>
