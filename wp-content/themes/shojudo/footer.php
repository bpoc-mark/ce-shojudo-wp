        </div>
        <footer class="page__footer">
            <div class="footer01">
                <div class="container">
                    <nav class="f-nav">
                        <div class="nav--contact">
                            <div class="nav--contact__wrap">
                                <a href="https://www.shojudo.co.jp/supprot/toiawase.html" target="_blank"
                                    class="nav01--link">お問い合わせ</a>
                            </div>
                            <div class="nav--contact__wrap">
                                <a href="https://www.shojudo.co.jp/supprot/omitumori.html" target="_blank"
                                    class="nav02--link">お見積もり</a>
                            </div>
                        </div>
                        <div class="f-nav--wrap">
                            <a href="https://www.shojudo.co.jp/product/index.html">
                                <h4 class="f-nav--wrap__title">製品紹介</h4>
                            </a>
                            <div class="f-nav--list-wrap">
                                <ul class="f-nav--list">
                                    <?php
                                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                    $args = [
                                        'post_type' => 'goods',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'paged' => $paged,
                                        'tax_query' => array(
                                            array(
                                                'field' => 'slug',
                                                'taxonomy' => 'goods_cat',
                                                'terms' => 'product',
                                                'hide_empty' => false,
                                            ),
                                        )
                                    ];

                                    $the_query = new WP_Query($args);
                                    ?>

                                    <?php if ($the_query->have_posts()) : ?>

                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <li class="f-nav--item"><a class="f-nav--link"
                                            href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
                                    </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="f-nav--wrap">
                            <a href="https://www.shojudo.co.jp/technology/index.html">
                                <h4 class="f-nav--wrap__title">技術紹介</h4>
                            </a>
                            <ul class="f-nav--list">
                                <?php
                                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                $args = [
                                    'post_type' => 'goods',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'paged' => $paged,
                                    'tax_query' => array(
                                        array(
                                            'field' => 'slug',
                                            'taxonomy' => 'goods_cat',
                                            'terms' => 'technology',
                                            'hide_empty' => false,
                                        ),
                                    )
                                ];

                                $the_query = new WP_Query($args);
                                ?>

                                <?php if ($the_query->have_posts()) : ?>

                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li class="f-nav--item"><a class="f-nav--link"
                                        href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
                                </li>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="f-nav--wrap">
                            <a href="https://www.shojudo.co.jp/digital/index.html">
                                <h4 class="f-nav--wrap__title">デジタル印刷紹介</h4>
                            </a>
                            <ul class="f-nav--list">
                                <?php
                                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                $args = [
                                    'post_type' => 'goods',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'paged' => $paged,
                                    'tax_query' => array(
                                        array(
                                            'field' => 'slug',
                                            'taxonomy' => 'goods_cat',
                                            'terms' => 'digital',
                                            'hide_empty' => false,
                                        ),
                                    )
                                ];

                                $the_query = new WP_Query($args);
                                ?>

                                <?php if ($the_query->have_posts()) : ?>

                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li class="f-nav--item"><a class="f-nav--link"
                                        href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
                                </li>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="f-nav--wrap">
                            <h4 class="f-nav--wrap__title">その他</h4>
                            <ul class="f-nav--list">
                                <li class="f-nav--item">
                                    <a href="https://www.shojudo.co.jp/company/index.html" class="f-nav--link">会社案内</a>
                                </li>
                                <li class="f-nav--item">
                                    <a href="https://shojudo.com/news/" class="f-nav--link">ニュース</a>
                                </li>
                                <li class="f-nav--item">
                                    <a href="https://www.shojudo.co.jp/company/careers.html"
                                        class="f-nav--link">採用情報</a>
                                </li>
                                <li class="f-nav--item">
                                    <a href="https://www.shojudo.co.jp/supprot/toiawase.html" target="_blank"
                                        class="f-nav--link">お問い合わせ<br> 法人様</a>
                                </li>
                                <li class="f-nav--item">
                                    <a href="https://www.shojudo.co.jp/supprot/toiawasekojin.html" target="_blank"
                                        class="f-nav--link">お問い合わせ<br> 個人様</a>
                                </li>
                                <li class="f-nav--item">
                                    <a href="https://www.shojudo.co.jp/supprot/omitumori.html" target="_blank"
                                        class="f-nav--link">お見積もり</a>
                                </li>
                                <li class="f-nav--item">
                                    <a href="https://www.shojudo.co.jp/privacypolicy.html"
                                        class="f-nav--link">個人情報保護方針</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="footer02">
                <div class="container">
                    <div class="f_info">
                        <div class="f_info--icons">
                            <a
                                href="https://www.amazon.co.jp/s?me=A2XSZCEAXYBVTT&marketplaceID=A1VC38T7YXB528&redirect=true"><img
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/common/amazon_icon.svg"
                                    alt=""></a>
                            <a href="https://twitter.com/show10do"><img
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/common/twitter_icon.svg"
                                    alt=""></a>
                            <a href="https://www.facebook.com/profile.php?id=100016980709112"><img
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/common/facebook_icon.svg"
                                    alt=""></a>
                        </div>
                        <div class="f_info--copyrights">
                            <a href="https://www.shojudo.co.jp/"><img
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/common/footer_logo.svg"
                                    alt=""></a>
                            <p>&copy; Shojudo Co., Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </main>
        <?php wp_footer(); ?>
        </body>

        </html>
