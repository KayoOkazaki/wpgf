<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path('contact')->ID); ?>">お問合せ・予約</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path('contact_conf')->ID); ?>">送信確認</a></li>
                <li>送信完了</li>
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
                    <h2>送信完了</h2>
                    <h3>ご予約ありがとうございました。</h3>
                    <p>ご予約頂きました内容で施術可能かどうか確認をいたします。<br>
                       もしご希望に添えない場合は折り返し担当者よりご連絡差し上げます。<br><br>
                       またメールアドレスに不備がございますと確認メールが届かない場合がございます。<br>
                       その際はお手数ではございますが、<b>03-1234-5678</b>までお電話にてご連絡ください。
                    </p>
                    <p><a href="index.php">トップページへ戻る</a></p>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>