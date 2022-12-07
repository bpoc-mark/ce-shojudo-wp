<?php get_header(); ?>
<div id="Single-Page">
    <?php include get_template_directory() . '/inc/breadcrumbs.php'; ?>
    <section class="single-cont">
        <?php while (have_posts()) : the_post(); ?>
            <h1 class="sect--title"><?php echo the_title(); ?></h1>
            <p class="single-cont__sub-heading"><?php the_field('short_description'); ?></p>
            <h2 class="single-cont__main-heading"><?php the_field('second_heading'); ?></h2>
            <div class="single-cont__featured-img">
                <?php
                $file = get_field('banner');
                $video = get_field('featured_video');
                $default_img = get_template_directory_uri();

                if ($file['type'] == 'image') {
                    $img = $file['sizes']['large'];
                    echo '<img src="' . $img . '">';
                } elseif ($file) {
                    echo '<video src="' . $file['url'] . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
                } elseif (!empty($video)) {
                    echo '<video src="' . $video . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
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
                $issues = SCF::get('Issues');
                foreach ($issues as $issue) {
                    if ($issue['issue'] != '') {
                        echo '<li class="single-cont__tech-issues--list__item">' . $issue['issue'] . '</li>';
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
                    $image_attributes = wp_get_attachment_image_src($attachment_id = $detail['post_banner']);
                ?>
                    <li class="single-cont__link-list--item">
                        <?php
                        $links = $detail['link_to_post'];
                        if ($links != '') :
                        ?>
                            <a href="<?php echo $detail['link_to_post']; ?>">
                                <div class="single-cont__link-list--item__image">
                                    <?php
                                    if ($image_attributes != '') {
                                        echo '<img src="' . $image_attributes[0] . '" alt="">';
                                    } elseif (!empty($video_attributes)) {
                                        echo '<video src="' . $video_attributes . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
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
                                    } elseif (!empty($video_attributes)) {
                                        echo '<video src="' . $video_attributes . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
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
        <div class="single-cont__process-link">
            <?php
            $link_text = get_field('process_link_text');
            $link = get_field('process_link');
            $img = get_template_directory_uri();
            if ($link != '') : ?>
                <a href="<?php echo $link; ?>">
                    <img src="<?php echo $img; ?>/release/image/link-arrow.svg">
                    <p><?php echo $link_text; ?></p>
                </a>
            <?php else : echo ''; ?>
            <?php endif; ?>
        </div>
        <div class="single-cont__processing">
            <h3 class="single-cont__heading"><?php the_field('list_of_processing'); ?></h3>
            <div class="boxes">
                <ul class="single-cont__processing--content-list box--wrapper">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                    $args = array(
                        'post_type' => 'digital',
                        'post_parent' =>  $post->ID,
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'paged' => $paged,
                    );

                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="single-cont__processing--content-list__item box--container">
                                <?php
                                $link = get_field('parent_post_custom_link');
                                $permalink = get_permalink();
                                $no_link = get_field('no_link');
                                if (!empty($link)) {
                                    echo '<a href="' . $link . '">';
                                } elseif ($no_link != 0) {
                                    echo '';
                                } else {
                                    echo '<a href="' . $permalink . '">';
                                }
                                ?>
                                <figure>
                                    <?php
                                    $video = get_field('featured_video');
                                    $default_img = get_template_directory_uri();
                                    $featured = the_post_thumbnail();

                                    if (!empty($video)) {
                                        echo '<video src="' . $video . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
                                    } elseif (!empty($featured)) {
                                        echo $featured;
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
        <?php
        $child = get_field('child_posts_related');
        if (!empty($child)) :
        ?>
            <div class="single-cont__processing">
                <h3 class="single-cont__heading">関連商品</h3>
                <div class="boxes">
                    <ul class="single-cont__processing--content-list box--wrapper">
                        <?php
                        $childs = get_field('child_posts_related');
                        if ($childs != '') :
                            foreach ($childs as $child) : ?>
                                <li class="single-cont__processing--content-list__item box--container">
                                    <a href="<?php echo $child->guid; ?>">
                                        <figure>
                                            <img src="<?php echo get_the_post_thumbnail_url($child->ID, 'full'); ?>" alt="">
                                        </figure>
                                        <h3 class="box--title"><?php echo $child->post_title; ?></h3>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        <? else : echo ''; ?>
        <?php endif; ?>
    </section>
</div>
<?php get_footer(); ?>