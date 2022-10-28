<?php get_header(); ?>
<div id="New-Product">
    <?php include 'inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">技術紹介</h2>
                <p class="sect--sub">
                    昇寿堂の技術を詰め込んだ商品の一覧です。官庁様・企業様から一般の方まで広くご利用いただいております。<br>御社のご利用にあわせ、最適な商品をご提案いたします。お気軽にご相談ください。</p>
                <div class="boxes">
                    <ul class="box--wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'technology',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'paged' => $paged,
                            'post_parent' => 0,
                        );
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
                                    <?php echo the_content(); ?>
                                </div>
                                <div class="box--lower-desc">
                                    <?php
                                        $tags = get_the_terms(
                                            $post->ID,
                                            'tags'
                                        );
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
                            <a href="">お問い合わせ
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
