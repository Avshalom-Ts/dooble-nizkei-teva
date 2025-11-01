<?php
/**
 * Theme functions and definitions
 */

// Theme setup
function home_work_setup()
{
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    // Add RTL language support
    add_theme_support('rtl-language-support');

    // Register navigation menu
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'home-work'),
    ));
}
add_action('after_setup_theme', 'home_work_setup');

// Enqueue styles and scripts
function home_work_scripts()
{
    // Option 1: Use modular CSS approach (recommended for development)
    $use_modular_css = true; // Set to false to use the original single CSS file

    if ($use_modular_css) {
        // Enqueue modular CSS files
        wp_enqueue_style('home-work-base', get_template_directory_uri() . '/assets/css/base.css', array(), '1.0.0');
        wp_enqueue_style('home-work-typography', get_template_directory_uri() . '/assets/css/typography.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-header', get_template_directory_uri() . '/assets/css/header.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-news-section', get_template_directory_uri() . '/assets/css/news-section.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-hero-section', get_template_directory_uri() . '/assets/css/hero-section.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-floating-buttons', get_template_directory_uri() . '/assets/css/floating-buttons.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-gallery-section', get_template_directory_uri() . '/assets/css/gallery-section.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-farmary-gallery', get_template_directory_uri() . '/assets/css/farmary-gallery-section.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-what-new', get_template_directory_uri() . '/assets/css/what-new-section.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-footer', get_template_directory_uri() . '/assets/css/footer.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-rtl', get_template_directory_uri() . '/assets/css/rtl.css', array('home-work-base'), '1.0.0');
        wp_enqueue_style('home-work-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('home-work-base'), '1.0.0');
    } else {
        // Option 2: Use original single CSS file
        wp_enqueue_style('home-work-style', get_stylesheet_uri(), array(), '1.0.0');
    }

    // Enqueue Google Fonts (fallback if CSS import doesn't work)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap', array(), null);

    // Enqueue main JavaScript file
    wp_enqueue_script('home-work-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'home_work_scripts');

// Add custom body classes
function home_work_body_classes($classes)
{
    if (!is_admin()) {
        $classes[] = 'home-work-theme';
    }
    return $classes;
}
add_filter('body_class', 'home_work_body_classes');

// Fallback menu function for when no menu is assigned
function home_work_fallback_menu()
{
    echo '<ul class="main-nav">';
    echo '<li>            <a href="' . esc_url(home_url('/insurance-branches/')) . '">ענפי ביטוח</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '">אודות</a></li>';
    echo '<li><a href="' . esc_url(home_url('/whats-new/')) . '">מה חדש?</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">שירות לקוחות</a></li>';
    echo '</ul>';
}

// Mobile fallback menu function
function home_work_mobile_fallback_menu()
{
    echo '<ul class="mobile-nav">';
    echo '<li><a href="' . esc_url(home_url('/insurance-branches/')) . '">ענפי ביטוח</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '">אודות</a></li>';
    echo '<li><a href="' . esc_url(home_url('/whats-new/')) . '">מה חדש?</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">שירות לקוחות</a></li>';
    echo '</ul>';
}

// Custom Walker for dropdown menus
class Home_Work_Walker_Nav_Menu extends Walker_Nav_Menu
{

    // Start the list before the elements are added
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    // End the list after the elements are added
    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start the element output
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Check if item has children
        $has_children = in_array('menu-item-has-children', $classes);

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');

        // Add dropdown arrow for parent items
        if ($has_children && $depth === 0) {
            $item_output .= ' <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="currentColor"><path d="M7 10l5 5 5-5z"/></svg>';
        }

        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // End the element output
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}

// Custom Walker for mobile menu
class Home_Work_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu
{

    // Start the list before the elements are added
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    // End the list after the elements are added
    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start the element output
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Check if item has children
        $has_children = in_array('menu-item-has-children', $classes);

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // End the element output
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}

// Add RTL body class for Hebrew content
function home_work_add_rtl_class($classes)
{
    // Check if current language is Hebrew or if site should default to RTL
    if (is_rtl() || get_locale() == 'he_IL') {
        $classes[] = 'rtl';
        $classes[] = 'hebrew';
    }
    return $classes;
}
add_filter('body_class', 'home_work_add_rtl_class');

// Force RTL for Hebrew content
function home_work_force_rtl()
{
    if (get_locale() == 'he_IL' || is_rtl()) {
        echo '<script>
            document.documentElement.setAttribute("dir", "rtl");
            document.documentElement.setAttribute("lang", "he");
        </script>';
    }
}
add_action('wp_head', 'home_work_force_rtl');
?>