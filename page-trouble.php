<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li>ブログ</li>
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
                <section id="trouble">
                    <h2>Trouble&nbsp;&nbsp;体の悩みその原因とは</h2>
					<?php
					 $args = array(
							 'post_type' => 'trouble',
							 'post_status' => 'publish',
							 'posts_per_page' => 5
					 );
					 $customPosts = get_posts($args);
					 ?>
					 <?php if ($customPosts): ?>
						 <?php foreach ($customPosts as $post): setup_postdata( $post );?>
		                    <article id="trouble01">
		                        <h3><?php the_title(); ?></h3>
		                        <div>
									<div class="article">
										<?php
										// １、投稿テキストを取得する
										$content = get_the_content();

										// ２，HTMLタグをすべて取り除く
										//$content = wp_strip_all_tags($content);

										// ３．ショートコードを取り除く
										//$content = remove_shortcode( $content );

										// ４、出力する
										echo $content;
										?>
		                            	<!--<?php //the_content("続きを読む", true ) ; ?>-->
			                        </div>
			                        <div class="thumb">
										<!-- 投稿にアイキャッチ画像が割り当てられているかチェック -->
						                <?php if(has_post_thumbnail()):?>
						                	<div class="image"><?php echo the_post_thumbnail(array( 200, 200 )); ?></div>
										<?php endif; ?>
			                        </div>
		                            <!-- <div class="image"><img src="<?php //echo get_template_directory_uri(); ?>/images/trouble01-150x150.jpg"></div> -->
		                        </div>
		                    </article>
						<?php endforeach; ?>
					 <?php endif; ?>
				 <?php wp_reset_postdata(); ?>

                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>