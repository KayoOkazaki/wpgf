<?php get_header();?>
        <div id="breadcrumb">
            <ul>
                <li> ホーム</li>
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
                <section id="news">
                    <h2>
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/print-i54.png" width="23%" alt="" />&nbsp;
	                    What's New&nbsp;&nbsp;新着情報
	                    &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/print-i50.png" width="18%" alt="" />
                    </h2>
                      <div>
                        <ul>
                        <?php
							$args = array(
								'post_type' => 'news',
								'post_status' => 'publish',
								'posts_per_page' => 5
							);
							$customPosts = get_posts($args);
						?>
						<!--新着情報があれば -->
						<?php if ($customPosts): ?>

							<!--新着情報をデータの数分表示 -->
							<?php foreach ($customPosts as $post): setup_postdata($post); ?>

                            <li>
                            	<span class="news-date"><time datetime="<?php echo get_the_date('Y-m-d'); ?>">&nbsp&nbsp&nbsp<?php echo get_the_date('Y-m-d'); ?></time>&nbsp&nbsp&nbsp</span>
								<span class="news-title">
								<!--新着情報本文が存在すれば -->
								<?php if(get_the_content()): ?>

									<!--新着情報タイトルと本文リンク情報を表示 -->
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								<!--上記以外の時 -->
								<?php else: ?>

									<!--新着情報タイトルのみ表示 -->
									<?php the_title(); ?>
								<?php endif; ?>
								</span>
							</li>
							<?php endforeach; ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
                    	</ul>
                    </div>
                    <div class="other">
						<!--スラッグ名からパーマリンクを取得 -->
                    	<?php
						$page = get_page_by_path( 'news' );
						$permalink = get_permalink( $page->ID );
						?>
                    	<p><a href="<?php echo $permalink;?>">その他のお知らせ</a></p>
                    </div>
                </section>
                <section id="trouble">
                    <h2>
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/print-i54.png" width="21%" alt="" />&nbsp;
	                    Trouble こんな悩みはありませんか？
	                    &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/print-i50.png" width="15%" alt="" />
                    </h2>
<!--                     <h2>Trouble こんな悩みはありませんか？</h2> -->
                    <div class="trouble-wrap">
                    <ul class="list">

					<!--体の悩み記事の表示 -->
	                    <?php
						$args = array(
							'post_type' => 'trouble',
							'post_status' => 'publish',
							'posts_per_page' => -1
							);
						$customPosts = get_posts($args);
						?>
					<!--体の悩み記事があれば -->
					<?php if ($customPosts): ?>

						<!--データの数分表示 -->
						<?php foreach ($customPosts as $post): setup_postdata($post); ?>
							<!--  Topページに表示するフラグがYesのみ表示する -->
							<?php if (post_custom('primary') == "Yes"): ?>
				                        <li class="list-mv05">
			                            <div class="cap">
		                                <figure>
	                                    <a href="<?php the_permalink(); ?>">
								<!-- 投稿にアイキャッチ画像が割り当てられているかチェック -->
				                <?php if(has_post_thumbnail()):?>
				                	<?php echo the_post_thumbnail(array(320,213)); ?>
								<?php endif; ?>
                                    <span class="ttl"><?php the_title(); ?></span>
                                    <figcaption>
                                        <h3><?php the_title(); ?></h3>
                                        <?php echo wpautop( post_custom('intro').'続きを読む...');?>
                                    </figcaption>
                                    </a>
		                            </figure>
		                          </div>
		                        </li>
	                        <?php endif; ?>
                        <?php endforeach; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
                    </ul>
                    </div>
                    <div class="other">
						<!--スラッグ名からパーマリンクを取得 -->
                    	<?php
						$page = get_page_by_path( 'trouble' );
						$permalink = get_permalink( $page->ID );
						?>
                    	<p><a href="<?php echo $permalink;?>">その他のお悩み事例</a></p>
                    </div>
                </section>
                <section id="voice">
                    <h2>
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/print-i54.png" width="21%" alt="" />&nbsp;
	                    Voice お客様の声
	                    &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/print-i50.png" width="15%" alt="" />
                    </h2>
