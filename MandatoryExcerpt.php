<?php
/**
 * Plugin Name: Mandatory Excerpt
 * Description: Ensure that a excerpt is filled in at all times.
 * Author: Raj
 *
 *
 */

class MandatoryExcerpt {

    public function init() {
        add_action("load-new-page.php", array($this, "page_new"));
    }

    function page_new() {
        wp_register_script('excerpt-script', plugin_dir_url(__FILE__). 'excerpt.js');
        wp_enqueue_script('excerpt-script');
    }
}

$instance = new MandatoryExcerpt();

add_action("admin_enqueue_scripts", array($instance, 'page_new'));
add_action("admin_init", array($instance, "init"));