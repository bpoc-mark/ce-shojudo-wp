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
            <?php
            $heading = the_field('heading_issue');
            if (!empty($heading)) {
                echo '<p class="single-cont__tech-issues--list__ttl">' . $heading . '</p>';
            } else {
                echo '';
            }
            ?>
            <?php
            $fix = the_field('how_to_fix');
            if (!empty($fix)) {
                echo '<<p class="single-cont__tech-issues--list__content">' . $fix . '</p>';
            } else {
                echo '';
            }
            ?>
        </div>
        <?php
        $notice = the_field('red_notice');
        if (!empty($notice)) {
            echo '<p class="single-cont__red-notice">' . $notice . '</p>';
        } else {
            echo '';
        }
        ?>
        <h3 class="single-cont__heading"><?php the_field('second_heading_h3'); ?></h3>
        <?php $details = SCF::get('Link_Post');
        if ($details) : ?>
            <ul class="single-cont__link-list">
                <?php foreach ($details as $detail) :
                    $image_attributes = wp_get_attachment_image_src($attachment_id = $detail['post_banner']);
                    $video_attributes = wp_get_attachment_url($attachment_id);
                ?>
                    <li class="single-cont__link-list--item">
                        <?php
                        $links = $detail['link_to_post'];
                        if (!empty($links)) :
                        ?>
                            <a href="<?php echo $detail['link_to_post']; ?>" target="_blank">
                                <div class="single-cont__link-list--item__image">
                                    <?php
                                    $default_img = get_template_directory_uri();
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
            </ul>
        <?php else : echo ''; ?>
        <?php endif; ?>
        <div class="single-cont__processing">
            <?php
            $list = the_field('list_of_processing');
            if (!empty($list)) {
                echo '<h3 class="single-cont__heading">' . $list . '</h3>';
            } else {
                echo '';
            }
            ?>
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
                                <a href="<?php echo the_field('parent_post_custom_link'); ?>">
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
                    'orderby' => 'rand',
                    'ignore_custom_sort' => true,
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
                                    $featured = the_post_thumbnail();

                                    if ($file['type'] == 'image') {
                                        $img = $file['sizes']['large'];
                                        echo '<img src="' . $img . '">';
                                    } elseif (!empty($file)) {
                                        echo '<video src="' . $file['url'] . '" muted autoplay loop webkit-playsinline playsinline preload="auto"></video>';
                                    } elseif (!empty($featured)) {
                                        echo $featured;
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
</div>
<?php get_footer(); ?>