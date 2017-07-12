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
                <section id="QandA">
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

												    	<?php
																//繰り返しグループの値を取得
													    	$cf = get_post_custom( $post->ID );
													    	$question = $cf['question'];
													    	$answer_simple = $cf['answer_simple'];
													    	$answer_detail = $cf['answer_detail'];
													    	$field0 = $cf['field0'];
													    	$length = $field0[0];
													    	?>

												    	<?php if ( !empty( $field0 ) ): ?>
																<?php
														    		//配列のデータをHTMLタグにセット
														    		for( $i = 0; $i < $length; $i++ ){

														    			if ( trim( $question[$i] ) !== "") {
															    			echo "<dt>".$question[$i] ."</dt>";
															    			echo "<dd><span class='strong'>". $answer_simple[$i] . "</span><br>";
															    			echo $answer_detail[$i] ."</dd>";
														    			}

																    }
																?>
															<?php endif; ?>
													<?php endforeach; ?>
											 <?php endif; ?>
                        </dl>
                    </div>
               </section>
            </div>
        </div>
    </div>
<?php get_footer();?>