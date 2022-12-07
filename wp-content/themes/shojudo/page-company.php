<?php get_header(); ?>
<div id="Company">
    <?php include get_template_directory() . '/inc/breadcrumbs.php'; ?>
    <section class="sect1">
        <div class="wrapper">
            <div class="container">
                <div class="news-topics">
                    <div class="news-topics--title">
                        <h2 class="sect--title">会社案内</h2>
                    </div>
                </div>
                <div class="sect1__company-content">
                    <h3 class="sect1__company-content--ttl">営業品目</h3>
                    <div class="sect1__company-content--list">
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                <a href="<?php echo site_url('/technology/security'); ?>" class="title">セキュリティ印刷</a>
                            </li>
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                <a href="<?php echo site_url('/technology/security/hologram'); ?>" class="title">ホログラム加工</a>
                            </li>
                            <?php
                            $tags = [
                                ['/product/cashvoucher', '金券'],
                                ['/product/giftcertificates', '商品券'],
                                ['/product/coupon', 'クーポン券'],
                                ['/product/commuterpass', '地域振興券'],
                                ['/product/certificate_paper', '証明書用紙'],
                                ['/product/musicpaper', '楽譜用紙'],
                                ['/product/qualification', '資格証'],
                                ['/product/taxitickets', 'タクシー券等']
                            ];
                            foreach ($tags as $tag) :
                            ?>
                                <li>
                                    <?php if ($tag[0] == '') : ?>
                                        <span>・</span><?php echo $tag[1]; ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                        <?php if ($tag[0] != '') : ?>
                                            <a href="<?php echo $tag[0]; ?>">
                                                <?php echo $tag[1]; ?>
                                            </a>
                                        <?php else : ?>
                                            <?php echo $tag[1]; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                <a href="<?php echo site_url('/technology/special'); ?>" class="title">特殊印刷・加工</a>
                            </li>
                            <?php
                            $tags = [
                                ['/product/insurancecard', '保険者証'],
                                ['/product/card', 'カード'],
                                ['/product/seal', '封印シール'],
                                ['/technology/special/label', 'ラベル、部分シール'],
                                ['/technology/special/blindfold', '目隠しシール'],
                                ['', 'スクラッチ'],
                                ['', '蛇腹折加工'],
                            ];
                            foreach ($tags as $tag) :
                            ?>
                                <li>
                                    <?php if ($tag[0] == '') : ?>
                                        <span>・</span><?php echo $tag[1]; ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                        <?php if ($tag[0] != '') : ?>
                                            <a href="<?php echo $tag[0]; ?>">
                                                <?php echo $tag[1]; ?>
                                            </a>
                                        <?php else : ?>
                                            <?php echo $tag[1]; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                <a href="<?php echo site_url('/technology/digitalprint'); ?>" class="title">デジタル印刷</a>
                            </li>
                            <?php
                            $tags = [
                                ['/product/poster/', 'フィルムタペストリー'],
                                ['/product/longprintdigital/', 'デジタル長尺印刷'],
                                ['/product/panoramaprint/', 'パノラマ長尺印刷'],
                                ['/product/diagram/', 'ダイヤグラム'],
                                ['', 'セキュリティデジタル印刷'],
                                ['/digitalprint/genericdigital/', 'デジタル印刷一般'],
                                ['/digital/dps/', 'DPS（データプリントサービス）'],
                            ];
                            foreach ($tags as $tag) :
                            ?>
                                <li>
                                    <?php if ($tag[0] == '') : ?>
                                        <span>・</span><?php echo $tag[1]; ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                        <?php if ($tag[0] != '') : ?>
                                            <a href="<?php echo $tag[0]; ?>">
                                                <?php echo $tag[1]; ?>
                                            </a>
                                        <?php else : ?>
                                            <?php echo $tag[1]; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                <a href="<?php echo site_url('/technology/form'); ?>" class="title">フォーム印刷</a>
                            </li>
                            <?php
                            $tags = [
                                ['/product/longprint/', '長尺印刷<br>(20インチ～99インチ)'],
                                ['/technology/form/multicolor/', '多色フォーム印刷'],
                                ['/technology/form/ocr_omr/', 'OCR、OMR帳票'],
                                ['/form/spe_paper/', '特殊印刷'],
                                ['', 'サーマル印刷']
                            ];
                            foreach ($tags as $tag) :
                            ?>
                                <li>
                                    <?php if ($tag[0] == '') : ?>
                                        <span>・</span><?php echo $tag[1]; ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                        <?php if ($tag[0] != '') : ?>
                                            <a href="<?php echo $tag[0]; ?>">
                                                <?php echo $tag[1]; ?>
                                            </a>
                                        <?php else : ?>
                                            <?php echo $tag[1]; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <p class="title">その他</p>
                            </li>
                            <?php
                            $tags = [
                                ['/product/static_eliminatione_quipment/', '静電気除去装置（TRINC）'],
                                ['/product/lowvoltage_uveqipment/', '低電力UV装置'],
                            ];
                            foreach ($tags as $tag) :
                            ?>
                                <li>
                                    <?php if ($tag[0] == '') : ?>
                                        <span>・</span><?php echo $tag[1]; ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                        <?php if ($tag[0] != '') : ?>
                                            <a href="<?php echo $tag[0]; ?>">
                                                <?php echo $tag[1]; ?>
                                            </a>
                                        <?php else : ?>
                                            <?php echo $tag[1]; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="sect1__company-content">
                    <h3 class="sect1__company-content--ttl">会社概要</h3>
                    <table class="sect1__company-content--table">
                        <tr>
                            <td>商号</td>
                            <td>株式会社昇寿堂</td>
                        </tr>
                        <tr>
                            <td>本社<br>(総務・経理)</td>
                            <td>東京都中央区新富1-8-6<br>電話 : 03-3552-3631</td>
                        </tr>
                        <tr>
                            <td>工場・支所</td>
                            <td class="sect1__company-content--table__with_link">
                                <ul>
                                    <?php
                                    $lists = [
                                        ['office/#2', '深川工場（営業部）'],
                                        ['office/#3', '水戸営業所'],
                                        ['office/#4', '横浜出張所'],
                                        ['office/#5', '千葉出張所'],
                                        ['office/#6', '北関東出張所'],
                                        ['office/#7', '藤沢出張所']
                                    ];
                                    foreach ($lists as $list) :
                                    ?>
                                        <li>
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/blue_arrow.svg" alt="">
                                            <a href="<?php echo $list[0]; ?>"><?php echo $list[1]; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>資本金</td>
                            <td>4,000万円</td>
                        </tr>
                        <tr>
                            <td>創業</td>
                            <td>昭和22年4月1日</td>
                        </tr>
                        <tr>
                            <td>会社設立</td>
                            <td>昭和23年5月4日</td>
                        </tr>
                        <tr>
                            <td>役員</td>
                            <td>代表取締役会長 瀬戸 良教<br>
                                代表取締役社長 村松 孝義<br>
                                常務取締役 新保 朝男</td>
                        </tr>
                        <tr>
                            <td>従業員数</td>
                            <td>59名</td>
                        </tr>
                        <tr>
                            <td>従業員数</td>
                            <td>
                                <ul>
                                    <li><span>・</span>ビジネスフォームおよび記録計用紙印刷機</li>
                                    <li><span>・</span>長尺印刷機</li>
                                    <li><span>・</span>フォームラベラー機</li>
                                    <li><span>・</span>ホログラムおよびスクラッチ加工機<br>（連続およびシート）</li>
                                    <li><span>・</span>フォームダイカッター</li>
                                    <li><span>・</span>全自動枚葉オフセット印刷機</li>
                                    <li><span>・</span>UVインクジェット印刷機</li>
                                </ul>
                                <ul>
                                    <li><span>・</span>デジタルプレス機</li>
                                    <li><span>・</span>偽造防止用画像編集ソフト</li>
                                    <li><span>・</span>精密断裁機</li>
                                    <li><span>・</span>その他仕上設備</li>
                                    <li><span>・</span>CAD製図機</li>
                                    <li><span>・</span>殖版機</li>
                                    <li><span>・</span>CTP製版設備<br>その他付帯設備</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>取引銀行<br>(順不同)</td>
                            <td>
                                <ul>
                                    <li><span>・</span>みずほ銀行　銀座中央支店</li>
                                    <li><span>・</span>三井住友銀行　東京中央支店</li>
                                    <li><span>・</span>りそな銀行　東京中央支店</li>
                                    <li><span>・</span>きらぼし銀行　日本橋支店</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>主な得意先<br>(順不同)</td>
                            <td>
                                <ul>
                                    <p>諸会社</p>
                                    <li><span>・</span>株式会社日立製作所各事業所</li>
                                    <li><span>・</span>日立製作所関連会社</li>
                                    <li><span>・</span>青山学院大学および各大学</li>
                                    <li><span>・</span>東京女子医科大学病院</li>
                                    <li><span>・</span>信越化学工業株式会社</li>
                                    <li><span>・</span>AGS株式会社</li>
                                    <li><span>・</span>株式会社電通テック</li>
                                    <li><span>・</span>株式会社茨城計算センター</li>
                                    <li><span>・</span>東日本旅客鉄道株式会社</li>
                                    <li><span>・</span>西日本旅客鉄道株式会社</li>
                                    <li><span>・</span>東武鉄道株式会社</li>
                                    <li><span>・</span>小田急電鉄株式会社</li>
                                    <li><span>・</span>西武鉄道株式会社</li>
                                    <li><span>・</span>京成電鉄株式会社</li>
                                    <li><span>・</span>東京急行電鉄株式会社</li>
                                    <li><span>・</span>京浜急行電鉄株式会社</li>
                                    <li><span>・</span>相模鉄道株式会社</li>
                                    <li><span>・</span>首都圏新都市鉄道株式会社</li>
                                    <li><span>・</span>東京地下鉄株式会社</li>
                                </ul>
                                <ul>
                                    <p>官公庁</p>
                                    <li><span>・</span>独立行政法人都市再生機構</li>
                                    <li><span>・</span>東京都および東京23区役所</li>
                                    <li><span>・</span>茨城県および水戸市等自治体</li>
                                    <li><span>・</span>千葉県および千葉市等自治体</li>
                                    <li><span>・</span>神奈川県および横浜市等自治体</li>
                                    <li><span>・</span>埼玉県およびさいたま市等自治体</li>
                                    <li><span>・</span>各中央官庁</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>主な仕入れ先<br>(順不同)</td>
                            <td>
                                <ul>
                                    <li><span>・</span>株式会社共同紙販ホールディングス</li>
                                    <li><span>・</span>吉川紙商事株式会社</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    </section>
</div>
<?php get_footer(); ?>