<?php
/*
 * Plugin Name:       persep.co Modal Patterns
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           0.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://persep.co/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 * Requires Plugins:  
 */

//  If accessed directly, abort
if ( ! defined( 'WPINC' ) ) {
    die;
}

//  Create Patteren Category
function wpdocs_block_pattern_category() {
	register_block_pattern_category( 
        'wpdocs-patterns', 
        array(
            'label' => __( 'persep.co Modal Patterns', 'text-domain' )
        ) 
    );
}

add_action( 'init', 'wpdocs_block_pattern_category' );