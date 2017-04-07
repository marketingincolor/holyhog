<?php

@ini_set( 'upload_max_size' , '10M' );
@ini_set( 'post_max_size', '10M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'post-thumbnails' );
add_action( 'wp_enqueue_scripts', 'holyhog_load_js' );
add_action( 'init', 'register_menus' );


define("MENU_ID", 769);

function holyhog_load_js()
{
	holyhog_register_scripts();
	holyhog_enqueue_scripts();
}

function holyhog_register_scripts()
{
	wp_register_script( 'hh-instafeed', get_template_directory_uri() . '/dist/assets/js/vendor/instafeed.min.js', array(), time(), true );
	wp_register_script( 'hh-controller-site', get_template_directory_uri() . '/dist/assets/js/controllers/site.min.js', array( 'jquery' ), time(), true );
	wp_register_script( 'hh-controller-home', get_template_directory_uri() . '/dist/assets/js/controllers/home.min.js', array( 'jquery' ), time(), true );
	wp_register_script( 'hh-fitvids', get_template_directory_uri() . '/dist/assets/js/vendor/jquery.fitvids.min.js', array( 'jquery'), time(), true );
	wp_register_script( 'hh-controller-community', get_template_directory_uri() . '/dist/assets/js/controllers/community.min.js', array( 'jquery', 'hh-instafeed', 'hh-fitvids' ), time(), true );
}

function holyhog_enqueue_scripts()
{
	wp_enqueue_script( 'hh-controller-site' );

	if( is_front_page() ) {
		wp_enqueue_script( 'hh-controller-home' );
		wp_enqueue_script( 'cookie', get_template_directory_uri() . '/dist/assets/js/vendor/js.cookie.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/assets/js/main.js', array( 'jquery' ), time(), true );
	}

	if( is_page( "community" ) ) {
		wp_enqueue_script( "hh-instafeed" );
		wp_enqueue_script( "hh-fitvids" );
		wp_enqueue_script( "hh-controller-community" );
	}


}

function register_menus() 
{
	register_nav_menu( 'global-nav', __( 'Global Nav' ) );
}

function holyhog_display_comment( $comment )
{
	$display = "<li>";
	$display .= "<div class='comment-avatar'>" . get_avatar( $comment, 240 ) . "</div>";
	$display .= "<div class='comment-content'>";
	$display .= "<span class='comment-meta'>On " . get_comment_date( 'm.d.Y', $comment->comment_ID ) . " ";
	$display .= $comment->comment_author_url != "" ? "<a href='{$comment->comment_author_url}' target='_blank'>{$comment->comment_author}</a>" : $comment->comment_author;
	$display .= " said:</span>";
	$display .= "<div class='comment-body'>{$comment->comment_content}</div>";
	$display .= "</div></li>";

	echo $display;
}

function get_comment_field()
{
	return "
		<p class='comment-content-field'>
			<label for='comment'>Comments / Details:</label>
			<textarea type='text' class='comment' id='comment' name='comment'></textarea>
		</p>
	";
}

function get_comment_fields()
{
	$fields = array(
		"author" 	=> get_comment_author_field(),
		"email"		=> get_comment_email_field(),
		"url"		=> get_comment_url_field()
	);

	return $fields;
}

function get_comment_author_field()
{
	return "
		<p class='comment-field comment-author-field'>
			<label for='author'>Name:</label>
			<input type='text' class='author' id='author' name='author'>
		</p>
	";
}

function get_comment_email_field()
{
	return "
		<p class='comment-field comment-email-field'>
			<label for='email'>Email:</label>
			<input type='text' class='email' id='email' name='email'>
		</p>
	";
}

function get_comment_url_field()
{
	return "
		<p class='comment-field comment-url-field'>
			<label for='url'>Website:</label>
			<input type='text' class='url' id='url' name='url'>
		</p>
	";
}

// HIDE THE ADMIN BAR
add_filter('show_admin_bar','__return_false');

