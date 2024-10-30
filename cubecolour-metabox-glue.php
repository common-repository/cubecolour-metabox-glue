<?php
/*
Plugin Name: Metabox Glue
Plugin URI: http://cubecolour.co.uk/metabox-glue
Description: Glues the post/page editor metaboxes so they cannot be repositioned by dragging
Author: cubecolour
Version: 1.3.0
Author URI: http://cubecolour.co.uk/wp
License: GPL

  Copyright 2016-2022 Michael Atkins

  Licenced under the GNU GPL:

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * Add Links to the Plugins Table
 *
 */
function cc_metabox_glue_metalinks( $links, $file ) {

	$plugin = plugin_basename(__FILE__);

	if ( $file == $plugin ) {

		$title	= 'Cubecolour Metabox Glue';
		$plugslug	= 'cubecolour-metabox-glue';

		$supportlink	= 'https://wordpress.org/support/plugin/' . $plugslug;
		$donatelink		= 'http://cubecolour.co.uk/wp';
		$reviewlink		= 'https://wordpress.org/support/view/plugin-reviews/' . $plugslug . '#postform';
		$twitterlink	= 'http://twitter.com/cubecolour';
		$iconstyle		= 'style="-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-size: 14px;margin: 4px 0 -4px;"';

		return array_merge( $links, array(
			'<a href="' . $supportlink . '"> <span class="dashicons dashicons-lightbulb" ' . $iconstyle . 'title="' . $title . ' Support"></span></a>',
			'<a href="' . $twitterlink . '"><span class="dashicons dashicons-twitter" ' . $iconstyle . 'title="Follow Cubecolour on Twitter"></span></a>',
			'<a href="' . $reviewlink . '"><span class="dashicons dashicons-star-filled"' . $iconstyle . 'title="Rate and review ' . $title . '"></span></a>',
			'<a href="' . $donatelink . '"><span class="dashicons dashicons-heart"' . $iconstyle . 'title="Donate to the hardworking plugin author"></span></a>',
		) );
	}

	return $links;
}

add_filter( 'plugin_row_meta', 'cc_metabox_glue_metalinks', 10, 2 );


/**
 * Register the script
 *
 */
function cc_register_metabox_glue() {
	wp_register_script( 'metabox-glue', plugins_url( '/js/metabox-glue.js', __FILE__ ), 'jquery', '1.1.1', false );
}

add_action( 'admin_enqueue_scripts', 'cc_register_metabox_glue' );


/**
 * Check 'cc_metabox_glue' option & enqueue the script if TRUE
 * Other plugins will be able to set the 'cc_metabox_glue' option to FALSE to globally override this plugin
 */
function cc_check_metabox_glue() {

	if ( get_option( 'cc_metabox_glue' ) == TRUE ) {
		wp_enqueue_script( 'metabox-glue' );
	}
}


/**
 * Add the 'Unglue Metabox' Metabox for every registered post type
 *
 */
function metabox_glue_add_meta_box() {

	if ( get_option( 'cc_metabox_glue' ) == TRUE ) {

	$post_types = get_post_types( '', 'names' );

		foreach ( $post_types as $post_type ) {

			add_meta_box(
				'metabox_glue-metabox-glue',
				__( 'Metabox Glue', 'metabox_glue' ),
				'metabox_glue_html',
				$post_type,
				'side',
				'low'
			);
		}
	}

	add_action('admin_enqueue_scripts', 'cc_check_metabox_glue');
}

add_action( 'add_meta_boxes', 'metabox_glue_add_meta_box' );

function metabox_glue_html( $post) {
	echo '<a id="unglue-btn" title="Unglue Metaboxes" style="color:#202020;line-height:1;padding:4px 3px 0;margin-top:4px;" class="button dashicons-before dashicons-yes"></a><span id="unglue-message" style="display: inline-block;padding-top:8px;padding-left:6px">Metaboxes are glued</span>';
}


/**
 * On plugin activation: add the 'cc_metabox_glue' option
 *
 */
function cc_metabox_glue_plugin_activate() {
    update_option( 'cc_metabox_glue', TRUE );
}

register_activation_hook( __FILE__, 'cc_metabox_glue_plugin_activate' );


/**
 * On plugin deactivation: set the 'cc_metabox_glue' option to false
 *
 */
function cc_metabox_glue_plugin_deactivate() {
    update_option( 'cc_metabox_glue', FALSE );
}

register_deactivation_hook( __FILE__, 'cc_metabox_glue_plugin_deactivate' );
