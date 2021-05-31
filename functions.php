<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');

    //タイトル出力
    function wpbeg_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'wpbeg_title' );

    function wpbeg_script() {
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array() );
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '5.15.1' );
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.15.1/css/all.css', array(), '5.15.1' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

    function add_scripts() { 
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'drawer_menu', get_template_directory_uri() . '/js/drawer_menu.js', '', '1.0.0', false );
    }
    add_action('wp_print_scripts', 'add_scripts');

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
