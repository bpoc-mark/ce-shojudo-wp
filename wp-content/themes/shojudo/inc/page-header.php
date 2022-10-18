<section class="p-header01">
    <div class="container">
        <?php
        if (is_page('applications')) {
            echo '
                    <h1 class="p-header01--title">
                        '.$wp_query->queried_object->post_title.'
                        <p>Applications</p>
                    </h1>
                    ';
        }
        ?>
    </div>
</section>