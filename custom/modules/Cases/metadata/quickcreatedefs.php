<?php
$viewdefs ['Cases'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'priority',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
          1 => 'status',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'service_chanel_c',
            'studio' => 'visible',
            'label' => 'LBL_SERVICE_CHANEL',
          ),
          1 => 
          array (
            'name' => 'escalate_c',
            'studio' => 'visible',
            'label' => 'LBL_ESCALATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'service_interest_c',
            'studio' => 'visible',
            'label' => 'LBL_SERVICE_INTEREST',
          ),
          1 => 
          array (
            'name' => 'product_type_c',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_TYPE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cat_c',
            'studio' => 'visible',
            'label' => 'LBL_CAT',
          ),
          1 => 
          array (
            'name' => 'subcategory_c',
            'studio' => 'visible',
            'label' => 'LBL_SUBCATEGORY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'source',
            'label' => 'LBL_SOURCE',
          ),
          1 => 
          array (
            'name' => 'service_persona_c',
            'studio' => 'visible',
            'label' => 'LBL_SERVICE_PERSONA',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'agent_outlet_c',
            'studio' => 'visible',
            'label' => 'LBL_AGENT_OUTLET',
          ),
          1 => 
          array (
            'name' => 'amount_disput_c',
            'label' => 'LBL_AMOUNT_DISPUT',
          ),
        ),
        7 => 
        array (
          0 => 'account_name',
          1 => 'assigned_user_name',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'choose_file_c',
            'studio' => 'visible',
            'label' => 'LBL_CHOOSE_FILE',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 'description',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'comment' => 'The resolution of the case',
            'label' => 'LBL_RESOLUTION',
          ),
          1 => 
          array (
            'name' => 'update_info_c',
            'studio' => 'visible',
            'label' => 'LBL_UPDATE_INFO',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
