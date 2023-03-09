<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hobi
 */

if( is_single() ): ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('blog-wrapper mb-30'); ?> data-wow-delay=".3s">
            <?php if(has_post_thumbnail()): ?>
                <div class="blog-img">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
                </div>
            <?php endif; ?>
            <div class="blog-text blog2-text blog-details-content">
                <div class="blog-meta">
                    <span>
                        <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                            <i class="far fa-user"></i> <?php print get_the_author(); ?>
                        </a>
                    </span>
                    <span><i class="far fa-calendar-alt"></i> <?php the_time(get_option('date_format')); ?> </span>
                    <span><a href="<?php comments_link(); ?>"><i class="far fa-comments"></i> <?php comments_number(); ?></a></span>
                </div>
                <h4 class="blog-title"><?php the_title(); ?></h4>
                <div class="post-entry">
                    <?php the_content(); ?>
                    <?php
                        wp_link_pages( array(
                            'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'hobi' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        ) );
                    ?>
                </div>
                <?php print hobi_get_tag(); ?>
            </div>
        </div>
<?php
else: ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('blog-wrapper mb-40'); ?> data-wow-delay=".3s">
        <?php if( has_post_thumbnail() ): ?>
            <div class="blog-img">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="blog-text blog2-text">
            <div class="blog-meta">
                <span>
                    <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <i class="ti-user"></i> <?php print get_the_author(); ?>
                    </a>
                </span>
                <span><i class="ti-time"></i> <?php the_time(get_option('date_format')); ?> </span>
                <span><a href="<?php comments_link(); ?>"><i class="ti-comment"></i> <?php comments_number(); ?></a></span>
            </div>
            <h4 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <div class="blog-d-btn">
                <a class="btn" href="<?php the_permalink(); ?>"> <?php print esc_html__('Read More','hobi'); ?></a>
            </div>
        </div>
    </div>
<?php
endif; ?>


