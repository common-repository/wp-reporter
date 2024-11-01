<?php
/**
 * @package WP Reporter
 * Plugin Name: WP Reporter
 * Plugin URI: https://wordpress.org/plugins/wp-reporter/
 * Description: Counts and reports WordPress resources - Posts, Pages, Comments, Users, Categories.
 * Author: Bimal Poudel
 * Version: 1.0.0
 * Author URI: http://bimal.org.np/
 */

add_action("admin_menu", "print_reports_menu");

/**
 * Menu management
 */
function print_reports_menu()
{
	add_menu_page("WP Resoruce Reporter", "WP Reporter", "manage_options", basename(dirname(__FILE__)), "print_reports_page");
}

/**
 * Fetch reports
 */
function print_reports_page()
{
	require_once "includes/all.php";
}

/**
 * Report posts
 */
function wpreporter_report_posts()
{
	$count_posts = wp_count_posts();
	$total_posts = 0;
	foreach($count_posts as $index => $total)
	{
		$total_posts += $total;
	}

	require_once "includes/posts.php";
}

/**
 * Report pages
 */
function wpreporter_report_pages()
{
	$count_pages = wp_count_posts("page");
	$total_pages = 0;
	foreach($count_pages as $index => $total)
	{
		$total_pages += $total;
	}

    require_once "includes/pages.php";
}

/**
 * Report post comments
 */
function wpreporter_report_comments()
{
	$comments_count = wp_count_comments();
	require_once "includes/pages.php";
}

/**
 * Report users
 */
function wpreporter_report_users()
{
	$users = count_users();
	require_once "includes/users.php";
}

/**
 * Report categories
 */
function wpreporter_report_categories()
{
	$args = array(
		'parent' => 0,
		'hide_empty' => 0
	);
	$categories = get_categories( $args );
	$total_categories = count( $categories );

	require_once "includes/categories.php";
}

/**
 * Report tags
 * @see https://codex.wordpress.org/Function_Reference/get_tags
 */
function wpreporter_report_tags()
{
	$tags = get_tags();
	require_once "includes/tags.php";
}