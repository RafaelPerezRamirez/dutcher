<?php get_header();?>

<div id="content" role="main" class="content-blog">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="single-header relative" style="background-image:url('<?php echo the_post_thumbnail_url( ); ?> ');">
        <div class="category-single avenir-normal medium ls2 uppercase">
            <?php the_category(', ') ?>
        </div>
        <div class="centrar_total">
            <h2 class="espinoza-normal color_white titlespecial ls2 uppercase text-center"><?php the_title(); ?></h2>
            <h3 class="espinoza-normal color_white ls2 text-center subtitle-single"><?php the_subtitle(); ?></h3>
        </div>
    </div>
    <div class="body-single">
        <main class="main-single inline top">
            <div id="post-<?php the_ID(); ?>">
                <div class="avenir-normal medium uppercase">
                    <?php the_time('j') ?> de <?php the_time('F, Y'); ?>
                </div>
                <hr class="hr-single">
                <section class="content-single espinoza-normal big ls1 text-justify">
                    <?php the_content(); ?>
                </section>
                <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
            </div>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <div class="comments-fb">
                <br>
                <div class="avenir-bold uppercase big">
                    Queremos saber tu opinión
                </div>
                <hr class="hr-single">
                <br>
                <?php echo do_shortcode('[fbcomments]'); ?>
            </div>
            <hr class="hr-single">
            <div class="related-single">
                <h3 class="avenir-normal title">Articulos Relacionados</h3>
                <br>
                <div class="content-related">
                    <?php
                    $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
                    if( $related ) foreach( $related as $post ) {
                        setup_postdata($post); ?>
                        <div class="content-single-related">
                            <a class="single-related-post" href="<?php the_permalink() ?>">
                                <div class="image-related relative" style="background-image:url('<?php echo the_post_thumbnail_url( ); ?> ');">
                                    <div class="category-single avenir-normal medium ls2 uppercase">
                                        <?php the_category(', ') ?>
                                    </div>
                                </div>
                                <div class="avenir-bold big uppercase ls1 title-related"><?php the_title(); ?></div>
                                <div class="avenir-normal medium">
                                    <?php the_excerpt(); ?>
                                </div>
                            </a>
                        </div>
                    <?php }
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </main>
        <aside class="single-aside-left inline top">
            <?php echo Gafa\GafaTemplate::Imprimir( 'user/user.tpl.php'); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>
