<?php

global $sugar_version;

$admin_option_defs=array();

    
$admin_option_defs['Administration']['dt_twitter_config']= array('','LBL_DTTWITTER_LICENSE_CONFIGURATION','LBL_DTTWITTER_LICENSE_MESSAGE','./index.php?module=DT_Twitter_Integration&action=dt_config');

$admin_option_defs['Administration']['dt_twitter_license']= array('','LBL_DTTWITTER_LICENSE_TITLE','LBL_DTTWITTER_LICENSE','./index.php?module=DT_Twitter_Integration&action=license');

$admin_group_header[]= array('LBL_DTTWITTER','',false,$admin_option_defs, '');
