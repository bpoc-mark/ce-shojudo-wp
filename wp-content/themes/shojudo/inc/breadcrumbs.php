<ul class="breadcrumbs">
    <div class="aioseo-breadcrumbs">
        <span class="aioseo-breadcrumb">
            <a href="<?php echo get_home_url() ?>" title="HOME">HOME</a>
        </span>
        <?php
        if (is_archive('product')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">製品紹介</span>
                    ';
        } elseif (is_archive('technology')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">技術紹介</span>
                    ';
        } elseif (is_archive('digital')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">デジタル印刷紹介</span>
                    ';
        } elseif (is_page('company-careers')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">採用情報</span>
                    ';
        } elseif (is_page('company')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">会社案内</span>
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">沿革</span>
                    ';
        } elseif (is_page('company-office')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">会社案内</span>
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">事業所</span>
                    ';
        } elseif (is_singular()) {
            $post_object = get_queried_object();
            $title   = apply_filters('the_title', $post_object->post_title);
            $post_id = $post_object->ID;

            $types_cat = '';
            $types_tag = '';
            $products_cat = get_the_terms($post_id, '');
            if ($products_cat) {
                sort($products_cat);
                foreach ($products_cat as $product_cat) {
                    $types_cat .= '<span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb"><a href="' . get_term_link($product_cat) . '">' . $product_cat->name . '</a></span>';
                }
                $output_cat = rtrim($types_cat, ', ');
            }
            $merge_cat = $output_cat;

            echo '' . $merge_cat . '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">' . $title . '</span>
                    ';
        } elseif (is_tax('')) {
            $trail     = '';
            $query_obj = get_queried_object();
            $term_id   = $query_obj->term_id;
            $taxonomy  = get_taxonomy($query_obj->taxonomy);
            if ($term_id && $taxonomy) {
                $trail .=  get_term_parents_list($term_id, $taxonomy->name, array('inclusive' => false, 'separator' => ' / '));
            }
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">' . $trail . $query_obj->name . '</span>
                    ';
        }
        ?>
    </div>
</ul>
