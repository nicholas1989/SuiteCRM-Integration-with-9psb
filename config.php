<?php
// created: 2023-02-06 10:08:12
$sugar_config = array (
  'addAjaxBannedModules' => 
  array (
    0 => 'SecurityGroups',
  ),
  'admin_access_control' => false,
  'admin_export_only' => false,
  'allowed_preview' => 
  array (
    0 => 'pdf',
    1 => 'gif',
    2 => 'png',
    3 => 'jpeg',
    4 => 'jpg',
  ),
  'anti_malware_scanners' => 
  array (
    'SuiteCRM\\Utility\\AntiMalware\\Providers\\ClamTCP' => 
    array (
      'name' => 'ClamAntiVirus TCP',
      'support_page' => 'https://www.clamav.net/',
      'enabled' => false,
      'path' => NULL,
      'options' => 
      array (
        'ip' => '127.0.0.1',
        'port' => 3310,
        'type' => 'local',
      ),
    ),
    'SuiteCRM\\Utility\\AntiMalware\\Providers\\Sophos' => 
    array (
      'name' => 'Sophos Anti Virus (Linux)',
      'support_page' => 'https://www.sophos.com/en-us/products/free-tools/sophos-antivirus-for-linux.aspx',
      'enabled' => false,
      'path' => '/opt/sophos-av/bin/savscan',
      'options' => '-ss',
    ),
  ),
  'aod' => 
  array (
    'enable_aod' => true,
  ),
  'aop' => 
  array (
    'distribution_method' => 'roundRobin',
    'case_closure_email_template_id' => '58fecb89-220c-79e3-b20d-63e0c30c2be3',
    'joomla_account_creation_email_template_id' => '912e311b-827a-d136-35b1-63e0c30f8ea2',
    'case_creation_email_template_id' => '941997ed-72b7-c932-f01b-63e0c356b458',
    'contact_email_template_id' => 'adc83dd4-27e9-1d65-8515-63e0c3ad9a70',
    'user_email_template_id' => 'b066a8c5-3d3d-e352-164f-63e0c30e2d43',
  ),
  'aos' => 
  array (
    'version' => '5.3.3',
    'contracts' => 
    array (
      'renewalReminderPeriod' => '14',
    ),
    'lineItems' => 
    array (
      'totalTax' => false,
      'enableGroups' => true,
    ),
    'invoices' => 
    array (
      'initialNumber' => '1',
    ),
    'quotes' => 
    array (
      'initialNumber' => '1',
    ),
  ),
  'cache_dir' => 'cache/',
  'calculate_response_time' => true,
  'calendar' => 
  array (
    'default_view' => 'week',
    'show_calls_by_default' => true,
    'show_tasks_by_default' => true,
    'show_completed_by_default' => true,
    'editview_width' => 990,
    'editview_height' => 485,
    'day_timestep' => 15,
    'week_timestep' => 30,
    'items_draggable' => true,
    'items_resizable' => true,
    'enable_repeat' => true,
    'max_repeat_count' => c,
  ),
  'chartEngine' => 'Jit',
  'common_ml_dir' => '',
  'create_default_user' => false,
  'cron' => 
  array (
    'max_cron_jobs' => 10,
    'max_cron_runtime' => 30,
    'min_cron_interval' => 30,
  ),
  'dashlet_auto_refresh_min' => 30,
  'dashlet_display_row_options' => 
  array (
    0 => '1',
    1 => '3',
    2 => '5',
    3 => '10',
  ),
  'date_formats' => 
  array (
    'Y-m-d' => '2010-12-23',
    'm-d-Y' => '12-23-2010',
    'd-m-Y' => '23-12-2010',
    'Y/m/d' => '2010/12/23',
    'm/d/Y' => '12/23/2010',
    'd/m/Y' => '23/12/2010',
    'Y.m.d' => '2010.12.23',
    'd.m.Y' => '23.12.2010',
    'm.d.Y' => '12.23.2010',
  ),
  'datef' => 'm/d/Y',
  'dbconfig' => 
  array (
    'db_host_name' => 'localhost',
    'db_host_instance' => 'SQLEXPRESS',
    'db_user_name' => 'root',
<<<<<<< HEAD
    'db_password' => 'Password123',
=======
    'db_password' => '',
    // 'db_password' => 'Interra123!',
>>>>>>> binary
    // 'db_name' => 'psboauth_db',
    'db_name' => 'db_psb',
    'db_type' => 'mysql',
    'db_port' => '',
    'db_manager' => 'MysqliManager',
    'collation' => 'utf8mb4_general_ci',
    'charset' => 'utf8mb4',
  ),
  'dbconfigoption' => 
  array (
    'persistent' => true,
    'autofree' => false,
    'debug' => 0,
    'ssl' => false,
    'collation' => 'utf8mb4_general_ci',
    'charset' => 'utf8mb4',
  ),
  'default_action' => 'index',
  'default_charset' => 'UTF-8',
  'default_currency_iso4217' => 'USD',
  'default_currency_name' => 'US Dollars',
  'default_currency_significant_digits' => 2,
  'default_currency_symbol' => '$',
  'default_date_format' => 'm/d/Y',
  'default_decimal_seperator' => '.',
  'default_email_charset' => 'UTF-8',
  'default_email_client' => 'sugar',
  'default_email_editor' => 'html',
  'default_export_charset' => 'UTF-8',
  'default_language' => 'en_us',
  'default_locale_name_format' => 's f l',
  'default_max_tabs' => 10,
  'default_module' => 'Home',
  'default_module_favicon' => false,
  'default_navigation_paradigm' => 'gm',
  'default_number_grouping_seperator' => ',',
  'default_password' => '',
  'default_permissions' => 
  array (
    'dir_mode' => 1528,
    'file_mode' => 493,
    'user' => '',
    'group' => '',
  ),
  'default_subpanel_links' => false,
  'default_subpanel_tabs' => true,
  'default_swap_last_viewed' => false,
  'default_swap_shortcuts' => false,
  'default_theme' => 'SuiteP',
  'default_time_format' => 'h:ia',
  'default_user_is_admin' => false,
  'default_user_name' => '',
  'demoData' => 'no',
  'developerMode' => false,
  'disable_convert_lead' => false,
  'disable_export' => false,
  'disable_persistent_connections' => false,
  'display_email_template_variable_chooser' => false,
  'display_inbound_email_buttons' => false,
  'dump_slow_queries' => false,
  'email_address_separator' => ',',
  'email_confirm_opt_in_email_template_id' => '5268cfc6-7396-6c9f-e14d-63e0c39f4087',
  'email_default_client' => 'sugar',
  'email_default_delete_attachments' => true,
  'email_default_editor' => 'html',
  'email_enable_auto_send_opt_in' => false,
  'email_enable_confirm_opt_in' => 'not-opt-in',
  'email_warning_notifications' => true,
  'enable_action_menu' => true,
  'enable_line_editing_detail' => true,
  'enable_line_editing_list' => true,
  'export_delimiter' => ',',
  'export_excel_compatible' => false,
  'filter_module_fields' => 
  array (
    'Users' => 
    array (
      0 => 'show_on_employees',
      1 => 'portal_only',
      2 => 'is_group',
      3 => 'system_generated_password',
      4 => 'external_auth_only',
      5 => 'sugar_login',
      6 => 'authenticate_id',
      7 => 'pwd_last_changed',
      8 => 'is_admin',
      9 => 'user_name',
      10 => 'user_hash',
      11 => 'password',
      12 => 'last_login',
      13 => 'oauth_tokens',
    ),
    'Employees' => 
    array (
      0 => 'show_on_employees',
      1 => 'portal_only',
      2 => 'is_group',
      3 => 'system_generated_password',
      4 => 'external_auth_only',
      5 => 'sugar_login',
      6 => 'authenticate_id',
      7 => 'pwd_last_changed',
      8 => 'is_admin',
      9 => 'user_name',
      10 => 'user_hash',
      11 => 'password',
      12 => 'last_login',
      13 => 'oauth_tokens',
    ),
  ),
  'google_auth_json' => '',
  'hide_subpanels' => true,
  'history_max_viewed' => 50,
  'host_name' => 'psbcrm.interranetworks.com',
  'id_validation_pattern' => '/^[a-zA-Z0-9_-]*$/i',
  'imap_test' => false,
  'import_max_execution_time' => 3600,
  'import_max_records_per_file' => 100,
  'import_max_records_total_limit' => '',
  'installer_locked' => true,
  'jobs' => 
  array (
    'min_retry_interval' => 30,
    'max_retries' => 5,
    'timeout' => 86400,
  ),
  'js_custom_version' => '',
  'js_lang_version' => 1,
  'languages' => 
  array (
    'en_us' => 'English (US)',
  ),
  'large_scale_test' => false,
  'lead_conv_activity_opt' => 'donothing',
  'legacy_email_behaviour' => false,
  'list_max_entries_per_page' => 20,
  'list_max_entries_per_subpanel' => 10,
  'lock_default_user_name' => false,
  'lock_homepage' => false,
  'lock_subpanels' => false,
  'log_dir' => '.',
  'log_file' => 'suitecrm.log',
  'log_memory_usage' => false,
  'logger' => 
  array (
    'level' => 'fatal',
    'file' => 
    array (
      'ext' => '.log',
      'name' => 'suitecrm',
      'dateFormat' => '%c',
      'maxSize' => '10MB',
      'maxLogs' => 10,
      'suffix' => '',
    ),
  ),
  'max_dashlets_homepage' => '15',
  'name_formats' => 
  array (
    's f l' => 's f l',
    'f l' => 'f l',
    's l' => 's l',
    'l, s f' => 'l, s f',
    'l, f' => 'l, f',
    's l, f' => 's l, f',
    'l s f' => 'l s f',
    'l f s' => 'l f s',
  ),
  'oauth2_encryption_key' => '1DXVDMbHbodM0VScpT2GJp4BI0KfwhlcZRj031S4wvk=',
  'passwordsetting' => 
  array (
    'SystemGeneratedPasswordON' => '',
    'generatepasswordtmpl' => '770064bb-20b7-9eb8-52cf-63e0c3c4796d',
    'lostpasswordtmpl' => 'ae8a6899-0214-df16-4d68-63e0c33ccc9f',
    'factoremailtmpl' => 'b23fe541-d14d-5f6c-2f5e-63e0c3307223',
    'forgotpasswordON' => false,
    'linkexpiration' => '1',
    'linkexpirationtime' => '30',
    'linkexpirationtype' => '1',
    'systexpiration' => '1',
    'systexpirationtime' => '7',
    'systexpirationtype' => '1',
    'systexpirationlogin' => '',
  ),
  'pdf' => 
  array (
    'defaultEngine' => 'TCPDFEngine',
  ),
  'portal_view' => 'single_user',
  'require_accounts' => true,
  'resource_management' => 
  array (
    'special_query_limit' => 50000,
    'special_query_modules' => 
    array (
      0 => 'AOR_Reports',
      1 => 'Export',
      2 => 'Import',
      3 => 'Administration',
      4 => 'Sync',
    ),
    'default_limit' => 1000,
  ),
  'rss_cache_time' => '10800',
  'save_query' => 'all',
  'search' => 
  array (
    'controller' => 'UnifiedSearch',
    'defaultEngine' => 'BasicSearchEngine',
    'pagination' => 
    array (
      'min' => 10,
      'max' => 50,
      'step' => 10,
    ),
    'ElasticSearch' => 
    array (
      'enabled' => false,
      'host' => 'localhost',
      'user' => '',
      'pass' => '',
      'index' => 'ab9ad3f524107d6773669a6ef30cfca6',
      'search_wildcard_char' => '%',
      'search_wildcard_infront' => true,
    ),
  ),
  'search_wildcard_char' => '%',
  'search_wildcard_infront' => false,
  'securitysuite_additive' => true,
  'securitysuite_filter_user_list' => false,
  'securitysuite_inherit_assigned' => true,
  'securitysuite_inherit_creator' => true,
  'securitysuite_inherit_parent' => true,
  'securitysuite_popup_select' => false,
  'securitysuite_strict_rights' => false,
  'securitysuite_user_popup' => true,
  'securitysuite_user_role_precedence' => true,
  'securitysuite_version' => '6.5.17',
  'session_dir' => 'session',
  'session_gc' => 
  array (
    'enable' => true,
    'gc_probability' => 1,
    'gc_divisor' => 100,
  ),
  'showDetailData' => true,
  'showThemePicker' => true,
  'site_url' => 'https://psbcrm.interranetworks.com/psbcrm',
  'slow_query_time_msec' => '100',
  'stackTrace' => false,
  'stack_trace_errors' => false,
  'strict_id_validation' => false,
  'sugar_version' => '6.5.25',
  'sugarbeet' => false,
  'suitecrm_version' => '7.13.1',
  'system_email_templates' => 
  array (
    'confirm_opt_in_template_id' => '5268cfc6-7396-6c9f-e14d-63e0c39f4087',
  ),
  'time_formats' => 
  array (
    'H:i' => '23:00',
    'h:ia' => '11:00pm',
    'h:iA' => '11:00PM',
    'h:i a' => '11:00 pm',
    'h:i A' => '11:00 PM',
    'H.i' => '23.00',
    'h.ia' => '11.00pm',
    'h.iA' => '11.00PM',
    'h.i a' => '11.00 pm',
    'h.i A' => '11.00 PM',
  ),
  'timef' => 'H:i',
  'tmp_dir' => 'cache/xml/',
  'tracker_max_display_length' => 15,
  'translation_string_prefix' => false,
  'unique_key' => 'ab9ad3f524107d6773669a6ef30cfca6',
  'upload_badext' => 
  array (
    0 => 'php',
    1 => 'php3',
    2 => 'php4',
    3 => 'php5',
    4 => 'php6',
    5 => 'php7',
    6 => 'php8',
    7 => 'pl',
    8 => 'cgi',
    9 => 'py',
    10 => 'asp',
    11 => 'cfm',
    12 => 'js',
    13 => 'vbs',
    14 => 'html',
    15 => 'htm',
    16 => 'phtml',
    17 => 'phar',
  ),
  'upload_dir' => 'upload/',
  'upload_maxsize' => 30000000,
  'use_common_ml_dir' => false,
  'use_real_names' => true,
  'valid_image_ext' => 
  array (
    0 => 'gif',
    1 => 'png',
    2 => 'jpg',
    3 => 'jpeg',
    4 => 'svg',
    5 => 'bmp',
  ),
  'vcal_time' => '2',
  'verify_client_ip' => true,
);
