<?php get_header(); ?>
<div id="Error_Page">
    <?php include 'inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <h2 class="sect--title">404</h2>
                <p class="sect--sub text-center">お訪ねになったページはありません</p>
                <p class="sect--sub text-center">お訪ねになったページは削除されたか、名前が変更された可能性があります。<br class="pc">お手数ですがトップページからご覧下さい。</p>
                <a class="button" href="<?php echo get_home_url(); ?>">
                    <p>HOME</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg" alt="">
                </a>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>