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
                    <h2>
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/print-i54.png" width="21%" alt="" />&nbsp;
	                    Trouble&nbsp;&nbsp;体の悩みについて
	                    &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/print-i50.png" width="15%" alt="" />
                    </h2>
					<?php
					 $args = array(
							 'post_type' => 'trouble',
							 'post_status' => 'publish',
							 'posts_per_page' => -1
					 );
					 $customPosts = get_posts($args);
					 ?>
					 <?php if ($customPosts): ?>
						 <?php foreach ($customPosts as $post): setup_postdata( $post );?>
			                <article id="trouble01">
			                   <h3><?php the_title(); ?></h3>
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
					              </div>
					           </article>
						<?php endforeach; ?>
					 <?php endif; ?>

					<!-- ページネーション -->
					<?php next_posts_link(); ?>

				<div class="pagination">
					<?php
					global $wp_query;
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
					) );
					?>
				</div>
				 <?php wp_reset_postdata(); ?>

                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>