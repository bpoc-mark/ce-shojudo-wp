<?php get_header(); ?>
<div id="Contact">
    <?php include 'inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">お問い合わせ</h2>
                <p class="sect1--sub">ご質問、ご意見、ご相談等は、下記のフォームよりお問い合わせください。</p>
                <div class="sect1__form">
                    <?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>