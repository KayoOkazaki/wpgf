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
                    <!-- フォーム画面 -->
					<?php if(have_posts()):?>
						 <?php while (have_posts()): the_post();?>
							<?php the_content(); ?>
						 <?php endwhile; ?>
					 <?php endif; ?>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>