<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li>施術料金</li>
            </ul>
        </div>
    </header>
    <div id="contents">
       <!-- 戻るボタン -->
       <div id="page-top">
            <a id="move-page-top" href="#top"><i class="fa fa-chevron-circle-up fa-5x"></i></a>
       </div>
       <div id="contentsInner">
            <div id="main">
                <section id="price">
                    <h2>Menu&ensp;施術料金</h2>
                    <table><caption><h3>整体メニュー</h3></caption>
                        <tr><th>部位</th><th>時間</th><th>料金</th></tr>
                        <tr><th id="h">上半身（首・肩・背中）</th><td>60分</td><td>4,000円</td></tr>
                        <tr><th>下半身（腰・脚・足裏）</th><td>60分</td><td>4,000円</td></tr>
                        <tr><th rowspan="2">全身（上半身・下半身）</th><td>60分</td><td>4,000円</td></tr>
                        <tr><td>90分</td><td>6,000円</td></tr>
                        <tr><th>延長</th><td>30分</td><td>2,000円</td></tr>
                    </table>
                    <table><caption><h3>レイキ・ヒーリング（整体をお受けの方のみ）</h3></caption>
                        <tr><th id="h">時間</th><th>料金</th></tr>
                        <tr><th>60分</th><td>1,000円</td></tr>
                        <tr><th>90分</th><td>1,500円</td></tr>
                        <tr><th>延長30分</th><td>500円</td></tr>
                    </table>
                    <table><caption><h3>フラワーエッセンス（整体をお受けの方のみ）</h3></caption>
                        <tr><th>内容</th><th>料金</th></tr>
                        <tr><th id="h">カウンセリング+調合</th><td>1,500円</td></tr>
                        <tr><th>調合（+ボトル代）</th><td>700円</td></tr>
                        <tr><th>調合のみ（ボトルお持込）</th><td>500円</td></tr>
                    </table>
                    <table><caption><h3>レイキ・アチューメント伝授　ただいま準備中！</h3></caption>
                        <tr><th>コース</th><th>時間</th><th>料金</th></tr>
                        <tr><th id="h">ファーストディグリー</th><td>準備中</td><td>準備中</td></tr>
                        <tr><th>セカンドディグリー</th><td>準備中</td><td>準備中</td></tr>
                        <tr><th>サードディグリー</th><td>準備中</td><td>準備中</td></tr>
                        <tr><th>ティーチャーズ<br>ディグリー</th><td>準備中</td><td>準備中</td></tr>
                    </table>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>