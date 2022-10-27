<?php get_header();?>
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
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="" class="title">セキュリティ印刷</a>
                            </li>
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="" class="title">ホログラム加工</a>
                            </li>
                            <?php
                                $tags = [
                                    ['','金券'],
                                    ['','商品券'],
                                    ['','クーポン券'],
                                    ['','地域振興券'],
                                    ['','証明書用紙'],
                                    ['','楽譜用紙'],
                                    ['','資格証'],
                                    ['','タクシー券等']
                                ];
                                foreach($tags as $tag):
                            ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="<?php echo $tag[0];?>"><?php echo $tag[1]; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="" class="title">特殊印刷・加工</a>
                            </li>
                            <?php
                                $tags = [
                                    ['','保険者証'],
                                    ['','カード'],
                                    ['','封印シール'],
                                    ['','ラベル、部分シール'],
                                    ['','目隠しシール'],
                                    ['','スクラッチ'],
                                ];
                                foreach($tags as $tag):
                            ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="<?php echo $tag[0];?>"><?php echo $tag[1];?></a>
                            </li>
                            <?php endforeach; ?>
                            <li><span>・</span>蛇腹折加工</li>
                        </ul>
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="" class="title">デジタル印刷</a>
                            </li>
                            <?php
                                $tags = [
                                    ['','フィルムタペストリー'],
                                    ['','デジタル長尺印刷'],
                                    ['','パノラマ長尺印刷'],
                                    ['','ラベル、部分シール'],
                                    ['','ダイヤグラム'],
                                    ['','セキュリティデジタル印刷'],
                                    ['','デジタル印刷一般'],
                                    ['','DPS（データプリントサービス）'],
                                ];
                                foreach($tags as $tag):
                            ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="<?php echo $tag[0];?>"><?php echo $tag[1];?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="" class="title">フォーム印刷</a>
                            </li>
                            <?php
                                $tags = [
                                    ['','長尺印刷<br>(20インチ～99インチ)'],
                                    ['','多色フォーム印刷'],
                                    ['','OCR、OMR帳票'],
                                    ['','特殊印刷'],
                                ];
                                foreach($tags as $tag):
                            ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="<?php echo $tag[0];?>"><?php echo $tag[1];?></a>
                            </li>
                            <?php endforeach; ?>
                            <li><span>・</span>サーマル印刷</li>
                        </ul>
                        <ul class="sect1__company-content--list__item">
                            <li class="main">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="" class="title">その他</a>
                            </li>
                            <?php
                                $tags = [
                                    ['','静電気除去装置（TRINC）'],
                                    ['','低電力UV装置'],
                                ];
                                foreach($tags as $tag):
                            ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                    alt="">
                                <a href="<?php echo $tag[0];?>"><?php echo $tag[1];?></a>
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
                            <td>
                                <ul>
                                    <?php
                                        $lists = ['深川工場（営業部）','水戸営業所','横浜出張所','千葉出張所','北関東出張所','藤沢出張所'];
                                        foreach($lists as $list):
                                    ?>
                                    <li>
                                        <img src="<?php echo get_template_directory_uri();?>/release/image/common/blue_arrow.svg"
                                            alt="">
                                        <?php echo $list;?>
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
                                    <li>・ビジネスフォームおよび記録計用紙印刷機</li>
                                    <li>・長尺印刷機</li>
                                    <li>・フォームラベラー機</li>
                                    <li>・ホログラムおよびスクラッチ加工機<br>（連続およびシート）</li>
                                    <li>・フォームダイカッター</li>
                                    <li>・全自動枚葉オフセット印刷機</li>
                                    <li>・UVインクジェット印刷機</li>
                                    <li>・デジタルプレス機</li>
                                </ul>
                                <ul>
                                    <li>・デジタルプレス機</li>
                                    <li>・偽造防止用画像編集ソフト</li>
                                    <li>・精密断裁機</li>
                                    <li>・その他仕上設備</li>
                                    <li>・CAD製図機</li>
                                    <li>・殖版機</li>
                                    <li>・CTP製版設備<br>その他付帯設備</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>取引銀行<br>(順不同)</td>
                            <td>
                                <ul>
                                    <li>・みずほ銀行　銀座中央支店</li>
                                    <li>・三井住友銀行　東京中央支店</li>
                                    <li>・りそな銀行　東京中央支店</li>
                                    <li>・きらぼし銀行　日本橋支店</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>主な得意先<br>(順不同)</td>
                            <td>
                                <ul>
                                    <p>諸会社</p>
                                    <li>・株式会社日立製作所各事業所</li>
                                    <li>・日立製作所関連会社</li>
                                    <li>・青山学院大学および各大学</li>
                                    <li>・東京女子医科大学病院</li>
                                    <li>・信越化学工業株式会社</li>
                                    <li>・AGS株式会社</li>
                                    <li>・株式会社電通テック</li>
                                    <li>・株式会社茨城計算センター</li>
                                    <li>・東日本旅客鉄道株式会社</li>
                                    <li>・西日本旅客鉄道株式会社</li>
                                    <li>・東武鉄道株式会社</li>
                                    <li>・小田急電鉄株式会社</li>
                                    <li>・西武鉄道株式会社</li>
                                    <li>・京成電鉄株式会社</li>
                                    <li>・東京急行電鉄株式会社</li>
                                    <li>・京浜急行電鉄株式会社</li>
                                    <li>・相模鉄道株式会社</li>
                                    <li>・首都圏新都市鉄道株式会社</li>
                                    <li>・東京地下鉄株式会社</li>
                                </ul>
                                <ul>
                                    <p>官公庁</p>
                                    <li>・独立行政法人都市再生機構</li>
                                    <li>・東京都および東京23区役所</li>
                                    <li>・茨城県および水戸市等自治体</li>
                                    <li>・千葉県および千葉市等自治体</li>
                                    <li>・神奈川県および横浜市等自治体</li>
                                    <li>・埼玉県およびさいたま市等自治体</li>
                                    <li>・各中央官庁</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>主な仕入れ先<br>(順不同)</td>
                            <td>
                                <ul>
                                    <li>・株式会社共同紙販ホールディングス</li>
                                    <li>・吉川紙商事株式会社</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
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
