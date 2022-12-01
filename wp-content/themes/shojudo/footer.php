            </div>
            <footer class="page__footer">
                <section class="sect2">
                    <div class="wrapper">
                        <div class="container">
                            <h2 class="sect--title">お問い合わせ</h2>
                            <p class="contact-us">印刷物、印刷技術のことでしたら<br>お気軽にご相談ください。</p>
                            <h3><a href="tel:0336424596">03-3642-4596</a></h3>
                            <p class="contact-us--small">土・日・祝を除く、平日9:00～17:00</p>
                            <div class="sect2--btn">
                                <ul>
                                    <li onclick="location.href='/toiawase';">
                                        <a href="<?php echo get_permalink(get_page_by_path('support/toiawase')); ?>">お問い合わせ
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
                <div class="footer01">
                    <div class="container">
                        <nav class="f-nav">
                            <div class="nav--contact">
                                <div class="nav--contact__wrap">
                                    <a class="nav01--link"
                                        href="<?php echo get_permalink(get_page_by_path('support/toiawase')); ?>"
                                        target="_blank">お問い合わせ
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg"
                                            alt="white_arrow" />
                                    </a>
                                </div>
                            </div>
                            <div class="f-nav--wrap">
                                <a href="<?php echo get_post_type_archive_link('product'); ?>">
                                    <h4 class="f-nav--wrap__title">製品紹介</h4>
                                </a>
                                <div class="f-nav--list-wrap">
                                    <ul class="f-nav--list">
                                        <?php
                                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                        $args = [
                                            'post_type' => 'product',
                                            'post_status' => 'publish',
                                            'posts_per_page' => -1,
                                            'paged' => $paged,
                                            'post_parent' => 0,

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
                                <a href="<?php echo get_post_type_archive_link('technology'); ?>">
                                    <h4 class="f-nav--wrap__title">技術紹介</h4>
                                </a>
                                <ul class="f-nav--list">
                                    <?php
                                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                    $args = [
                                        'post_type' => 'technology',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'paged' => $paged,
                                        'post_parent' =>  0,
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
                                <a href="<?php echo get_post_type_archive_link('digital'); ?>">
                                    <h4 class="f-nav--wrap__title">デジタル印刷紹介</h4>
                                </a>
                                <ul class="f-nav--list">
                                    <?php
                                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                    $args = [
                                        'post_type' => 'digital',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'paged' => $paged,
                                        'post_parent' => 0,
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
                                        <a href="<?php echo get_permalink(get_page_by_path('news')); ?>"
                                            class="f-nav--link">ニュース</a>
                                    </li>
                                    <li class="f-nav--item">
                                        <a href="<?php echo get_permalink(get_page_by_path('company')); ?>"
                                            class="f-nav--link">会社案内</a>
                                    </li>
                                    <li class="f-nav--item">
                                        <a href="<?php echo get_permalink(get_page_by_path('company/history')); ?>"
                                            class="f-nav--link">沿革</a>
                                    </li>
                                    <li class="f-nav--item">
                                        <a href="<?php echo get_permalink(get_page_by_path('company/office')); ?>"
                                            class="f-nav--link">事業所</a>
                                    </li>
                                    <li class="f-nav--item">
                                        <a href="<?php echo get_permalink(get_page_by_path('csr')); ?>"
                                            class="f-nav--link">CSR</a>
                                    </li>
                                    <li class="f-nav--item">
                                        <a href="<?php echo get_permalink(get_page_by_path('company/careers')); ?>"
                                            class="f-nav--link">採用情報</a>
                                    </li>
                                    <li class="f-nav--item">
                                        <a href="<?php echo get_permalink(get_page_by_path('support/toiawase')); ?>"
                                            class="f-nav--link">お問い合わせ</a>
                                    </li>
                                    <li class="f-nav--item">
                                        <a href="<?php echo get_permalink(get_page_by_path('privacypolicy')); ?>"
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