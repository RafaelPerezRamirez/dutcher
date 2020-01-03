<div class="trending-post">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="single-post relative" style="background-image:url('<?php echo the_post_thumbnail_url( ); ?> ');">
        <div class="category-single avenir-normal medium ls2 uppercase">
            <?php the_category(', ') ?>
        </div>
        <div class="shadow-position absolute animationMenu"></div>
        <div class="info-author absolute">
            <div class="inline name-author big color_white avenir-normal inline middle ls1">
                <?php the_author_posts_link(); ?>
            </div>
        </div>
        <div class="info-post text-right color-white animationMenu">
            <a href="<?php the_permalink() ?>" class="title avenir-bold uppercase ls2">
                <?php the_title(); ?>
            </a>
            <a href="<?php the_permalink() ?>" class="big avenir-normal ls1 excerpt">
                <?php echo get_the_excerpt();?>
            </a>
        </div>
    </div>
    <?php endwhile;?>
</div>
