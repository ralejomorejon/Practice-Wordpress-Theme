<?php


/*
Plugin Name: Best Deal Stamp
Description: This plugins adds a discount on a product detail if the customer has at least one previus
buy of that same product
Version: 0.0.1
Author: Rene

*/

function check_cart_for_discount($cart)
{


    if (!is_user_logged_in()) {
        return;
    }

    $user_id = get_current_user_id();
    $cart_items = $cart->get_cart();

    // Get completed orders of the user
    $orders = wc_get_orders([
        'customer_id' => $user_id,
        'status' => ['completed'],
        'return' => 'ids',
        'limit' => -1,
    ]);


    // Make an array with the products that have been buyied before in a buy bigger than 15$
    $eligible_product_ids = [];
    foreach ($orders as $order_id) {
        $order = wc_get_order($order_id);
        if ($order->get_total() >= 15) {
            foreach ($order->get_items() as $item) {
                $product_id = $item->get_product_id();
                $eligible_product_ids[] = $product_id;

            }
        }
    }

    // Check if any of the products in the cart apply for the discount
    foreach ($cart_items as $cart_item_key => $cart_item) {
        $product_id = $cart_item['product_id'];
        if (in_array($product_id, $eligible_product_ids)) {
            // Apply the discount
            $product = wc_get_product($product_id);
            $price = $product->get_price();
            $discount = $price * 0.1;

            // Adjust the price once in the cart
            $cart->cart_contents[$cart_item_key]['data']->set_price($price - $discount);
        }
    }




}

add_action('woocommerce_cart_calculate_fees', 'check_cart_for_discount');


function customer_qualifies_for_discount($product_id, $user_id)
{
    $order_args = array(
        'customer_id' => $user_id,
        'status' => array('completed'),
        'return' => 'ids',
        'limit' => -1,
    );

    $orders = wc_get_orders($order_args);

    foreach ($orders as $order_id) {
        $order = wc_get_order($order_id);
        if ($order->get_total() >= 15) {
            foreach ($order->get_items() as $item) {
                if ($item->get_product_id() == $product_id) {
                    return true;
                }
            }
        }
    }

    return false;
}


function show_discount_advice()
{

    if (!is_product()) {
        return;
    }


    if (!is_user_logged_in()) {
        return;
    }


    global $product;
    $product_id = $product->get_id();


    $user_id = get_current_user_id();


    if (customer_qualifies_for_discount($product_id, $user_id)) {
        ?>
        <p style="color: green;"><?= __('You will have a 10% discount at the purchase of this product'); ?></p>
        <?php
    }

}
;

add_action('woocommerce_single_product_summary', 'show_discount_advice', 25);