<!--                     <h2>Voice お客様の声</h2> -->
                    <div class="voice-wrap">

					<?php
						$args = array(
							'post_type' => 'voice',
							'post_status' => 'publish',
							'posts_per_page' => -1
						);
						$customPosts = get_posts($args);
					?>
					<?php if ($customPosts): ?>
						<?php foreach ($customPosts as $post): setup_postdata($post); ?>
							<!--  Topページに表示するフラグがYesのみ表示する -->
							<?php if (post_custom('primary') == "Yes"): ?>
                   <div class="voice-in css-fukidashi">
                     <figure class="text">
									 <!-- 投稿にアイキャッチ画像が割り当てられているかチェック -->
	             <?php if(has_post_thumbnail()):?>
			                <?php echo the_post_thumbnail(); ?>
							 <?php endif; ?>
                       <figcaption>
		                      <h3>
	                          <?php echo post_custom('age'); ?>&nbsp
	                          <?php echo post_custom('sex'); ?>&nbsp
	                          <?php echo post_custom('job'); ?>
                          </h3>
                          <p><?php the_content(); ?></p>
                       </figcaption>
                     </figure>
                   <div class="fukidashi">
								  	<p><?php echo post_custom('title'); ?></p>
								  </div>
                 </div>
               <?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
                    </div>
                    <div class="other">
						<!--スラッグ名からパーマリンクを取得 -->
                    	<?php
												$page = get_page_by_path( 'voice' );
												$permalink = get_permalink( $page->ID );
											?>
                    	<p><a href="<?php echo $permalink;?>">その他お客様の声</a></p>
                    </div>
                </section>
                <section id="shop">
                    <h2>
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/print-i54.png" width="21%" alt="" />&nbsp;
	                    Access アクセス・店舗ご案内
	                    &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/print-i50.png" width="15%" alt="" />
                    </h2>
<!--                     <h2>Access アクセス・店舗ご案内</h2> -->
										<?php
										 $args = array(
												 'post_type' => 'shop',
												 'post_status' => 'publish',
												 'posts_per_page' => -1
										 );
										 $customPosts = get_posts($args);

										 //投稿の古い順番に並び替え
										 sort($customPosts);

										 ?>
										<?php if ($customPosts): ?>
										 <?php foreach ($customPosts as $post): setup_postdata( $post );?>

												<!-- ************************************************************* -->
												<!--                                                               -->
												<!-- Smart Custom Fields 使用                                      -->
												<!--                                                               -->
												<!-- ************************************************************* -->
                        <div class="shop-wrap">
                            <div id="map" style="width:100%;">
                            		<?php echo SCF::get('map_link');?>
                            </div>
                            <div id="info">
                            <table>
                            <caption>店舗情報</caption>
                            <tr><th colspan="2"><?php echo SCF::get('shop_kind');?>&nbsp;<?php echo SCF::get('shopname');?></th></tr>
                                <tr><th>定休日</th><td><?php echo SCF::get('holiday');?></td></tr>
                                <tr><th>店舗の場所</th><td><?php echo SCF::get('place');?></td></tr>
                                <tr><th>営業時間</th><td><?php echo SCF::get('business_hours');?></td></tr>
                                <tr><th>予約TEL</th><td><?php echo SCF::get('tel_no');?></td></tr>
                            </table>
                            </div>
                        </div>
                       <?php endforeach;?>
                     <?php endif;?>
                </section>
                <section id="staff">
                    <h2>
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/print-i54.png" width="21%" alt="" />&nbsp;
	                    Staff スタッフ紹介
	                    &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/print-i50.png" width="15%" alt="" />
                    </h2>
