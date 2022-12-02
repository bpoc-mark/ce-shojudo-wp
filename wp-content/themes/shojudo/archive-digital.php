<?php get_header(); ?>
<div id="New-Product">
    <?php include 'inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">デジタル印刷紹介</h2>
                <p class="sect--sub">
                    印刷部数やデータの可変など、印刷物の可能性を広げるデジタル印刷。当社では、オフセット印刷や長尺印刷との合わせ技で、多岐にわたる商品（ハイブリッド印刷）を展開中です。<br>
                    御社のご利用にあわせ、最適な商品をご提案いたします。お気軽にご相談ください。</p>
                <div class="boxes">
                    <ul class="box--wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'digital',
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
                                    <?php
                                    $link = get_field('parent_post_custom_link');
                                    $permalink = get_permalink();
                                    if (!empty($link)) {
                                        echo '<a href="' . $link . '">';
                                    } else {
                                        echo '<a href="' . $permalink . '">';
                                    }
                                    ?>
                                    <figure>
                                        <?php
                                        $video = get_field('featured_video');
                                        $default_img = get_template_directory_uri();
                                        $featured = the_post_thumbnail();

                                        if ($video != '') {
                                            echo '<video src="' . $video . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
                                        } elseif (has_post_thumbnail()) {
                                            echo $featured;
                                        } else {
                                            echo '<img src="' . $default_img . '/release/image/default_img.png">';
                                        }
                                        ?>
                                    </figure>
                                    <h3 class="box--title"><?php echo the_title(); ?></h3>
                                    <div class="box--desc">
                                        <?php echo the_content(); ?>
                                    </div>
                                    </a>
                                    <div class="box--lower-desc">
                                        <?php
                                        $childs = get_field('child_posts');
                                        if ($childs != '') :
                                            foreach ($childs as $child) : ?>
                                                <span>
                                                    <a href="<?php echo $child->guid; ?>"><?php echo $child->post_title; ?></a>
                                                </span>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
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