<?php get_header();?>

<div id="content" role="main" class="content-blog">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="single-header relative" style="background-image:url('<?php echo the_post_thumbnail_url( ); ?> ');">
    </div>
    <div class="body-single">
        <main class="main-single inline top">
            <div id="post-<?php the_ID(); ?>">
                <div class="category-single avenir-normal medium ls2 uppercase">
                    <?php the_category(', ') ?>
                </div>
                    <h2 class="avenir-bold titlespecial ls2 uppercase text-center"><?php the_title(); ?></h2>
                    <h3 class="avenir-normal ls2 text-center subtitle-single"><?php the_subtitle(); ?></h3>
                <div class="author-small">
                    <?php echo Gafa\GafaTemplate::Imprimir( 'user/user.tpl.php'); ?>
                </div>
                <div class="avenir-normal medium uppercase text-center">
                    <?php the_time('j') ?> de <?php the_time('F, Y'); ?>
                </div>
                <hr class="hr-single">
                <section class="content-single espinoza-normal big text-justify">
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
                <div class="fb-comments" data-href="https://www.facebook.com/Dutchermx/" data-width="100%" data-numposts="10"></div>
                
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
                                </div>
                                <a href="<?php echo the_permalink(); ?>" class="avenir-bold big uppercase ls1 title-related"><?php the_title(); ?></a>
                                <a href="<?php echo the_permalink(); ?>" class="avenir-normal medium">
                                    <?php the_excerpt(); ?>
                                </a>
                            </a>
                        </div>
                    <?php }
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </main>
        <aside class="single-aside-left inline top">
            <div class="facebook-plugin">
                <div class="fb-page" data-href="https://www.facebook.com/Dutchermx/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Dutchermx/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Dutchermx/"></a></blockquote></div>
            </div>
            <div class="most-recent">
                <div class="text-center avenir-normal text-most-recent">
                    Lo más reciente
                </div>
                <hr class="hr-recent">
                <?php
                    query_posts('order=Desc');
                ?>
                <?php echo Gafa\GafaTemplate::Imprimir( 'notas/nota.tpl.php'); ?>
            </div>
        </aside>
    </div>
</div>
<?php get_footer(); ?>
