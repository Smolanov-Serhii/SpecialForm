<?php

$sep_id  = 300;
$section = 'header_elements';

Kirki::add_field( 'thehanger', array(
    'type'        => 'toggle',
    'settings'    => 'header_user_account',
    'label'       => esc_attr__( 'Account', 'the-hanger' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
    'active_callback'   => array($mega_header)
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'toggle',
    'settings'    => 'header_wishlist',
    'label'       => esc_attr__( 'Wishlist', 'the-hanger' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
    'active_callback'   => array($mega_header)
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'toggle',
    'settings'    => 'header_cart',
    'label'       => esc_attr__( 'Cart', 'the-hanger' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
    'active_callback'   => array($mega_header)
) );

Kirki::add_field( 'thehanger', array(
    'type'     => 'textarea',
    'settings' => 'header_cart_info',
    'label'    =>  esc_attr__( 'Bottom Mini Cart Text', 'the-hanger'),
    'section'  => $section,
    'default'  => esc_html__( 'Free shipping on all orders over $75', 'the-hanger' ),
    'priority' => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'header_cart',
            'operator' => '==',
            'value'    => true,
        ),
        $mega_header
    ),
) );
