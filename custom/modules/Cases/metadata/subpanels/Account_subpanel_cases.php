<?php
// created: 2022-02-17 09:28:54
$subpanel_layout['list_fields'] = array (
  'case_number' => 
  array (
    'vname' => 'LBL_LIST_NUMBER',
    'width' => '6%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '50%',
    'default' => true,
  ),
  'status' => 
  array (
    'vname' => 'LBL_LIST_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'priority' => 
  array (
    'vname' => 'LBL_LIST_PRIORITY',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'vname' => 'LBL_LIST_DATE_CREATED',
    'width' => '15%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Cases',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Cases',
    'width' => '5%',
    'default' => true,
  ),
);