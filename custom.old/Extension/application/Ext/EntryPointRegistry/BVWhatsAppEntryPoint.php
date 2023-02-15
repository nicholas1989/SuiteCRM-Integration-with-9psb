<?php
$entry_point_registry['sendWhatsAppSMS'] = array(
	'file' => 'BVWhatsApp/sendWhatsAppSMS.php',
	'auth' => true,
);
$entry_point_registry['receiveWhatsAppSMS'] = array(
	'file' => 'BVWhatsApp/receiveWhatsAppSMS.php',
	'auth' => false,
);
$entry_point_registry['whatsAppAction'] = array(
	'file' => 'BVWhatsApp/whatsAppAction.php',
	'auth' => true,
);

$entry_point_registry['masswhatsapp'] = array(
	'file' => 'modules/BV_WhatsApp/masswhatsapp.php',
	'auth' => true,
);
$entry_point_registry['checkwahistory'] = array(
	'file' => 'BVWhatsApp/whatsapp_history.php',
	'auth' => true,
);
$entry_point_registry['uploadImage'] = array(
	'file' => 'BVWhatsApp/uploadImage.php',
	'auth' => true,
);