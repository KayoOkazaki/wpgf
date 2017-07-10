<?php
/*
 * ナビメニュー機能
 */
register_nav_menu('mainnavi', 'メインナビ');

/*
 * jQueryスクリプトファイル読込
 */
function my_scripts() {
	wp_enqueue_script( 'script', get_template_directory_uri().'/js/script.js', array('jquery'));
	wp_enqueue_script( 'jquery.inview', get_template_directory_uri().'/js/jquery.inview.js', array('jquery'));
	wp_enqueue_script( 'jquery.dropdown', get_template_directory_uri().'/js/jquery.dropdown.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

/*
* アイキャッチ画像の有効化
*/
add_theme_support('post-thumbnails');

/*
 * カスタム投稿タイプ：新着情報
 */
register_post_type(
		'news',
		array(
				'labels' => array(
						'name' => '新着情報',
						'add_new_item' => '追加：新着情報',
						'edit_item' => '編集：新着情報'
				),
				'public' => true,
				'supports' => array('title', 'editor','thumbnail')
		)
);
/*
 * カスタム投稿タイプ：体のお悩み記事
 */
register_post_type(
		'trouble',
		array(
				'labels' => array(
						'name' => '体のお悩み記事',
						'add_new_item' => '追加：体のお悩み記事',
						'edit_item' => '編集：体のお悩み記事'
				),
				'public' => true,
				'query_var' => true,
				'supports' => array('title', 'editor','thumbnail')
		)
);
/*
 * カスタム投稿タイプ：お客様の声（カスタムテンプレート使用）
 */
register_post_type(
		'voice',
		array(
				'labels' => array(
						'name' => 'お客様の声',
						'add_new_item' => '追加：お客様の声',
						'edit_item' => '編集：お客様の声'
				),
				'public' => true,
				'supports' => array('title', 'editor','thumbnail')
		)
);
/*
 * カスタム投稿タイプ：施術料金メニュー（カスタムテンプレート使用）
 */
register_post_type(
		'pricelist1',
		array(
				'labels' => array(
						'name' => '施術料金メニュー',
						'add_new_item' => '追加：施術料金メニュー',
						'edit_item' => '編集：施術料金メニュー'
				),
				'public' => true,
				'supports' => array('title', 'editor','thumbnail')
		)
);
/*
 * カスタム投稿タイプ：その他料金メニュー（カスタムテンプレート使用）
 */
register_post_type(
		'pricelist2',
		array(
				'labels' => array(
						'name' => 'その他料金メニュー',
						'add_new_item' => '追加：その他料金メニュー',
						'edit_item' => '編集：その他料金メニュー'
				),
				'public' => true,
				'supports' => array('title', 'editor','thumbnail')
		)
		);
/*
 * カスタム投稿タイプ：よくある質問（カスタムテンプレート使用）
 */
register_post_type(
		'faq',
		array(
				'labels' => array(
						'name' => 'よくある質問',
						'add_new_item' => '追加：よくある質問',
						'edit_item' => '編集：よくある質問'
				),
				'public' => true,
				'supports' => array('title', 'editor','thumbnail')
		)
);