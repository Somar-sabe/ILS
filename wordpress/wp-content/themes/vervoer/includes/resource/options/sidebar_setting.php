<?php

return array(

    'title'         => esc_html__( 'Custom Sidebar Settings', 'vervoer' ),
    'id'            => 'sidebar_setting',
    'desc'          => '',
    'icon'          => 'dashicons dashicons-admin-page',
    'fields'        => array(
        array(
            'id' => 'custom_sidebar_name',
            'type' => 'multi_text',
            'title' => esc_html__('Dynamic Custom Sidebar', 'vervoer'),
            'desc' => esc_html__('This section is used to create custom sidebar', 'vervoer')
            ),
    ),
);

