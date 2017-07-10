<?php get_header(); ?>
<div class="content-archive relative">
    <?php
        if (is_author()){
            echo Gafa\GafaTemplate::Imprimir( 'user/user.tpl.php');
        }
    ?>
    <div class="category-template">
        <?php
        if ( have_posts() ) : ?>
        <header class="archive-header">
            <?php
            if (is_author()){

            }else{
                echo'<div class="category-tab avenir-normal title uppercase ls5 text-left">';
                    single_cat_title( '', true );
                echo '</div>';
            }
            if ( category_description() ) : ?>
                <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>
        </header>
        <?php echo Gafa\GafaTemplate::Imprimir( 'notas/nota.tpl.php'); ?>
        <?php else: ?>
            <div class="avenir-normal title">
                No hay resultados <a class="color-green" href="<?php echo get_home_url(); ?>">click para volver al inicio</a>
            </div>
        <?php endif; ?>
        <div class="pagination-content">
            <?php if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'posts' ); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
