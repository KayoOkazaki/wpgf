<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li>施術料金</li>
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
                <section id="pricelist">
                    <h2>
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/print-i54.png" width="21%" alt="" />&nbsp;
	                    Menu&ensp;施術料金
	                    &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/print-i50.png" width="15%" alt="" />
                    </h2>

										<?php
										 $args = array(
												 'post_type' => 'menu',
												 'post_status' => 'publish',
												 'posts_per_page' => -1
										 );
										 $customPosts = get_posts($args);

										 //投稿の古い順番に並び替え
										 sort($customPosts);

										 ?>
										<?php if ($customPosts): ?>
										 <?php foreach ($customPosts as $post): setup_postdata( $post );?>
												<!-- メニュータイトルをセット -->
                    <table><caption><h3><?php the_title(); ?></h3></caption>

												<!-- ************************************************************* -->
												<!--                                                               -->
												<!-- Smart Custom Fields 使用                                      -->
												<!--                                                               -->
												<!-- ************************************************************* -->

												<?php
												//時間表示を別セルに分ける場合
												if (SCF::get('divie_flg')=="Yes") {

														echo "<tr><th id='h'>内容</th><th>時間</th><th>料金</th></tr>";


																//グループ内で回す
																$field_group = SCF::get( 'menu_group' );
																foreach ( $field_group as $fields ) {
																		echo "<tr><th>". esc_html( $fields['menu_name'] ) . "</th><td>". esc_html( $fields['time'] ) . "</th><td>". esc_html( $fields['price'] ) . "</td></tr>";
																}

												//時間表示を別セルに分けない場合
												} else {

														echo "<tr><th id='h'>内容</th><th>料金</th></tr>";


															//グループ内で回す
															$field_group = SCF::get( 'menu_group' );
															foreach ( $field_group as $fields ) {

																$time = esc_html( $fields['time']) == "なし" ? "" : esc_html( $fields['time']);

																echo "<tr><th>". esc_html( $fields['menu_name'] ) . $time. "</th><td>". esc_html( $fields['price'] ) . "</td></tr>";
															}
												}
												echo "</table>";
											 ?>
										<?php endforeach; ?>
								 <?php endif; ?>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>