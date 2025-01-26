<?php
/**
 * Plugin Name: Elementor Widget Paths
 * Description: Displays the file paths of all Elementor widgets, including those from Elementor core and third-party plugins.
 * Version: 1.0.0
 * Author: Pratik Lamichhane
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action( 'admin_menu', 'ewp_add_admin_menu' );

function ewp_add_admin_menu() {
    add_menu_page(
        'Elementor Widget Paths',
        'Elementor Widget Paths',
        'manage_options',
        'elementor-widget-paths',
        'ewp_display_widget_paths',
        'dashicons-list-view',
        30
    );
}

function ewp_display_widget_paths() {
    if ( ! did_action( 'elementor/loaded' ) ) {
        echo '<div class="notice notice-error"><p>Elementor is not active. Please activate Elementor to use this plugin.</p></div>';
        return;
    }

    $widget_manager = \Elementor\Plugin::instance()->widgets_manager;
    $widgets        = $widget_manager->get_registered_widgets();

    echo '<div class="wrap">';
    echo '<h1>Elementor Widget Paths</h1>';
    echo '<table class="widefat fixed striped">';
    echo '<thead><tr><th>Widget Name</th><th>File Path</th></tr></thead>';
    echo '<tbody>';

    foreach ( $widgets as $widget_name => $widget ) {
        $reflection = new ReflectionClass( $widget );
        $file_path  = $reflection->getFileName();

        echo '<tr>';
        echo '<td>' . esc_html( $widget_name ) . '</td>';
        echo '<td>' . esc_html( $file_path ) . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
