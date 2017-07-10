<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li>こんな悩みはありませんか？</li>
            </ul>
        </div>
    </header>
    <div id="contents" class="contents-trouble">
       <!-- 戻るボタン -->
       <div id="page-top">
            <a id="move-page-top" href="#top"><i class="fa fa-chevron-circle-up fa-5x"></i></a>
       </div>
       <div id="contentsInner">
            <div id="main">

                <section id="trouble">
                    <h2>Trouble&nbsp;&nbsp;体のお悩み</h2>
       				<!-- 投稿記事を取得 -->
            		<?php if(have_posts()):?>
  						<?php while(have_posts()):the_post();?>
	                    	<article id="trouble01">
                        	<h3><?php the_title(); ?></h3>
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