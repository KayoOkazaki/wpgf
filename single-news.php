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
                    <h2>What's New&nbsp;&nbsp;新着情報</h2>
       				<!-- 投稿記事を取得 -->
           		<?php if(have_posts()):?>
	  						<?php while(have_posts()):the_post();?>
	                    	<article id="news01">
                        	<h3><?php the_title(); ?></h3>
                        	<span class="date">
                        		<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;<?php the_time("Y-n-j"); ?>
                        	</span>
	                        <div>
		                        <div class="article">
		                            <?php the_content(); ?>
		                        </div>
		                        <div class="thumb">
									<!-- 投稿にアイキャッチ画像が割り当てられているかチェック -->
					                <?php	if(has_post_thumbnail()):?>
					                	<div class="image"><?php echo the_post_thumbnail(array( 200, 200 )); ?></div>
									<?php endif; ?>
		                        </div>
		                    </div>
                    		</article>
						<?php endwhile; ?>
					<?php endif; ?>

                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>