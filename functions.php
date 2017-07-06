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
