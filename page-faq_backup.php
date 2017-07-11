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
                        <dl>
												<?php
												 $args = array(
														 'post_type' => 'faq',
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
														<!-- カスタムフィールドテンプレート使用                            -->
														<!--                                                               -->
														<!-- データーベースからSELECT文を使用しID順に直を取得
														     ID順に取得できない時に対処方 -->
														<!-- ************************************************************* -->
												        <?php
												        		//post_idをKeyにしてデータを取得
												            global $wpdb;
												            $query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
												            $cf = $wpdb->get_results($query, ARRAY_A);

												            $question = array();
												            $answer_simple = array();
												            $answer_detail = array();

												            foreach( $cf as $row ){
												                if( $row['meta_key'] == "question" ){
												                    array_push( $question, $row['meta_value'] );
												                }
												                if( $row['meta_key'] == "answer_simple" ){
												                    array_push( $answer_simple, $row['meta_value'] );
												                }
												                if( $row['meta_key'] == "answer_detail" ){
												                    array_push( $answer_detail, $row['meta_value'] );
												                }
												            }
												            //配列の数取得
												            $cnt = count( $question );
												            echo "カウント：".$cnt;
												        ?>
												        <!-- 配列の数分繰り返し -->
												        <?php for ($i=0; $i < $cnt; $i++): ?>

												            <!-- 値が存在した時 -->
												            <?php if($question[$i] !=''): ?>

																		<!-- データをHTMLタグにセット -->
					                            <dt><?php echo $question[$i]; ?></dt>
					                            <dd><span class="strong"><?php echo $answer_simple[$i]; ?></span><br>
					                            		<?php echo $answer_detail[$i]; ?>
																			</dd>

												            <?php endif; ?>
												        <?php endfor; ?>
													<?php endforeach; ?>
											 <?php endif; ?>
                        </dl>
                    </div>
               </section>
            </div>
        </div>
    </div>
<?php get_footer();?>