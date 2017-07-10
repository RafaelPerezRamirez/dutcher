<?php
    query_posts('order=Desc&posts_per_page=1');
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="relative content-principal">
    <div class="info-author absolute">
        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="inline middle foto-autor" style="background-image:url(<?php echo get_avatar_url( get_the_author_meta( 'ID' )); ?>);"></a>
        <div class="inline name-author big color_white avenir-normal inline middle ls1">
            <?php the_author_posts_link(); ?>
        </div>
    </div>
    <a href="<?php the_permalink() ?>" class="most-recent-post relative" style="background-image:url('<?php echo the_post_thumbnail_url( ); ?> ');">
        <div class="shadow-position absolute"></div>
        <div class="info-post text-right color-white">
            <div class="titlespecial avenir-bold uppercase ls2">
                <?php the_title(); ?>
            </div>
            <div class="title avenir-normal ls1 excerpt">
                <?php echo get_the_excerpt();?>
            </div>
        </div>
    </a>
</div>
<?php endwhile;?>
