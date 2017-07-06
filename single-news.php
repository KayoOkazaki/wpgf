<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li>こんな悩みはありませんか？</li>
            </ul>
        </div>
    </header>
    <div id="contents" class="contents-news">
       <!-- 戻るボタン -->
       <div id="page-top">
            <a id="move-page-top" href="#top"><i class="fa fa-chevron-circle-up fa-5x"></i></a>
       </div>
       <div id="contentsInner">
            <div id="main">

                <section id="news-section">
                    <h2>News&nbsp;&nbsp;新着情報</h2>
			            		<?php	if(have_posts()):?>
				  							<?php while(have_posts()):the_post();?>
			                    <article id="news01">
			                        <h3><?php the_title(); ?></h3>
			                        <span class="date"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>&nbsp;<?php the_time("Y-n-j"); ?></span>
			                        <div class="wrapper">
			                            <p><?php the_content(); ?></p>
			                        </div>
			                    </article>
												<?php endwhile; ?>
											<?php endif; ?>

                    <article id="news02">
                        <h3>フラワーエッセンスモニター募集</h3>
                        <span class="date"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>&nbsp;2017-06-01</span>
                        <div class="wrapper">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                            demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee
                            the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty
                             through weakness of will, which is the same as saying through shrinking from toil and pain.
                             These cases are perfectly simple and easy to distinguish.
                            </p>
                            <div class="image"><img src="http://placeimg.com/200/200/nature?t=1498939851765"></div>
                        </div>
                    </article>
                    <article id="news03">
                        <h3>レイキヒーリング講習会開催</h3>
                        <span class="date"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>&nbsp;2017-05-25</span>
                        <div class="wrapper">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                            demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee
                            the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty
                             through weakness of will, which is the same as saying through shrinking from toil and pain.
                             These cases are perfectly simple and easy to distinguish.
                            </p>
                            <div class="image"><img src="http://placeimg.com/200/200/nature?t=1498939819062"></div>
                        </div>
                    </article>
                    <article id="news04">
                        <h3>友達紹介キャンペーン</h3>
                        <span class="date"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>&nbsp;2017-04-21</span>
                        <div class="wrapper">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                            demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee
                            the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty
                             through weakness of will, which is the same as saying through shrinking from toil and pain.
                             These cases are perfectly simple and easy to distinguish.
                            </p>
                            <div class="image"><img src="http://placeimg.com/200/200/people?t=1498939971061"></div>
                    </article>
                    <article id="news05">
                        <h3>会員の方向けポイントカード始めました</h3>
                        <span class="date"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>&nbsp;2017-04-03</span>
                        <div class="wrapper">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                            demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee
                            the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty
                             through weakness of will, which is the same as saying through shrinking from toil and pain.
                             These cases are perfectly simple and easy to distinguish.
                            </p>
                            <div class="image"><img src="http://placeimg.com/200/200/nature?t=1498940190357"></div>
                    </article>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>