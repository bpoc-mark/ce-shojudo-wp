<?php get_header(); ?>
<div id="Single-Page">
    <?php include get_template_directory() . '/inc/breadcrumbs.php'; ?>
    <section class="single-cont">
        <?php
        while (have_posts()) : the_post(); ?>
            <h1 class="sect--title"><?php echo the_title(); ?></h1>
            <p class="single-cont__sub-heading"><?php the_field('short_description'); ?></p>
            <h2 class="single-cont__main-heading"><?php the_field('second_heading'); ?></h2>
            <div class="single-cont__featured-img">
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
            </div>
            <p class="single-cont__main-content"><?php the_field('main_content'); ?></p>
        <?php endwhile; ?>
        <h3 class="single-cont__heading"><?php the_field('first_heading_h3'); ?></h3>
        <p><?php the_field('first_heading_content'); ?></p>
        <div class="single-cont__tech-issues">
            <ul class="single-cont__tech-issues--list">
                <?php
                $issues = get_field('issues');
                foreach ($issues as $issue) {
                    if ($issue != '') {
                        echo '<li class="single-cont__tech-issues--list__item">' . $issue . '</li>';
                    } else {
                        echo '';
                    }
                }
                ?>
            </ul>
            <p class="single-cont__tech-issues--list__ttl"><?php the_field('heading_issue'); ?></p>
            <p class="single-cont__tech-issues--list__content"><?php the_field('how_to_fix'); ?></p>
        </div>
        <p class="single-cont__red-notice"><?php the_field('red_notice'); ?></p>
        <h3 class="single-cont__heading"><?php the_field('second_heading_h3'); ?></h3>
        <ul class="single-cont__link-list">
            <?php $details = SCF::get('Link_Post');
            if ($details) : ?>
                <?php foreach ($details as $detail) :
                    $image_attributes = wp_get_attachment_image_src($attachment_id = $detail['post_image']);
                ?>
                    <li class="single-cont__link-list--item">
                        <?php
                        $links = $detail['link_to_post'];
                        if ($links != '') :
                        ?>
                            <a href="<?php echo $detail['link_to_post']; ?>" target="_blank">
                                <div class="single-cont__link-list--item__image">
                                    <?php
                                    if ($image_attributes != '') {
                                        echo '<img src="' . $image_attributes[0] . '" alt="">';
                                    } else {
                                        echo '';
                                    }
                                    ?>
                                </div>
                                <div class="single-cont__link-list--item__content">
                                    <?php
                                    $link = $detail['link_to_post'];
                                    if ($link != '') {
                                        echo '<p class="title underline">' . $detail['title'] . '</p>';
                                    } else {
                                        echo '<p class="title">' . $detail['title'] . '</p>';
                                    }
                                    ?>
                                    <p class="content"><?php echo $detail['content']; ?></p>
                                </div>
                            </a>
                        <?php else : ?>
                            <div class="no_link">
                                <div class="single-cont__link-list--item__image">
                                    <?php
                                    if ($image_attributes != '') {
                                        echo '<img src="' . $image_attributes[0] . '" alt="">';
                                    } else {
                                        echo '';
                                    }
                                    ?>
                                </div>
                                <div class="single-cont__link-list--item__content">
                                    <?php
                                    $link = $detail['link_to_post'];
                                    if ($link != '') {
                                        echo '<p class="title underline">' . $detail['title'] . '</p>';
                                    } else {
                                        echo '<p class="title">' . $detail['title'] . '</p>';
                                    }
                                    ?>
                                    <p class="content"><?php echo $detail['content']; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <div class="single-cont__processing">
            <h3 class="single-cont__heading"><?php the_field('list_of_processing'); ?></h3>
            <div class="boxes">
                <ul class="single-cont__processing--content-list box--wrapper">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                    $args = array(
                        'post_type' => 'technology',
                        'post_parent' =>  $post->ID,
                        'post_status' => 'publish',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                    );

                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="single-cont__processing--content-list__item box--container">
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
                                        <p><?php echo the_content(); ?></p>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
        <div class="single-cont__post-container">
            <h3 class="single-cont__heading">関連商品</h3>
            <ul class="box--wrapper">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = [
                    'post_type' => 'technology',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'paged' => $paged,
                    'post__not_in' => array($post->ID),
                    'post_parent' => 0
                ];

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <?php endif; ?>
            </ul>
        </div>
    </section>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg" alt="white_arrow" />
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>