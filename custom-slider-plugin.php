<?php
/**
 * Plugin Name: Custom Slider Plugin
 * Plugin URI:  www.tanjila-khan.com
 * Description: A responsive and simple custom slider plugin
 * Version:     1.0.0
 * Author:      Tanjila Khan
 * Author URI:  www.facebook.com
 * Text Domain: tanjila
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Requires at least: 5.4
 * Requires PHP: 7.0
 * 
 **/

if (!defined('ABSPATH')) {
    exit;
}

// TO rcegister the shortcode
function custom_slider_shortcode() {
    ob_start(); ?>
    <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item active">
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid" src="<?php echo plugin_dir_url(__FILE__); ?>images/image1.jpg" alt="Image 1">
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid" src="<?php echo plugin_dir_url(__FILE__); ?>images/image2.jpg" alt="Image 2">
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid" src="<?php echo plugin_dir_url(__FILE__); ?>images/image3.jpg" alt="Image 3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid" src="<?php echo plugin_dir_url(__FILE__); ?>images/image4.jpg" alt="Image 4">
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid" src="<?php echo plugin_dir_url(__FILE__); ?>images/image5.jpg" alt="Image 5">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_slider', 'custom_slider_shortcode');

// Enqueue scripts and styles
function custom_slider_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    
    // Custom CSS for slider
    wp_enqueue_style('custom-slider-css', plugin_dir_url(__FILE__) . 'css/custom-slider.css');
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
    
    // Custom JS
    wp_enqueue_script('carousel-js', plugin_dir_url(__FILE__) . 'js/carousel.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_slider_enqueue_scripts');
