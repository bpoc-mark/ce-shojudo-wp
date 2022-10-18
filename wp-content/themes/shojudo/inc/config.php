<?php

$title = $description = $keyword = $seowords = '';

if (is_front_page()) {
    $title =  get_option('blogname');
    $description = get_option('blogdescription');
} else if (is_page('news')) {
    $description = '';
    $title = 'ニュース | '. get_option('blogname');
}
//サイト名
define("SITE_NAME", $title);

//キーワード
define("KEY_WORD", "");

//ディスクリプション
define("DESCRIPTION", $description);

//H1文言
define("SEO_WORDS", "");
