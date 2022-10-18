<ul class="breadcrumbs">
    <div class="aioseo-breadcrumbs">
        <span class="aioseo-breadcrumb">
            <a href="<?php echo get_home_url() ?>" title="HOME">HOME</a>
        </span>
        <?php
        if (is_search('product')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">製品紹介</span>
                    ';
        } elseif (is_archive('technology')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">技術紹介</span>
                    ';
        } elseif (is_attachment('digital')) {
            echo '
                        <span class="aioseo-breadcrumb-separator">/</span>
                        <span class="aioseo-breadcrumb">デジタル印刷紹介</span>
                    ';
        }
        ?>
    </div>
</ul>
