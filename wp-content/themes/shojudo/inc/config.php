<?php

$title = $description = $keyword = $seowords = '';

if (is_front_page()) {
    $title =  get_option('blogname');
    $description = get_option('blogdescription');
} else if (is_page('news')) {
    $description = '';
    $title = 'ニュース | ' . get_option('blogname');
} else if (is_page('company')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_page('company/history')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_page('company/office')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_page('company/careers')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_page('csr')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_page('support')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_page('support/toiawase')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_page('support/thankyou')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_page('privacypolicy')) {
    $title = get_field('meta_title');
    $description = get_field('meta_description');
} else if (is_post_type_archive('product')) {
    $title = get_field('meta_title');
    $desc = get_field('meta_description');
    if ($title == '' || $desc == '') {
        $title = '製品紹介 |  株式会社昇寿堂';
        $description = '';
    } else {
        $title = get_field('meta_title');;
        $description = get_field('meta_description');
    }
} else if (is_post_type_archive('technology')) {
    $title = get_field('meta_title');
    $desc = get_field('meta_description');
    if ($title == '' || $desc == '') {
        $title = '技術紹介 |  株式会社昇寿堂';
        $description = '';
    } else {
        $title = get_field('meta_title');;
        $description = get_field('meta_description');
    }
} else if (is_post_type_archive('digital')) {
    $title = get_field('meta_title');
    $desc = get_field('meta_description');
    if ($title == '' || $desc == '') {
        $title = 'デジタル印刷紹介 |  株式会社昇寿堂';
        $description = '';
    } else {
        $title = get_field('meta_title');;
        $description = get_field('meta_description');
    }
} else if (is_singular('digital')) {
    $title = get_field('meta_title');
    $desc = get_field('meta_description');
    if ($title == '' || $desc == '') {
        $title = 'デジタル印刷紹介 |  株式会社昇寿堂';
        $description = '';
    } else {
        $title = get_field('meta_title');;
        $description = get_field('meta_description');
    }
} else if (is_singular('product')) {
    $title = get_field('meta_title');
    $desc = get_field('meta_description');
    if ($title == '' || $desc == '') {
        $title = '製品紹介 |  株式会社昇寿堂';
        $description = '';
    } else {
        $title = get_field('meta_title');;
        $description = get_field('meta_description');
    }
} else if (is_singular('technology')) {
    $title = get_field('meta_title');
    $desc = get_field('meta_description');
    if ($title == '' || $desc == '') {
        $title = '技術紹介 |  株式会社昇寿堂';
        $description = '';
    } else {
        $title = get_field('meta_title');;
        $description = get_field('meta_description');
    }
}
//サイト名
define("SITE_NAME", $title);

//キーワード
define("KEY_WORD", "");

//ディスクリプション
define("DESCRIPTION", $description);

//H1文言
define("SEO_WORDS", "");
