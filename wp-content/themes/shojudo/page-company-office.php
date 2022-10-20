<?php get_header(); ?>
<div id="Company">
    <?php include get_template_directory() . '/inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <div class="news-topics">
                    <div class="news-topics--title">
                        <h2 class="sect--title">事業所</h2>
                    </div>
                </div>
                <div class="sect1__content">
                    <h2 class="sect1__content--ttl">本社 （総務・経理）</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒104-0041 東京都中央区新富1-8-6</td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td>03-3552-3661</td>
                        </tr>
                        <tr>
                            <td>FAX番号</td>
                            <td>03-3551-8291</td>
                        </tr>
                    </table>
                    <ul class="sect1__content--list">
                        <li>・東京メトロ有楽町線「新富町」駅　3番出口より徒歩3分</li>
                        <li>・JR京葉線、東京メトロ日比谷線「八丁堀」駅　A3出口より徒歩5分</li>
                    </ul>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/history/sample-3.png" alt="">
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
                            <a href="">
                                お問い合わせ 法人
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg"
                                        alt="white_arrow" />
                                </figure>
                            </a>
                        </li>
                        <li onclick="location.href='';">
                            <a href="">お問い合わせ 個人
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg"
                                        alt="white_arrow" />
                                </figure>
                            </a>
                        </li>
                        <li onclick="location.href='';">
                            <a href="">お見積り
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
<?php get_footer(); ?>
