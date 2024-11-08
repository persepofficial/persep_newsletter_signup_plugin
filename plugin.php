<?php
/**
* Plugin Name: Newsletter Sign Up
* Plugin URI: https://www.persep.co/
* Description: A Plugin that allows to add a newletter signup to a website
* Version: 0.1
* Author: Brandon Jones
* Author URI: https://www.persep.co/
**/



function display_custom_message($content) {
    if (is_single()) {  // Only on single post pages
        $custom_message = '<p>Thank you for reading! Visit our website for more.</p>';
        $content .= $custom_message;  // Append the message to the content
    }
    return $content;
}

// Hook into the 'the_content' filter to add the custom message
add_filter('the_content', 'display_custom_message');