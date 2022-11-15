<?php

/* Template Name: Topics Page */

get_header(); ?>
<div id="Topics">
    <?php include get_template_directory() . '/inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <div class="news-topics">
                    <div class="news-topics--title">
                        <h2 class="sect--title">ニュース</h2>
                    </div>
                    <ul>
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 10,
                            'paged' => $paged,
                            'post__not_in' => array(85),
                        );
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li id="<?php echo get_the_ID(); ?>">
                                    <span><?php echo get_the_date('Y/m/d'); ?></span>
                                    <div class="topics--right">
                                        <p class="topics--right__title"><?php the_title(); ?></p>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                            <?php echo wp_pagenavi(array('query' => $the_query)); ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>