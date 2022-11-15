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
                <div class="sect1__buttons">
                    <?php
                    $text_link = [
                        ['#1', '本社（総務・経理）'],
                        ['#2', '営業部・深川工場'],
                        ['#3', '水戸営業所'],
                        ['#4', '横浜出張所'],
                        ['#5', '千葉出張所'],
                        ['#6', '北関東出張所'],
                        ['#7', '藤沢出張所'],
                        ['#8', '昇寿チャート']
                    ];

                    foreach ($text_link as $text) :
                    ?>
                        <a href="<?php echo $text[0]; ?>" class="sect1__buttons--link">
                            <p><?php echo $text[1]; ?></p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/common/white_arrow.svg" alt="white_arrow" />
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="sect1__content" id="1">
                    <h2 class="sect1__content--ttl">本社 （総務・経理）</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒104-0041<br class="sp"> 東京都中央区新富1-8-6</td>
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
                    <div class="sect1__content--map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6482.347786456247!2d139.774431!3d35.67272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf3db548c2dae1eac!2z44ix5piH5a-_5aCCIOe3j-WLmemDqO-9pee1jOeQhumDqA!5e0!3m2!1sja!2sjp!4v1666769151923!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="sect1__content" id="2">
                    <h2 class="sect1__content--ttl">営業部・深川工場</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒135-0064<br class="sp"> 東京都江東区牡丹3-33-6</td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td>営業部 : 03-3642-4596<br>
                                深川工場 : 03-3642-4591</td>
                        </tr>
                        <tr>
                            <td>FAX番号</td>
                            <td>03-3642-4592</td>
                        </tr>
                    </table>
                    <ul class="sect1__content--list">
                        <li>・東京メトロ東西線「門前仲町」駅　2番出口より徒歩8分</li>
                        <li>・都営大江戸線「門前仲町」駅　4番出口より徒歩12分</li>
                        <li>・JR京葉線「越中島」駅　3番出口より徒歩15分</li>
                    </ul>
                    <div class="sect1__content--map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1620.6653371319003!2d139.801023!3d35.668859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd4a20ec35615c43e!2z44ix5piH5a-_5aCCIOa3seW3neW3peWgtA!5e0!3m2!1sja!2sjp!4v1666769252371!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="sect1__content" id="3">
                    <h2 class="sect1__content--ttl">水戸営業所</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒312-0027<br class="sp"> 茨城県ひたちなか市勝田中原町6-16</td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td>029-273-7667</td>
                        </tr>
                        <tr>
                            <td>FAX番号</td>
                            <td>029-273-7668</td>
                        </tr>
                    </table>
                    <ul class="sect1__content--list">
                        <li>・JR常磐線「勝田」駅　西口より徒歩約15分</li>
                    </ul>
                    <div class="sect1__content--map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6423.325868553275!2d140.51504!3d36.393153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1f83a438ca519611!2z77yI5qCq77yJ5piH5a-_5aCCIOawtOaIuOWWtualreaJgA!5e0!3m2!1sja!2sjp!4v1666769274984!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="sect1__content" id="4">
                    <h2 class="sect1__content--ttl">横浜出張所</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒235-0045<br class="sp"> 神奈川県横浜市磯子区洋光台3-9-27-101</td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td>045-831-0125</td>
                        </tr>
                        <tr>
                            <td>FAX番号</td>
                            <td>045-831-1001</td>
                        </tr>
                    </table>
                </div>
                <div class="sect1__content" id="5">
                    <h2 class="sect1__content--ttl">千葉出張所</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒279-0043<br class="sp"> 千葉県浦安市富士見1-13-1-206</td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td>047-301-1979</td>
                        </tr>
                        <tr>
                            <td>FAX番号</td>
                            <td>047-301-3302</td>
                        </tr>
                    </table>
                </div>
                <div class="sect1__content" id="6">
                    <h2 class="sect1__content--ttl">北関東出張所</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒344-0005<br class="sp"> 埼玉県春日部市樋堀244-3 ラミアール春日部A-209</td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td>048-797-7492</td>
                        </tr>
                        <tr>
                            <td>FAX番号</td>
                            <td>048-797-7493</td>
                        </tr>
                    </table>
                </div>
                <div class="sect1__content" id="7">
                    <h2 class="sect1__content--ttl">藤沢出張所</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒251-0016<br class="sp"> 神奈川県藤沢市弥勒寺513-39 ウインベルソロ藤沢第6-110</td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td>0466-55-4722</td>
                        </tr>
                        <tr>
                            <td>FAX番号</td>
                            <td>0466-55-4733</td>
                        </tr>
                    </table>
                </div>
                <div class="sect1__content" id="8">
                    <h2 class="sect1__content--ttl">昇寿チャート株式会社（系列オフセット印刷部門）</h2>
                    <table class="sect1__content--table">
                        <tr>
                            <td>住所</td>
                            <td>〒110-0016<br class="sp"> 東京都台東区台東4-20-6</td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td>03-3833-4481</td>
                        </tr>
                    </table>
                </div>
            </div>
    </section>
</div>
<?php get_footer(); ?>