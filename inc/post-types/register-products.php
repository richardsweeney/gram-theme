<?php

$product = new CPT(array(
    'post_type_name' => 'product',
    'singular'       => __('Product', 'shipyard'),
    'plural'         => __('Products', 'shipyard'),
    'slug'           => 'product'
),
array(
    'supports'  => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-products'
));

$product->register_taxonomy(array(
    'taxonomy_name' => 'product_tags',
    'singular'      => __('Product Tag', 'shipyard'),
    'plural'        => __('Product Tags', 'shipyard'),
    'slug'          => 'product-tag'
));

