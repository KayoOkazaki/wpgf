<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li>お客様の声</li>
            </ul>
        </div>
    </header>
    <div id="contents" class="voice">
       <!-- 戻るボタン -->
       <div id="page-top">
            <a id="move-page-top" href="#top"><i class="fa fa-chevron-circle-up fa-5x"></i></a>
       </div>
       <div id="contentsInner">
            <div id="main">

                <section id="voice">
                    <h2>
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/print-i54.png" width="21%" alt="" />&nbsp;
	                    Voice&nbsp;&nbsp;お客様の声
	                    &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/print-i50.png" width="15%" alt="" />
                    </h2>
					<?php
					 $args = array(
							 'post_type' => 'voice',
							 'post_status' => 'publish',
							 'posts_per_page' => -1
					 );
					 $customPosts = get_posts($args);
					 ?>
       				<!-- 投稿記事を取得 -->
					 <?php if ($customPosts): ?>
						 <?php foreach ($customPosts as $post): setup_postdata( $post );?>
	                    	<article id="voice01">
	                        	<h3><?php the_title(); ?>&nbsp
	                                <?php echo post_custom('age'); ?>&nbsp
	                                <?php echo post_custom('sex'); ?>&nbsp
	                                <?php echo post_custom('job'); ?>
	                            </h3>
		                        <div class="wrapper">
									<div class="article">
										<?php the_content(); ?>
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