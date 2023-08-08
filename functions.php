<?php

/**
 * PSR-4 class autoloader
 */
require_once 'vendor/autoload.php';
const TEXTDOMAIN = 'crispwp';
use RST\Theme;

$theme = Theme::getInstance();

/**
 * Example section
 */

use RST\Base\Structure\PostType;
use RST\Base\Structure\Taxonomy;

$services = new PostType('service');
$services->setLabels([
    'name' => __('Services',TEXTDOMAIN),
]);

$servicesCategory = new Taxonomy('service_category', 'services');
$servicesCategory->setLabels([
    'name' => __('Services categories',TEXTDOMAIN),
]);
$servicesCategory->uses($services);

/**
 * Rest resource checking
 */

use RST\Rest\Resources\TestData;

$theme->rest->setNamespace('rst/v1');
$theme->rest->addResource(new TestData());

/**
 * Register custom gutenberg block with backend logic
 */

use RST\Blocks\PostSnapshot;

$theme->gutenberg->setDependencies(['wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-data']);

try {

    $theme->gutenberg->register([
        'block'  => 'post-snapshot',
        'render' => [PostSnapshot::class, 'renderCallback'],
    ]);

} catch (Exception $e) {
    error_log($e->getMessage());
}

/**
 * Theme setup functions
 */

/**
 * Load scripts and styles
 * @link        http://developer.wordpress.org/reference/functions/wp_enqueue_script
 * @link        http://wp-kama.ru/function/wp_enqueue_script
 * @package     WordPress
 * @subpackage  RSV v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */
function rst_load_assets()
{
    $ver='';
    require_once 'src/ver.php';
    //--- Load scripts and styles only for frontend: -----------------------------
    if ( ! is_admin()) {
        // Styles
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/app.min.css',[],$ver);

        // Scripts
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false);
        wp_enqueue_script('jquery');
        wp_register_script('maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyA-GlnQYjXq7sR8eZSFqr5IDaMN3xGhyTg', false, null, false);
        wp_enqueue_script('maps');
        wp_enqueue_script('app', get_template_directory_uri() . '/assets/dist/app.min.js', ['jquery'], $ver, true);
        // AJAX
        wp_localize_script( 'app', 'myajax',
            array(
                'url' => admin_url('admin-ajax.php')
            )
        );
    }

}

add_action('wp', 'rst_load_assets');

require_once 'src/helpers.php';
require_once 'src/Hooks/user-creating.php';
define( 'ALLOW_UNFILTERED_UPLOADS', true );

add_action('acf/init', 'acf_op_init');
function acf_op_init() {
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> __('Theme General Settings',TEXTDOMAIN),
            'menu_title'	=> __('Theme Settings',TEXTDOMAIN),
            'menu_slug' 	=> __('theme-general-settings',TEXTDOMAIN),
            'capability'	=> __('edit_posts',TEXTDOMAIN),
            'redirect'		=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Header Settings',TEXTDOMAIN),
            'menu_title'	=> __('Header',TEXTDOMAIN),
            'parent_slug'	=> __('theme-general-settings',TEXTDOMAIN),
            'post_id'       => 'option-header',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Footer Settings',TEXTDOMAIN),
            'menu_title'	=> __('Footer',TEXTDOMAIN),
            'parent_slug'	=> __('theme-general-settings',TEXTDOMAIN),
            'post_id'       => 'option-footer',
        ));
    }
}



