<?php get_header(); ?>
<div class="category-template">
    <?php
    if ( have_posts() ) : ?>
    <header class="archive-header">
        <div class="category-tab avenir-normal title uppercase ls5 text-left">
            <?php
            if (is_author())
            {
                echo ' Todas las entradas '.the_author_posts_link();
            }else{
                single_cat_title( '', true );
            }
            ?>
        </div>
        <?php
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
<?php get_footer(); ?>
