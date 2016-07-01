<?php
get_header();
the_post();
?>
<section>
    <div class="row">
        <div class="column xs-span12<?php if (is_active_sidebar('main-sidebar')) echo ' lg-span8'; ?>">
            <div class="column-inner">
                <div class="single-post-meta">
                    <?php the_title('<h2>', '</h2>'); ?>
                    <h4><?php the_time('F j, Y'); ?>, by <?php the_author(); ?></h4>
                    <?php
                    $categories = get_the_category();
                    if ($categories) : ?>
                        <h6>Categories:
                            <ul class="categories">
                                <?php foreach ($categories as $c) : ?>
                                <li class="cat-item"><a href="<?php echo get_category_link($c->term_id); ?>" title="View all posts in <?php echo $c->name; ?>"><?php echo $c->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </h6>
                    <?php endif; ?>
            
                    <?php if (has_tag()) : ?>
                    <h6><?php the_tags(); ?></h6>
                    <?php endif;?>
                </div>
            
                <div class="single-post-content<?php if (comments_open()) echo ' comments-open'; ?>">
                    <?php the_content(); ?>
                </div>
                
                <?php if (comments_open()) comments_template(); ?>
            </div>
        </div>
        <?php if (is_active_sidebar('main-sidebar')) get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>