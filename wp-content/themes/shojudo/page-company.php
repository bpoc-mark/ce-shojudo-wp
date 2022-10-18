<?php

/* Template Name: Company Page */

get_header(); ?>
<div id="Company">
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
    <section class="sect2">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">お問い合わせ</h2>
                <p class="contact-us">印刷物、印刷技術のことでしたら<br>お気軽にご相談ください。</p>
                <h3><a href="tel:0336424596">03-3642-4596</a></h3>
                <p class="contact-us--small">土・日・祝を除く、平日9:00～17:00</p>
                <div class="sect2--btn">
                    <ul>
                        <li onclick="location.href='';">
                            <a href="">
                                お問い合わせ 法人
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg"
                                        alt="white_arrow" />
                                </figure>
                            </a>
                        </li>
                        <li onclick="location.href='';">
                            <a href="">お問い合わせ 個人
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg"
                                        alt="white_arrow" />
                                </figure>
                            </a>
                        </li>
                        <li onclick="location.href='';">
                            <a href="">お見積り
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg"
                                        alt="white_arrow" />
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
