<?php
/*
Plugin Name: WooCommerce Minimum Quantity
Description: Plugin para establecer un valor mínimo de cantidad para todos los productos en WooCommerce.
Version: 1.0
Author: Rene
*/

function add_custom_min_quantity_admin_menu()
{
    add_submenu_page(
        'woocommerce',
        'min_quantity_plugin',
        'custom_min_quantity',
        'manage_options',
        'custom-min-quantity',
        'render_custom_min_quantity_page'
    );

}

add_action('admin_menu', 'add_custom_min_quantity_admin_menu');

function render_custom_min_quantity_page()
{
    if (!current_user_can('manage_options')) {
        return;
    }
    //actualizando el valor minimo si hay envio del formulario
    if (isset($_POST['min_quantity'])) {
        update_option('custom_min_quantity_value', intval($_POST['min_quantity']));
    }
    //obteniendo el valor actual
    $current_value = get_option('custom_min_quantity_value', 1);

    ?>
    <div>
        <form action="" method="POST">
            <label for="min_quantity">Set custom min quantity</label><br />
            <input type="number" name="min_quantity" id="min_quantity" value="<?php echo $current_value ?>" min='1'>
            <?php submit_button(); ?>
        </form>
    </div>;
    <?php

}

function custom_min_quantity_args($args, $product)
{
    $min_quantity = get_option('custom_min_quantity_value', 1);
    $args['min_value'] = $min_quantity;
    return $args;
}

add_filter('woocommerce_quantity_input_args', 'custom_min_quantity_args', 10, 2);

function custom_min_product_quantity($min, $product)
{
    $min_quantity = get_option('custom_min_quantity_value', 1);
    return max($min, $min_quantity);
}

add_filter('woocommerce_quantity_input_min', 'custom_min_product_quantity', 10, 2);