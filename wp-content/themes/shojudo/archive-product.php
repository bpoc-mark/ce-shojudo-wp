<?php get_header(); ?>
<div id="New-Product">
    <?php include 'inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">製品紹介</h2>
                <p class="sect--sub">
                    昇寿堂の技術を詰め込んだ商品の一覧です。官庁様・企業様から一般の方まで広くご利用いただいております。<br>御社のご利用にあわせ、最適な商品をご提案いたします。お気軽にご相談ください。</p>
                <div class="boxes">
                    <ul class="box--wrapper">
                        <?php while (have_posts()) : the_post(); ?>
                            <li class="box--container">
                                <a href="<?php echo get_permalink(); ?>">
                                    <figure>
                                        <?php
                                        $file = get_field('banner');
                                        $default_img = get_template_directory_uri();
                                        $featured = the_post_thumbnail();

                                        if ($file['type'] == 'image') {
                                            $img = $file['sizes']['large'];
                                            echo '<img src="' . $img . '">';
                                        } elseif (!empty($file)) {
                                            echo '<video src="' . $file['url'] . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
                                        } elseif (!empty($featured)) {
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
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>