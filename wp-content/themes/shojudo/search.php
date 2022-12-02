<?php get_header(); ?>
<div id="Topics">
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <div class="news-topics">
                    <?php
                    $s = get_search_query();
                    $args = array(
                        's' => $s
                    );
                    // The Query
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) {
                    ?>
                        <h2 class="product-searchTitle"><?php echo get_query_var('s') ?>の検索結果</h2>
                        <ul>
                            <?php while ($the_query->have_posts()) {
                                $the_query->the_post();
                            ?>
                                <li id="<?php echo get_the_ID(); ?>">
                                    <span><?php echo get_the_date('Y/m/d'); ?></span>
                                    <div class="topics--right">
                                        <p><?php the_title(); ?></p>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </li>

                            <?php
                            }
                        } else {
                            ?>
                            <h2 class="product-searchTitle"><?php echo get_query_var('s') ?>の検索結果はありません。</h2>
                        <?php } ?>
                        </ul>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>