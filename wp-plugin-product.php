<?php

/**
 * Plugin Name: WordPress Plugin Product.
 * Description: Example on how to integrate the Plugin Library inside of a product.
 */

class Plugin_Product {

    public function __construct() {
        include 'inc/wp-plugin-library/wp-plugin-library.php';
        add_action( 'plugins_loaded', array( $this, 'init' ) );
    }

    public function init() {
        $library = new Plugin_Library();
        $library->load();
    }
}

new Plugin_Product();