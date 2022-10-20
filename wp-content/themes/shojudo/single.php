<?php get_header(); ?>
<div id="Single-Page">
    <?php include get_template_directory() . '/inc/breadcrumbs.php'; ?>
    <section class="single-cont">
        <?php
        while (have_posts()) : the_post(); ?>
        <h1 class="sect--title"><?php echo the_title(); ?></h1>
        <p class="single-cont__sub-heading"><?php the_field('short_description'); ?></p>
        <h2 class="single-cont__main-heading"><?php the_field('second_heading'); ?></h2>
        <div class="single-cont__featured-img">
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
        </div>
        <p class="single-cont__main-content"><?php the_field('main_content'); ?></p>
        <?php endwhile; ?>
        <h3 class="single-cont__related-posts">予算もないし、万一何か起きてからと考えていませんか？</h3>
        <h3 class="single-cont__related-posts">偽造・変造から御社を守るセキュリティ技術</h3>
        <div class="single-cont__post-container">
            <h3 class="single-cont__related-posts">関連商品</h3>
            <ul class="box--wrapper">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = [
                    'post_type' => 'goods',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
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
                    <a href="https://www.shojudo.co.jp/product/cashvoucher.html">
                        <figure>
                            <?php echo the_post_thumbnail(); ?>
                        </figure>
                        <h3 class="box--title"><?php echo the_title(); ?></h3>
                        <div class="box--desc">
                            <?php echo the_content(); ?>
                        </div>
                        <div class="box--lower-desc">
                            <?php
                                    $tags = get_the_tags();
                                    if ($tags) :
                                        foreach ($tags as $tag) : ?>
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

    </section>
    <section class="contact-info">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">お問い合わせ</h2>
                <p class="contact-us">印刷物、印刷技術のことでしたら<br>お気軽にご相談ください。</p>
                <h3><a href="tel:0336424596">03-3642-4596</a></h3>
                <p class="contact-us--small">土・日・祝を除く、平日9:00～17:00</p>
                <div class="contact-info--btn">
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
