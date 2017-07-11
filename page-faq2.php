<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li>よくある質問</li>
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
                <section id="price">
                    <h2>Q and A&nbsp;&nbsp;よくある質問</h2>
                    <div id="QandA-1">
										<?php
										 $args = array(
												 'post_type' => 'faq2',
												 'post_status' => 'publish',
												 'posts_per_page' => -1
										 );
										 $customPosts = get_posts($args);

										 //投稿の古い順番に並び替え
										 sort($customPosts);

										 ?>
										<?php if ($customPosts): ?>
										 <?php foreach ($customPosts as $post): setup_postdata( $post );?>
												<!-- Q and Aタイトルをセット -->
										    <h3><?php the_title(); ?></h3>

												<!-- ************************************************************* -->
												<!--                                                               -->
												<!-- Smart Custom Fields 使用                                      -->
												<!--                                                               -->
												<!-- ************************************************************* -->

												<?php
												//グループ内で回す
												$field_group = SCF::get( 'about_massage' );
												foreach ( $field_group as $fields ) {
												 ?>

												<?php
												//テキスト出力
												if ( trim( esc_html( $fields['question'] )) !== "") {
													echo "<dt>". esc_html( $fields['question'] )."</dt>";
													echo "<dd><span class='strong'>". esc_html( $fields['answer_simple'] ). "</span><br>";
													echo esc_html( $fields['answer_detail'] )."</dd>";
												}

												 ?>

												<?php } ?>
										<?php endforeach; ?>
								 <?php endif; ?>

                    </div>
               </section>
            </div>
        </div>
    </div>
<?php get_footer();?>