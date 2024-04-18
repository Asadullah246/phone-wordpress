<?php
/*
 * Plugin Name: Custom Product Options
 * Description: This is description.
 * Author: Asadullah
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version: 5.9.3
 * Requires at least: 6.3
 * Requires PHP: 7.4
*/

// Plugin code will go here

// New plugin for showing total sales

add_action( 'woocommerce_single_product_summary', 'wp_product_sold_count', 11 );

// Function to display product sold count
function wp_product_sold_count() {
    global $product;
    $total_sold = $product->get_total_sales();
    // Check if total_sold is not empty
    if ( $total_sold || $total_sold === '0' ) {
        echo '<p>'. sprintf(__('Total Sold: %s','woocommerce'), $total_sold). '</p>';
    } else {
        echo '<p>'. __('Total Sold: 0','woocommerce'). '</p>';
    }
}
 

