<?php

function mytheme_setup()
{
	add_theme_support('wp-block-styles');
	add_theme_support('responsive-embeds');
	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
	add_theme_support('title-tag');
	add_theme_support('html5', array(
		'style',
		'script'
	));

	add_theme_support('align-wide');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');

function add_css_files()
{	
	wp_enqueue_style('ress-css', get_template_directory_uri() . '/css/ress.css', "", '20210715');
	
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array("jquery"), '1.0.0', true);
	wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', "", '20210715');

	wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css', "", '20210715');
	wp_enqueue_style('footer-css', get_template_directory_uri() . '/css/footer.css', "", '20210715');

	//if(is_front_page()) {
		wp_enqueue_style('top-css', get_template_directory_uri() . '/css/top.css', "", '20210715');
	//}

	if(is_archive()) {
		wp_enqueue_style('archive-css', get_template_directory_uri() . '/css/archive.css', "", '20210715');
	}
}
add_action('wp_enqueue_scripts', 'add_css_files');

global $wp_rewrite;
$wp_rewrite->flush_rules();

function cut_plugin_css()
{
	//wp_deregister_style("mw-wp-form");
	//wp_deregister_style("rtoc_style");
}
add_action("wp_enqueue_scripts", "cut_plugin_css", 100);

add_filter('mwform_content_wpautop_mw-wp-form-7', '__return_false');

function imagepassshort($arg)
{
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	return $content;
}
add_action('the_content', 'imagepassshort');

/*
function my_custom_init2()
{
	//カスタム投稿「work」の設定
	register_post_type('work', array(
		'label' => 'Work',
		'public' => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
		'menu_position' => 5,
		'has_archive' => true
	));

	//カテゴリタイプの設定（カスタムタクソノミーの設定）
	register_taxonomy(
		'workcat', //カテゴリー名（任意）
		'work', //カスタム投稿名
		array(
			'hierarchical' => true, //カテゴリータイプの指定
			'update_count_callback' => '_update_post_term_count',
			//ダッシュボードに表示させる名前
			'label' => 'Workのカテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);
	//タグタイプの設定（カスタムタクソノミーの設定）
	register_taxonomy(
		'worktag', //タグ名（任意）
		'work', //カスタム投稿名
		array(
			'hierarchical' => true, //タグタイプの指定（階層をもたない）
			'update_count_callback' => '_update_post_term_count',
			//ダッシュボードに表示させる名前
			'label' => 'Workタグ',
			'public' => true,
			'show_ui' => true
		)
	);
}
add_action('init', 'my_custom_init2');


// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}*/