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
                        <?php while (have_posts()) : the_post(); ?>
                            <li class="box--container">
                                <a href="<?php echo get_permalink(); ?>">
                                    <figure>
                                        <?php
                                        $file = get_field('banner');
                                        $default_img = get_template_directory_uri();

                                        if ($file['type'] == 'image') {
                                            $img = $file['sizes']['large'];
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
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>