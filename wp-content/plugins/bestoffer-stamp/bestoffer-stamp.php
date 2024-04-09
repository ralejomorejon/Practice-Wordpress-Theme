<?php


/*
Plugin Name: Best Deal Stamp
Description: This plugins adds a discount on a product detail if the customer has at least one previus
buy of that same product
Version: 0.0.1
Author: Rene

*/

function show_discount_badge()
{
    // Lógica para verificar si el usuario cumple con los requisitos para mostrar el sello
    if (is_product() && is_user_logged_in() && customer_qualifies_for_discount()) {
        echo '<div class="discount-badge" style="color:#f65">Usted tendrá un descuento del 10% en su próxima compra de este producto.</div>';
    }
}

add_action('woocommerce_single_product_summary', 'show_discount_badge', 25);

// Verificar si el usuario ha comprado el producto anteriormente en una compra de al menos $15
function customer_qualifies_for_discount()
{
    global $product, $woocommerce;

    $user_id = get_current_user_id();
    $product_id = $product->get_id();

    $order_args = array(
        'customer_id' => $user_id,
        'status' => array('completed'),
        'return' => 'ids',
        'limit' => -1,
    );

    $orders = wc_get_orders($order_args);

    foreach ($orders as $order_id) {
        $order = wc_get_order($order_id);
        $items = $order->get_items();
        foreach ($items as $item) {
            $product = $item->get_product();
            if ($product_id && $product->get_price() >= 2) {
                return true;
            }
        }
    }

    return false;
}

// Aplicar descuento en el carrito si el producto califica
function apply_discount_on_cart($cart)
{
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }

    if (!is_user_logged_in()) {
        return;
    }

    foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        $product_id = $cart_item['product_id'];
        if (customer_qualifies_for_discount()) {
            $product = wc_get_product($product_id);
            $discount_amount = $product->get_price() * 0.1; // 10% de descuento
            $cart->add_fee(__('Descuento del 10%', 'woocommerce'), -$discount_amount);
        }
    }
}

add_action('woocommerce_cart_calculate_fees', 'apply_discount_on_cart');