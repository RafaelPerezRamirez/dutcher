<nav class="animationMenu">
    <div class="header-menu text-center">
        <div class="menu-button pointer centrar_alto">
            <span class="span-button-uno"></span>
            <span class="span-button-dos centrar_alto"></span>
            <span class="span-button-tres"></span>
        </div>
        <a href="<?php echo get_home_url(); ?>" class="logo-button centrar_alto logo-header">
            <img src="<?php echo assets(); ?>/images/logodutcher.png" alt="">
        </a>
        <div class="links-category">
            <?php
                $args = array(
                    'menu_id' => 'menu-header',
                );
                wp_nav_menu( $args);
            ?>
            <div class="inline middle search-button pointer">
                <img src="<?php assets(); ?>/images/search.png" alt="">
            </div>
        </div>
    </div>
    <form role="search" method="get" id="searchform" class="searchform form-search animationMenu" action="<?php echo home_url('/'); ?>">
        <input type="text" name="s" id="s" placeholder="Buscar">
    </form>
</nav>
<div class="redes-cont-fix text-center">
    <div class="avenir-normal big text-center color-white">
        Síguenos en redes
    </div>
    <a href="https://www.facebook.com/Dutchermx/" class="red-fija red-fija-fb inline middle" target="_blank"></a>
    <a href="https://www.instagram.com/dutchermx/" class="red-fija red-fija-ins inline middle" target="_blank"></a>
</div>
