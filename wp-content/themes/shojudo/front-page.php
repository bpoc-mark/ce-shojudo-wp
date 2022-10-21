<?php get_header(); ?>
<div id="New-Top">
    <section class="sect1">
        <div class="wrapper">
            <div class="banner">
                <div class="swiper banner--swiper2">

                    <div class="swiper-wrapper">

                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                        $args = array(
                            'post_type' => 'banner',
                            'post_status' => 'publish',
                            'paged' => $paged,
                        );

                        $the_query = new WP_Query($args);
                        ?>

                        <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="swiper-slide">
                            <a href="">
                                <?php echo the_post_thumbnail('full'); ?>
                            </a>
                        </div>

                        <?php endwhile; ?>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper02">
            <div class="container">
                <div class="swiper-pagination"></div>
                <div class="sect1--banner__s">
                    <figure>
                        <a href="https://www.shojudo.co.jp/shohinken/"><img
                                src="<?php echo get_template_directory_uri(); ?>/release/image/new-top/section-1/top2__banner__s1.svg"
                                alt="arrow" /> </a>
                    </figure>
                    <figure>
                        <a href="https://www.lonposhopsjd.com/"><img
                                src="<?php echo get_template_directory_uri(); ?>/release/image/new-top/section-1/top2__banner__s2.svg"
                                alt="arrow" /> </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="sect2">
        <div class="wrapper">
            <div class="container">
                <div class="news-topics">
                    <div class="news-topics--title">
                        <h2 class="sect--title">ニュース</h2>
                        <a class="view-all" href="https://shojudo.com/news/">
                            <p>View All</p>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/view-all-arrow-right.svg"
                                    alt="arrow" />
                            </figure>
                        </a>
                    </div>
                    <ul>
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                            'paged' => $paged,
                            'post__not_in' => array(85),
                        );

                        $the_query = new WP_Query($args);
                        ?>

                        <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <?php
                                $id = get_the_ID();
                                ?>
                        <li>
                            <a href="https://shojudo.com/news//#<?php echo $id; ?>">
                                <span><?php echo get_the_date('Y/m/d'); ?></span>
                                <p><?php the_title(); ?></p>
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/arrow-right.svg"
                                        alt="arrow" />
                                </figure>
                            </a>
                        </li>

                        <?php endwhile; ?>

                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sect3">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">技術紹介</h2>
                <div class="boxes">
                    <ul class="box--wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = [
                            'post_type' => 'goods',
                            'post_status' => 'publish',
                            'posts_per_page' => 12,
                            'paged' => $paged,
                            'tax_query' => array(array(
                                'taxonomy' => 'goods_cat',
                                'field' => 'slug',
                                'terms' => 'technology'
                            ))
                        ];

                        $the_query = new WP_Query($args);
                        ?>

                        <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="box--container">
                            <a href="<?php echo get_permalink(); ?>">
                                <figure class="white--border">
                                    <?php echo the_post_thumbnail(); ?>
                                </figure>
                                <h3 class="box--title"><?php echo the_title(); ?></h3>
                                <div class="box--desc">
                                    <p><?php echo the_content(); ?></p>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sect4">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">製品紹介</h2>
                <p class="sect--sub"></p>
                <div class="boxes">
                    <ul class="box--wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = [
                            'post_type' => 'goods',
                            'post_status' => 'publish',
                            'posts_per_page' => 12,
                            'paged' => $paged,
                            'tax_query' => array(array(
                                'taxonomy' => 'goods_cat',
                                'field' => 'slug',
                                'terms' => 'product'
                            ))
                        ];

                        $the_query = new WP_Query($args);
                        ?>

                        <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="box--container">
                            <a href="<?php echo get_permalink(); ?>">
                                <figure>
                                    <?php
                                            $file = get_field('banner');
                                            $default_img = get_template_directory_uri();

                                            if ($file['type'] == 'image') {
                                                $img = $file['sizes']['medium_large'];
                                                echo '<img src="' . $img . '">';
                                            } elseif ($file) {
                                                echo '<video src="' . $file['url'] . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
                                            } else {
                                                echo '<img src="' . $default_img . '/release/image/default_img.png">';
                                            }
                                            ?>
                                </figure>
                                <h3 class="box--title"><?php echo the_title(); ?></h3>
                                <div class="box--desc">
                                    <p><?php echo the_content(); ?></p>
                                </div>
                                <div class="box--lower-desc">
                                    <?php
                                            $tags = get_the_terms($post->ID, 'tags');
                                            if ($tags) :
                                                foreach ($tags as $tag) :
                                            ?>
                                    <span><?php echo esc_html($tag->name); ?></span>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
