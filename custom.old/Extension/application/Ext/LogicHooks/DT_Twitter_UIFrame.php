<?php

if (!isset($hook_array) || !is_array($hook_array))
{
    $hook_array = array();
}
if (!isset($hook_array['after_ui_frame']) || !is_array($hook_array['after_ui_frame']))
{
    $hook_array['after_ui_frame'] = array();
}

$hook_array['after_ui_frame'][] = Array(100, 'DT Twitter Connector', 'modules/DT_Twitter_Integration/DT_Twitter_UIFrame.php', 'DT_Twitter_Class', 'DT_Twitter_Func');