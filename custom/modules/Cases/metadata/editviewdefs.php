<?php
$viewdefs ['Cases'] = 
array (
  'EditView' => 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/bindWithDelay.js',
        ),
        1 => 
        array (
          'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
        ),
        2 => 
        array (
          'file' => 'include/javascript/qtip/jquery.qtip.min.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
            ),
          ),
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
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'nl2br' => true,
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'email_source_c',
            'studio' => 'visible',
            'label' => 'LBL_EMAIL_SOURCE',
          ),
          1 => 
          array (
            'name' => 'source_email_c',
            'label' => 'LBL_SOURCE_EMAIL',
          ),
        ),
      ),
    ),
  ),
);
;
?>
