<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="index.php">ホーム</a></li>
                <li>お問合せ・予約</li>
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
                  <h2>contact お問合せ・予約</h2>
                  <p>ご予約に関する以下注意事項をご確認のうえ必要事項をご記入いただき、送信ボタンをクリックしてください。</p><br>
                  <ul style="list-style-type:square">
                      <li>ご予約の場合は、お問合せ欄に施術内容と時間、<strong>ご希望日時を第3希望</strong>までご記入ください。<br></li>
                      <li>※本メール送信のみでご予約は確定しておりません。<br></li>
                      <li>折り返し予約可能日時をメールまたはお電話にてご連絡いたします。</li>
                  </ul>
                  <!-- フォーム画面 -->
                  <div id="form">
										<?php if(have_posts()):?>
											 <?php while (have_posts()): the_post();?>
												 <?php the_content(); ?>
											 <?php endwhile; ?>
										<?php endif; ?>
									</div>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>