<!--                     <h2>Staff スタッフ紹介</h2> -->
                        <div class="staff-wrap">
                            <div class="staff-in">
                                <div class="staff-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/staff01.jpg" alt="スタッフ紹介">
                                </div>
                                <div class="staff-intro">
                                    <h3 class="staff-nm-j">&nbsp;<br>小野澄江</h3>
                                    <p class="staff-nm-r"><br>&nbsp;Sumie Ono</p>
                                    <p class="staff-position">&nbsp;整体師・レイキヒーラー</p>
                                    <hr>
                                    <p class="staff-desc">
                                        <span>19xx年九州生まれ。</span><br>
                                        <span>2014年スピリチュアルに興味を抱き、エネルギーヒーリングやシータヒーリングを学びヒーラーを志す。2015年リラクゼーショントレーナー整体学院にて
                                        解剖学や生理学など学んだのち、2016年2月より「からだサロンHOTちょっと」の整体師に。現在は、「<?php bloginfo('title'); ?>」の整体師として、整体コースを担当。</span><br>
                                        <span>肩や腰の痛みがなくなったり、表情が明るくなるなどお客さまの変化を感じられることが喜び。肩コリ・腰痛など体の痛みだけでなく日常のストレスをかかえる人のために、
                                        日々勉強中。女性として、ヒーラーとしても、もっともっと成長してたくさんの人の心と体の悩みを克服して笑顔になってもらえることを目標としています。
                                        「長年悩んでいた体の痛みや心のストレスから解放された」と言ってもらえるよう、自分自身の人生も楽しみながら頑張っている。</span><br>
                                        <span>趣味は美味しいものを食べるのが好きで友人や家族と月に一度はグルメ散策している。</span><br>
                                    <figure>
                                    <figcaption><i class="fa fa-id-card-o" aria-hidden="true"></i>&ensp;資格・経歴</figcaption>
                                    <ul>
                                        <li>リラクゼーショントレーナー整体学院卒業</li>
                                        <li>レイキヒーリング Level3</li>
                                        <li>バッチフラワーエッセンス 中級セラピスト</li>
                                        <li>シータヒーリング 基礎/応用</li>
                                        <li>オラクルカードリーディング</li>
                                    </ul>
                                    </figure>
                                        <span>ブログ : <a href="http://ameblo.jp/sayaka-kitamura/"
                                        onclick="popup(this.href,this.target,800,600,1);return false;">http://ameblo.jp/xxxxxx/</a></span>
                                   </p>
                               </div>
                           </div>
                           <div class="staff-in">
                               <div class="staff-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/staff02.jpg" alt="スタッフ紹介">
                                </div>
                                <div class="staff-intro">
                                    <h3 class="staff-nm-j">&nbsp;<br>小林よしこ</h3>
                                    <p class="staff-nm-r"><br>&nbsp;Yoshiko Kobayashi</p>
                                    <p class="staff-position">&nbsp;レイキヒーラー講師</p>
                                    <hr>
                                    <p class="staff-desc">
                                    <span>19xx年東京都生まれ。</span><br>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni </span><br>
                                    <span>in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                     sunt in culpa qui officia deserunt mollit anim id est laborum Sed ut perspiciatis unde omnis iste natus error sit
                                      voluptatem accusantiumlaudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                       beatae vitae dicta sunt explicabo.</span><br>
                                    <figure>
                                    <figcaption><i class="fa fa-id-card-o" aria-hidden="true"></i>&ensp;資格・経歴</figcaption>
                                    <ul>
                                        <li>レイキヒーリング Level3</li>
                                        <li>シータヒーリング 基礎/応用</li>
                                    </ul>
                                    </figure>
                                    <span>ブログ : <a href="http://ameblo.jp/sayaka-kitamura/" onclick="popup(this.href,this.target,800,600,1);return false;">http://ameblo.jp/xxxxxx/</a></span><br>
                                   </p>
                               </div>
                           </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();?>