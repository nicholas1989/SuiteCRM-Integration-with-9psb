<?php 
$admin_option_defs = array();
$admin_option_defs['Administration']['license'] = array(
	'helpInline',
	'LBL_BVWA_LICENSEADDON',
	'LBL_BVWA_LICENSE',
	'index.php?module=BV_WhatsApp&action=license',
	'connectors',
);
$admin_option_defs['Administration']['bv_whats_app'] = array(
	'helpInline',
	'LBL_MANAGE_BVWA',
	'LBL_MANAGE_BVWA_SETTINGS',
	'./index.php?module=BV_WhatsApp&action=settings',
	'system-settings',
);
$admin_group_header[] = array(
	'LBL_MANAGE_BVWA',
	'',
	false,
	$admin_option_defs,
	'',
);
?>