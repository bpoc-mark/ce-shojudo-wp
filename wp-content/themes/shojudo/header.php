<?php include get_template_directory() . '/inc/config.php'; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P5XRG3B');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo SITE_NAME; ?></title>
    <meta name="description" itemprop="description" content="<?php echo DESCRIPTION; ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>">
    <?php remove_action('wp_head', 'noindex', 1); ?>
    <?php
    if (is_front_page()) : ?>
        <link rel="canonical" href="https://www.shojudo.com/">
    <?php endif; ?>
    <?php
    if (is_single(array('197', '439', '386', '438')) || is_page('257')) {
        echo '<meta name="robots" content="noindex, nofollow">';
    } else {
        echo '';
    }
    ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5XRG3B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="first_view"></div>
    <main>
        <header class="page__header">
            <div class="container">
                <div class="header--wrap">
                    <h1 class="logo"><a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/release/image/common/logo.svg" alt=""></a></h1>
                    <nav class="nav02">
                        <ul class="nav02--list">
                            <li class="nav02--item">
                                <a href="<?php echo get_post_type_archive_link('product'); ?>" class=" nav02--link">製品紹介</a>
                                <div class="sub--menu">
                                    <ul class="sub--menu--wrap">
                                        <?php
                                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                        $args = [
                                            'post_type' => 'product',
                                            'post_status' => 'publish',
                                            'posts_per_page' => -1,
                                            'paged' => $paged,
                                            'post_parent' => 0
                                        ];

                                        $the_query = new WP_Query($args);
                                        ?>

                                        <?php if ($the_query->have_posts()) : ?>

                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <li class="sub--menu--items">
                                                    <?php
                                                    $link = get_field('parent_post_custom_link');
                                                    $permalink = get_permalink();
                                                    if (!empty($link)) {
                                                        echo '<a href="' . $link . '">';
                                                    } elseif ($no_link != 0) {
                                                        echo '';
                                                    } else {
                                                        echo '<a href="' . $permalink . '">';
                                                    }
                                                    ?><?php echo the_title(); ?></a>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav02--item">
                                <a href="<?php echo get_post_type_archive_link('technology'); ?>" class="nav02--link">技術紹介</a>
                                <div class="sub--menu">
                                    <ul class="sub--menu--wrap">
                                        <?php
                                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                        $args = array(
                                            'post_type' => 'technology',
                                            'post_status' => 'publish',
                                            'posts_per_page' => -1,
                                            'paged' => $paged,
                                            'post_parent' => 0
                                        );
                                        $the_query = new WP_Query($args);
                                        ?>
                                        <?php if ($the_query->have_posts()) : ?>
                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <li class="sub--menu--items">
                                                    <?php
                                                    $link = get_field('parent_post_custom_link');
                                                    $permalink = get_permalink();
                                                    if (!empty($link)) {
                                                        echo '<a href="' . $link . '">';
                                                    } elseif ($no_link != 0) {
                                                        echo '';
                                                    } else {
                                                        echo '<a href="' . $permalink . '">';
                                                    }
                                                    ?><?php echo the_title(); ?></a>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav02--item">
                                <a href="<?php echo get_post_type_archive_link('digital'); ?>" class="nav02--link">デジタル印刷紹介</a>
                                <div class="sub--menu">
                                    <ul class="sub--menu--wrap">
                                        <?php
                                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                        $args = [
                                            'post_type' => 'digital',
                                            'post_status' => 'publish',
                                            'posts_per_page' => -1,
                                            'paged' => $paged,
                                            'post_parent' => 0
                                        ];

                                        $the_query = new WP_Query($args);
                                        ?>

                                        <?php if ($the_query->have_posts()) : ?>

                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <li class="sub--menu--items">
                                                    <?php
                                                    $link = get_field('parent_post_custom_link');
                                                    $permalink = get_permalink();
                                                    if (!empty($link)) {
                                                        echo '<a href="' . $link . '">';
                                                    } elseif ($no_link != 0) {
                                                        echo '';
                                                    } else {
                                                        echo '<a href="' . $permalink . '">';
                                                    }
                                                    ?><?php echo the_title(); ?></a>
                                                </li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav02--item">
                                <a href="<?php echo get_permalink(get_page_by_path('company')); ?>" class="nav02--link">会社案内</a>
                                <div class="sub--menu">
                                    <ul class="sub--menu--wrap">
                                        <li class="sub--menu--items">
                                            <a href="<?php echo get_permalink(get_page_by_path('company/history')); ?>">沿革</a>
                                        </li>
                                        <li class="sub--menu--items">
                                            <a href="<?php echo get_permalink(get_page_by_path('company/office')); ?>">事業所</a>
                                        </li>
                                        <li class="sub--menu--items">
                                            <a href="<?php echo get_permalink(get_page_by_path('csr')); ?>">CSR</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav02--item">
                                <a href="<?php echo get_permalink(get_page_by_path('company/careers')); ?>" class="nav02--link">採用情報</a>
                            </li>
                            <a href="<?php echo get_permalink(get_page_by_path('support/toiawase')); ?>" target="_blank">
                                <li class="nav01--item">
                                    <p class="nav01--link">お問い合わせ</p>
                                </li>
                            </a>
                        </ul>
                    </nav>
                    <div class="ham-menu" id="header_menu">
                        <span class="line line-t"></span>
                        <span class="line line-m"></span>
                        <span class="line line-b"></span>
                    </div>
                </div>
            </div>
        </header>
        <div class="page__content">