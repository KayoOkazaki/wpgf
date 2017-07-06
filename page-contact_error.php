<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path('contact')->ID); ?>">お問合せ・予約</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path('contact_conf')->ID); ?>">送信確認</a></li>
                <li>送信エラー</li>
            </ul>
        </div>
    </header>
    <div id="contact">
       <!-- 戻るボタン -->
       <div id="page-top">
            <a id="move-page-top" href="#top"><i class="fa fa-chevron-circle-up fa-5x"></i></a>
       </div>
       <div id="contentsInner">
            <div id="main">
                <section id="mailform">
                    <h2>送信エラー</h2>
                    <h3>大変申し訳ございません。内部エラーが発生しました。</h3>
                    <p>お手数ですが、時間をおいて再度お試しいただくか、<b>03-3760-0447</b>までお電話いただけますようお願い申し上げます。</p>
                    <p><a href="index.php">トップページへ戻る</a></p>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>