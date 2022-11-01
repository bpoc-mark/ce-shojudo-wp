<?php get_header();?>
<div id="Thanks">
    <?php include get_template_directory() . '/inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <div class="news-topics">
                    <div class="news-topics--title">
                        <h2 class="sect--title">お問い合わせ</h2>
                    </div>
                    <div class="sect1__content">
                        <p>お問い合わせありがとうございました。</p>
                        <p>お問い合わせいただきました内容を確認後、担当者より改めてご連絡させていただきます。今しばらくお待ちくださいますようお願い申し上げます。</p>
                        <p>なお、3日以上弊社からの返信、返答がない場合はお手数ですが再度送信いただくか、お電話03-3642-4596にてご連絡いただけますと幸いです。</p>
                    </div>
                </div>
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
                        <li onclick="location.href='';">
                            <a href="">お問い合わせ
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
</div>
<?php get_footer();?>
