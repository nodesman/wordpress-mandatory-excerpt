<?php
/**
 * Plugin Name: Mandatory Excerpt
 * Description: Ensure that a excerpt is filled in at all times.
 * Author: Raj
 *
 *
 */

class MandatoryExcerpt {

    function page_new() {
        $file = basename($_SERVER['SCRIPT_FILENAME']);

        if (!in_array($file, array('post.php', 'post-new.php'))) {
            return;
        }

        wp_register_script('excerpt-script', plugin_dir_url(__FILE__). 'excerpt.js');
        wp_enqueue_script('excerpt-script');
    }
}

$instance = new MandatoryExcerpt();
add_action("admin_enqueue_scripts", array($instance, 'page_new'));