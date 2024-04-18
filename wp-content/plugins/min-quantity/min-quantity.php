<?php
/*
Plugin Name: Custom Minimum Quantity
Description: Plugin to stablish a minimun quantity of products to buy
Version: 1.5
Author: Rene
*/
/**
 * Validate product quantity when added to cart.
 */



//adding the custom tab
add_filter('woocommerce_settings_tabs_array', 'custom_add_minimun_quantity_tab', 50);

function custom_add_minimun_quantity_tab($settings_tab)
{
    $settings_tab['custom_minimun_quantity_tab'] = __('Min quantity', 'custommin');
    return $settings_tab;
}
add_action('woocommerce_settings_tabs_custom_minimun_quantity_tab', 'custom_minimun_quantity_tab');
function custom_minimun_quantity_tab()
{
    woocommerce_admin_fields(custom_minimun_quantity_get_settings());
}
function custom_minimun_quantity_get_settings()
{
    $settings = array(
        'section_title' => array(
            'name' => __('Custom min quantity', 'custommin'),
            'desc' => '',
            'type' => 'title',
            'id' => 'min_quantity_title'
        ),
        'min_quantity_input' => array(
            'name' => __('Set min quantity', 'custommin'),
            'desc' => '',
            'type' => 'number',
            'value' => get_option('min_quantity'),
            'id' => 'min_quantity'
        ),
        'section_end' => array(
            'type' => 'sectionend',
            'id' => 'min_quantity_section_end'
        )
    );
    return apply_filters('wc_custom_minimun_quantity_tab_settings', $settings);
}

add_action('woocommerce_update_options_custom_minimun_quantity_tab', 'min_update_settings');
function min_update_settings()
{
    woocommerce_update_options(custom_minimun_quantity_get_settings());
}
//end add custom tab


//validating quantity added to cart
function custom_add_to_cart_validate_quantity($passed, $product_id, $quantity)
{
    global $woocommerce;
    $passed = true;

    // Test quantity.
    if (get_option('min_quantity') > $quantity) {

        $passed = false;

    }
    add_action('woocommerce_product_thumbnails', 'printthis');
    return $passed;
}
//warning msg
function printthis()
{
    $current_value = get_option('min_quantity');
    echo "<p style=\"color:red\">The order must be at least $current_value items
</p>";
}
// Sets error message.
add_action('woocommerce_product_thumbnails', 'printthis');

add_filter('woocommerce_add_to_cart_validation', 'custom_add_to_cart_validate_quantity', 10, 3);

//checks that the products quantity matches the setting
function minimum_order_check()
{
    $current_value = get_option('min_quantity');
    $cart_content = WC()->cart->cart_contents;
    $qty = 0;
    if (is_array($cart_content)) {
        foreach ($cart_content as $product) {

            $qty += $product['quantity'];

        }
    }

    if ($qty < $current_value) {
        return false;
    }

    return true;

}

//msg shown when checkout doesnt match requirements
add_action('storefront_page', 'minimum_order_message');

function minimum_order_message()
{

    $is_valid = minimum_order_check();
    if (!$is_valid) {
        printthis();
    }
}
//


//if minimum_order_check returns false redirects to cart
add_action('template_redirect', 'minimum_order_validation_redirect');
function minimum_order_validation_redirect()
{

    if (is_checkout()) {
        $is_valid = minimum_order_check();
        if (!$is_valid) {
            wp_safe_redirect(get_permalink(get_option('woocommerce_cart_page_id')));
            exit;
        }
    }

}

//setting minimun input quantity
add_filter('woocommerce_quantity_input_args', 'woocommerce_quantity_changes', 10, 2);

function woocommerce_quantity_changes($args, $product)
{
    if (!is_cart()) {
        $args['input_value'] = get_option('min_quantity');
        $args['min_value'] = get_option('min_quantity');

    } else {
        $args['min_value'] = get_option('min_quantity');
    }
    return $args;
}



