<?php
return array(
	'title'      => 'Vervoer Setting',
	'id'         => 'vervoer_meta',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array( 'page', 'post', 'vervoer_project', ),
	'sections'   => array(
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/metabox/header.php',
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/metabox/banner.php',
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/metabox/sidebar.php',
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/metabox/footer.php',
	),
);