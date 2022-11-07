<?php

/* Template Name: Company Page */

get_header(); ?>
<div id="Company">
    <?php include get_template_directory() . '/inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <div class="news-topics">
                    <div class="news-topics--title">
                        <h2 class="sect--title">沿革</h2>
                    </div>
                    <table class="sect1__history-content">
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $details = SCF::get('Company_History');
                            if ($details) : ?>
                        <?php foreach ($details as $detail) : ?>
                        <tr>
                            <td><?php echo $detail['date']; ?></td>
                            <td><?php echo $detail['details']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </table>
                </div>
                <div class="sect1__company_history">
                    <p class="sect1__company_history--ttl">昇寿堂の生い立ち</p>
                    <div class="sect1__company_history--content">
                        <div class="row-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/history/company_img-1.png"
                                alt="">
                        </div>
                        <div class="row-2">
                            <p>20世紀の半ば、世界的な戦禍からようやく解放された人々のエネルギーによって、新しい時代を担う社会のエレメントの芽が次々と吹き出しました。<br><br>なかでも1946年、ペンシルバニア大学における史上初の電子計算機ENIACの完成は画期的であったといえましょう。<br><br>ハードの中枢は18,000本の真空管、プログラムは無数のプラグワイヤで構成された重量30トンもの巨大な計算機が現在のパソコンへ急速な進化を遂げ、私たちの日常に欠かせない必需品となったのは周知のとおりです。<br><br>その翌年（1947:昭和22年）、昇寿堂は東京都中央区新富町に帳票・記録紙の製造販売店として創業、5年後には初の国産ビジネスフォーム印刷機を完成し、高度成長時代へむけてわが国のフォーム印刷のパイオニアとしての道を歩み出しました。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sect1__company_history">
                    <p class="sect1__company_history--ttl">現在の昇寿堂ってどんな会社？</p>
                    <div class="sect1__company_history--content">
                        <div class="row-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/history/company_img-2.png"
                                alt="">
                        </div>
                        <div class="row-2">
                            <p>以前は技術者の熟練に頼っていた工程も現在ではコンピュータ制御による高度な標準化、自動化が実現されています。<br><br>
                                普段お客様に意識されることは少ないのですが印刷技術はその解像度、色合わせ、用紙厚などすべてがミクロン単位で成立している精密工業です。<br><br>昇寿堂は安定したクオリティの高い製品をお届けするため、高性能機器の自社開発をはじめ、業界でもいちはやく工場の完全空調化をはたすなどメーカーとしての設備の充実に努めてまいりました。<br><br>もちろん、ハード設備の充実だけが、お客様にご満足いただける製品づくりを実現しているわけではありません。<br><br>お客様の業務内容・特性に密着した営業姿勢、企画から製作・製造・納品に至る一貫体制と各々のプロセスにおける全社員の熱意、練磨も、併せて当社の製品クオリティにこめられています。
                            </p>
                        </div>
                    </div>
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
                        <li onclick="location.href='/toiawase';">
                            <a href="<?php echo get_permalink(get_page_by_path('support/toiawase'));?>">お問い合わせ
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
